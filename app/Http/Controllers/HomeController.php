<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Email;
use App\Events\SendEmailEvent;
use Illuminate\Support\Facades\Event;
use View;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
 {  
    public function composeemail(){
       return view('compose');
    }
    public function dashboard(Request $request)
    {    
         $result = DB::select('SELECT COUNT(*) as count FROM emails');
         $emails = $result[0]->count;
         return view('dashboard',compact('emails'));
    }
     public function insertemail(Request $request)
    {     
         $this->validate($request, [
            'recipient' => 'required|email',
            'subject' => 'required',
            'message' => 'required' 
              
        ]);
          
           $image = $request->file('image');
           $imageName = time() . '_' . $image->getClientOriginalName();
           $image->move(public_path('images'), $imageName);

        $email = new Email;
        $email->recipient = $request->input('recipient');
        $email->subject = $request->input('subject');
        $email->message = $request->input('message');
        $email->image = $imageName;
        $email->save();
 
        $data =array(
            'email' => $request->get('recipient'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
            'imageName' => $imageName 
             
        );
        event(new \App\Events\SendEmailEvent($data));
        return back()->with('message', 'Email Composed Successfully !');
    }
    public function viewcomposed()
    {   
      $emails =Email::get();
       return view('viewcomposed',compact('emails'));
         
    }
 }