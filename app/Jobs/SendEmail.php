<?php

namespace App\Jobs;

use App\Services\notification\notification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class sendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
 private $adressemail;
 private $mailable;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($adressemail,Mailable $mailable)
    {
        $this->adressemail=$adressemail;
        $this->mailable=$mailable;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(notification $notification)
    {
       return $notification->send_mail($this->adressemail,$this->mailable);
    }
}
