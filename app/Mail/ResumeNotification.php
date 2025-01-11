<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class ResumeNotification extends Mailable
{
    use Queueable, SerializesModels;
    public $resumeData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($resumeData)
    {
        $this->resumeData = $resumeData;
    }

    public function build()
    {
        return $this->view('mails.resume-notification')
            ->subject('New Resume Submission')
            ->attach(storage_path('app/public/' . $this->resumeData['resume']), [
                'as' => 'resume.pdf',
                'mime' => 'application/pdf'
            ]);
    }
}
