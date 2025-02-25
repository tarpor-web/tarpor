<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendOtp extends Mailable
{
    use Queueable, SerializesModels;
    public $otp;
    public $type;
    /**
     * Create a new message instance.
     */
    public function __construct($otp, $type = 'verification')
    {
        $this->otp = $otp;
        $this->type = $type;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = match($this->type) { // Now $this->type is defined
            'password-reset' => 'Your Password Reset OTP',
            'registration' => 'Your Account Verification OTP',
            default => 'Your Login Verification OTP'
        };

        return new Envelope(
            subject: $subject,
        );
    }

//    public function build()
//    {
//        $subject = match($this->type) {
//            'password-reset' => 'Your Password Reset OTP',
//            'registration' => 'Your Account Verification OTP',
//            default => 'Your Login Verification OTP'
//        };
//
//        return $this->subject($subject)
//            ->view('emails.otp')
//            ->with([
//                'otp' => $this->otp,
//                'type' => $this->type
//            ]);
//    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.otp',
            with: [
                'otp' => $this->otp,
                'type' => $this->type, // Now $this->type is defined
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
