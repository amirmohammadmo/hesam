<?php

namespace App\Services\notification;


use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class notification
{
    public function send_mail_admin_apllying($user,Mailable $mailable)
    {
       return Mail::to($user)->send($mailable);

    }


}
