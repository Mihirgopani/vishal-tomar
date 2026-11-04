<?php

namespace App\Http\Controllers;

use App\Mail\ConsultationEnquiryMail;
use App\Models\ConsultationEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    /**
     * Show contact page & consultation intake form
     */
    public function index()
    {
        $chambers = config('chambers');
        $workingAreas = $chambers['working_areas'];

        // Seed spam protection timestamp in session
        session(['form_rendered_at' => now()->timestamp]);

        return view('pages.contact', compact('chambers', 'workingAreas'));
    }

    /**
     * Handle consultation form submission with anti-spam defense
     */
    public function submit(Request $request)
    {
        // 1. Spam Protection: Honeypot check
        // If a bot filled out the hidden honeypot input, silently act as success without saving or sending
        if ($request->filled('chambers_security_key') || $request->filled('website_hp')) {
            Log::info('Spam honeypot triggered by bot from IP: ' . $request->ip());

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'reference_id' => 'VT-' . rand(100000, 999999),
                    'message' => 'Your consultation request has been recorded.',
                ]);
            }

            return redirect()->route('contact')->with([
                'success' => true,
                'reference_id' => 'VT-' . rand(100000, 999999),
                'client_name' => strip_tags($request->input('name', 'Client')),
            ]);
        }

        // 2. Spam Protection: Minimum submission time check (must be at least 3 seconds)
        $renderedAt = session('form_rendered_at', 0);
        $elapsed = now()->timestamp - $renderedAt;
        if ($renderedAt > 0 && $elapsed < 3) {
            Log::warning('Form submitted too fast (' . $elapsed . 's) from IP: ' . $request->ip());
            return back()->withInput()->withErrors([
                'spam' => 'Submission processed too quickly. Please take a moment to review your details and re-submit.',
            ]);
        }

        // 3. Validation
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:120'],
            'email' => ['required', 'email:rfc', 'max:150'],
            'phone' => ['required', 'string', 'min:8', 'max:25'],
            'practice_area' => ['required', 'string', 'max:100'],
            'court_forum' => ['nullable', 'string', 'max:120'],
            'message' => ['required', 'string', 'min:15', 'max:3500'],
            'consent' => ['required', 'accepted'],
        ], [
            'name.required' => 'Please provide your full name or company name.',
            'email.required' => 'A valid email address is required for confidential coordination.',
            'email.email' => 'Please enter a valid business or personal email address.',
            'phone.required' => 'A telephone contact is necessary for urgent listing notices.',
            'practice_area.required' => 'Please select the relevant practice area for proper allocation.',
            'message.required' => 'Please provide a brief summary of the matter or legal query.',
            'message.min' => 'Please provide at least a short sentence outlining the dispute facts (min 15 characters).',
            'consent.accepted' => 'You must acknowledge the Bar Council of India non-solicitation disclaimer.',
        ]);

        // 4. Generate unique reference code
        $refId = 'VT-' . strtoupper(Str::random(3)) . '-' . rand(1000, 9999);

        // 5. Store in database
        $enquiry = ConsultationEnquiry::create([
            'reference_id' => $refId,
            'name' => strip_tags($validated['name']),
            'email' => strtolower(trim($validated['email'])),
            'phone' => strip_tags($validated['phone']),
            'practice_area' => strip_tags($validated['practice_area']),
            'court_forum' => !empty($validated['court_forum']) ? strip_tags($validated['court_forum']) : null,
            'message' => strip_tags($validated['message']),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'status' => 'new',
        ]);

        // 6. Send email notification to info@thechamberofvrtomar.com
        $destinationEmail = config('chambers.email', 'info@thechamberofvrtomar.com');

        try {
            Mail::to($destinationEmail)->send(new ConsultationEnquiryMail($enquiry));
            Log::info("Consultation enquiry [{$refId}] successfully dispatched to {$destinationEmail}");
        } catch (\Throwable $e) {
            // Log mail failure without crashing user intake
            Log::error("Failed to send consultation email [{$refId}]: " . $e->getMessage(), [
                'exception' => $e,
            ]);
        }

        // Reset session token
        session()->forget('form_rendered_at');

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'reference_id' => $refId,
                'client_name' => $enquiry->name,
                'message' => 'Your consultation request has been securely recorded. Our registry will respond promptly.',
            ]);
        }

        return redirect()->route('contact')->with([
            'success' => true,
            'reference_id' => $refId,
            'client_name' => $enquiry->name,
        ]);
    }
}
