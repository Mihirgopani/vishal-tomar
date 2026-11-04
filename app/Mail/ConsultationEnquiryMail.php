<?php

namespace App\Mail;

use App\Models\ConsultationEnquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConsultationEnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public ConsultationEnquiry $enquiry)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Chamber Consultation Request [' . $this->enquiry->reference_id . '] — ' . $this->enquiry->name,
            replyTo: [
                new Address($this->enquiry->email, $this->enquiry->name),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.consultation-enquiry',
            with: [
                'enquiry' => $this->enquiry,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

