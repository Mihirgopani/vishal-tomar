<?php

namespace Tests\Feature;

use App\Mail\ConsultationEnquiryMail;
use App\Models\ConsultationEnquiry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ChambersWebsiteTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_renders_with_required_content(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Vishalkumar R Tomar');
        $response->assertSee('THE CHAMBER OF V R TOMAR');
        $response->assertSee('assets/images/home/about.jpeg');
        $response->assertSee('Criminal Litigation');
        $response->assertSee('White Collar Crime');
        $response->assertSee('Cyber Crime Matters');
        $response->assertSee('Civil Litigation');
        $response->assertSee('Constitutional & Writ Litigation');
        $response->assertSee('Alternate Dispute Resolution');
        $response->assertSee('Risk Management');
        $response->assertSee('Due - Compliance');
    }

    public function test_about_page_renders_successfully(): void
    {
        $response = $this->get(route('about'));

        $response->assertStatus(200);
        $response->assertSee('Vishalkumar R Tomar');
        $response->assertSee('THE CHAMBER OF V R TOMAR');
        $response->assertSee('assets/images/home/about.jpeg');
        $response->assertSee('assets/images/home/other-1.jpeg');
        $response->assertSee('assets/images/home/other-2.jpeg');
    }

    public function test_services_index_and_all_detail_pages_render(): void
    {
        $response = $this->get(route('services'));
        $response->assertStatus(200);

        $areas = config('chambers.working_areas');
        $this->assertCount(8, $areas);

        foreach ($areas as $area) {
            $detailResponse = $this->get(route('services.detail', $area['slug']));
            $detailResponse->assertStatus(200);
            $detailResponse->assertSee($area['title']);
            $detailResponse->assertSee('THE CHAMBER OF V R TOMAR');
        }
    }

    public function test_gallery_page_renders_with_all_images(): void
    {
        $response = $this->get(route('gallery'));

        $response->assertStatus(200);
        $response->assertSee('assets/images/home/about.jpeg');
        $response->assertSee('assets/images/home/other-1.jpeg');
        $response->assertSee('assets/images/home/other-2.jpeg');
        $response->assertSee('assets/images/with_client_celebrities/image-1.jpeg');
        $response->assertSee('assets/images/with_client_celebrities/image-8.jpeg');
    }

    public function test_reviews_page_renders_with_google_testimonials(): void
    {
        $response = $this->get(route('reviews'));

        $response->assertStatus(200);
        $response->assertSee('Karan Khanchandani');
        $response->assertSee('Navin Patel');
        $response->assertSee('Parveen Bhatt');
        $response->assertSee('Rene Joshilda');
        $response->assertSee('Rohit Sharma');
        $response->assertSee('Nitya Patel');
        $response->assertSee('Riya Wadhvani');
        $response->assertSee('Komal Kumari', false);
        $response->assertSee('Rahul Jha');
        $response->assertSee('4D SQUARE MALL');
    }

    public function test_sectors_routes_redirect_to_services(): void
    {
        $response = $this->get(route('sectors'));
        $response->assertRedirect(route('services'));

        $detailResponse = $this->get('/sectors/corporate-commercial');
        $detailResponse->assertRedirect(route('services'));
    }

    public function test_phone_number_and_address_present_on_pages(): void
    {
        $response = $this->get(route('home'));
        $response->assertStatus(200);
        $response->assertSee('98988 77690');
        $response->assertSee('17, SECOND FLOOR, 4D SQUARE MALL, VISAT - GANDHINAGAR HIGHWAY, MOTERA, AHMEDABAD, GUJARAT');

        $contactResponse = $this->get(route('contact'));
        $contactResponse->assertStatus(200);
        $contactResponse->assertSee('98988 77690');
        $contactResponse->assertSee('17, SECOND FLOOR, 4D SQUARE MALL');
    }

    public function test_insights_pages_render(): void
    {
        $response = $this->get(route('insights'));
        $response->assertStatus(200);

        foreach (config('chambers.insights') as $ins) {
            $insResponse = $this->get(route('insights.detail', $ins['slug']));
            $insResponse->assertStatus(200);
            $insResponse->assertSee($ins['title']);
        }
    }

    public function test_legal_disclaimer_and_privacy_policy_render(): void
    {
        $this->get(route('disclaimer'))->assertStatus(200)->assertSee('Bar Council of India');
        $this->get(route('privacy.policy'))->assertStatus(200)->assertSee('DPDP Act');
    }

    public function test_sitemap_and_robots_txt_render(): void
    {
        $sitemap = $this->get(route('sitemap'));
        $sitemap->assertStatus(200);
        $sitemap->assertHeader('Content-Type', 'text/xml; charset=UTF-8');

        $robots = $this->get(route('robots'));
        $robots->assertStatus(200);
        $robots->assertHeader('Content-Type', 'text/plain; charset=UTF-8');
        $robots->assertSee('Sitemap:');
    }

    public function test_contact_form_submission_success(): void
    {
        Mail::fake();

        // Seed session timestamp to pass spam time check
        $payload = [
            'name' => 'Karan Khanchandani',
            'email' => 'client@thechamberofvrtomar.com',
            'phone' => '+91 98250 11223',
            'practice_area' => 'Criminal Litigation',
            'court_forum' => 'High Court of Gujarat',
            'message' => 'Seeking urgent legal consultation regarding appellate revision proceedings before the High Court of Gujarat.',
            'consent' => '1',
        ];

        $response = $this->withSession(['form_rendered_at' => now()->subSeconds(10)->timestamp])
            ->post(route('contact.submit'), $payload);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHas('success', true);

        // Verify record in database
        $this->assertDatabaseHas('consultation_enquiries', [
            'email' => 'client@thechamberofvrtomar.com',
            'practice_area' => 'Criminal Litigation',
        ]);

        // Verify mail sent to info@thechamberofvrtomar.com
        Mail::assertSent(ConsultationEnquiryMail::class, function ($mail) {
            return $mail->hasTo('info@thechamberofvrtomar.com');
        });
    }

    public function test_contact_form_honeypot_traps_bot(): void
    {
        Mail::fake();

        $payload = [
            'chambers_security_key' => 'bot-spam-value', // Honeypot filled by bot
            'name' => 'Spam Bot',
            'email' => 'spambot@fake.com',
            'phone' => '+1 800 000 0000',
            'practice_area' => 'Criminal Litigation',
            'message' => 'Spam link advertisement text...',
            'consent' => '1',
        ];

        $response = $this->post(route('contact.submit'), $payload);

        $response->assertRedirect(route('contact'));

        // Database should NOT contain bot spam
        $this->assertDatabaseMissing('consultation_enquiries', [
            'email' => 'spambot@fake.com',
        ]);

        // No mail sent
        Mail::assertNothingSent();
    }
}
