<?php

namespace App\Http\Controllers;

use App\Mail\sendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;




class SendEmailController extends Controller
{
     function index(){
        return view('contact');
    }

     function send(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required'
        ]);


        $data = array(
            'name' => $request->name,
            'subject' => $request->subject,
            'email' => $request->email,
            'message' => $request->message
        );

        //Mail::to('auto.ensa@gmail.com')->send(new SendMail($data));

        Mail::to('auto.ensa@gmail.com')->send(new sendMail($data));
        return back()->with('success', 'Your message is sended, thanks for contacting us');

    }
}
