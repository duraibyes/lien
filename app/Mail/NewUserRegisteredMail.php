<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserRegisteredMail extends Mailable
{
    use Queueable, SerializesModels;

    public User $superUser;
    public User $newUser;

    public function __construct(User $superUser, User $newUser)
    {
        $this->superUser = $superUser;
        $this->newUser   = $newUser;
    }

    public function build()
    {
        return $this
            ->subject('New User Registered')
            ->view('emails.new-user-registered');
    }
}
