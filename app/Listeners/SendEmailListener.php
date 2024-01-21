<?php

namespace App\Listeners;

use App\Events\SendEmailEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
 use Illuminate\Support\Facades\View;
 
class SendEmailListener implements ShouldQueue
{
    use InteractsWithQueue;
    public function handle(SendEmailEvent $event)
    {
            $user = $event->user;
            $vaemail=$user['email'];
            $vaesubject=$user['subject'];
        

        Mail::send('mail',['user' => $user],function($message) use ($user){
            $message->from("succeed@hireemployees.co");
            $message->to($user['email']);
            $message->subject($user['subject']);
			$message->attach(public_path('images/' . $user['imageName']), [
                   'as' => $user['imageName'],
                   'mime' => 'image/jpeg',  
            ]);
        });

    }
	
	
}
