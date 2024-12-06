<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $messageData;
    public $isOwner;

    public function __construct($messageData, $isOwner)
    {
        $this->messageData = $messageData;
        $this->isOwner = $isOwner;
    }

    public function build()
    {
        $view = $this->isOwner 
            ? 'emails.owner-notification' 
            : 'emails.customer-notification';

        return $this->subject('New Message Notification')
                    ->view($view)
                    ->with([
                        'messageData' => $this->messageData,
                    ]);
    }
}

