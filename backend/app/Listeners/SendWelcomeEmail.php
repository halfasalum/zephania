<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Mail\WelcomeUserMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail implements ShouldQueue
{
    use InteractsWithQueue;

    public $tries = 10;       // retry 3 times
    public $backoff = 60;    // wait 60s between retries

    public function handle(UserCreated $event): void
    {
        Mail::to($event->user->email)->send(
            new WelcomeUserMail(
                $event->user,
                $event->plainPassword
            )
        );
    }
}

