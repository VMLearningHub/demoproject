<?php
use Illuminate\Support\Facades\Log;
use Mail as MailUser;

function sendmail($view, $data, $subject,$file_to_attach='',$filename='')
{

    $receiveremail = $data['email'];
    MailUser::send('mail.email-' . $view, array(
        'email' => $receiveremail,
        'data' => $data
    ), function ($message) use ($receiveremail, $subject,$file_to_attach,$filename) {
        $message->to($receiveremail)->subject($subject);
        if($filename){
          $message->attach($file_to_attach);
        }
        
    });
    if (MailUser::failures()) {
      //  dd('failed');
    }else{
      Log::info('Mail sent successfully to : '.$receiveremail.'.');
    }
}