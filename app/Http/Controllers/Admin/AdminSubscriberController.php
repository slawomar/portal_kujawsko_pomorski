<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Mail\Websitemail;
use Illuminate\Support\Facades\Mail;

class AdminSubscriberController extends Controller
{
    public function show_all()
    {
        $subscribers = Subscriber::where('status','Active')->get();
        return view('admin.subscriber_all',compact('subscribers'));
    }

    //wysylam maila do wszystkich subskrybentow
    public function send_email()
    {
        return view('admin.subscriber_send_email');
    }

    public function send_email_submit(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'message' => 'required'
        ]);
        
        //skopiowany z adminpostcontroller
        $subject = $request->subject;
        $message = $request->message;

        $subscribers = Subscriber::where('status','Active')->get();
        foreach($subscribers as $row) {
            // wysylamy email
            Mail::to($row->email)->send(new Websitemail($subject,$message));
        }

        return redirect()->back()->with('success', 'Mail zostal pomyslnie przeslany');
    }
}
