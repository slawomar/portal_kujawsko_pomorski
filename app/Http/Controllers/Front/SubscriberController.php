<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Mail\Websitemail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller

{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email'
        ]);
        if(!$validator->passes())
        {
            return response()->json(['code'=>0,'error_message'=>$validator->errors()->toArray()]);
        }
        else
        {
            
            $token = hash('sha256', time());
            $subscriber = new Subscriber();
            $subscriber->email = $request->email;
            $subscriber->token = $token;
            $subscriber->status = 'Pending';
            $subscriber->save();

            
            //Przesyłanie maila
            $subject = 'Weryfikacja Konta Email Subskrybenta';
            
            $verification_link = url('subscriber/verify/'.$token.'/'.$request->email);

            $message = 'Kliknij proszę na następujący link, żeby zweryfikować się jako subskrybent<br>';
            $message .= '<a href="'.$verification_link.'">';
            $message .= $verification_link;
            $message .= '</a>';

            
            Mail::to($request->email)->send(new Websitemail($subject,$message));

            return response()->json(['code'=>1,'success_message'=>'Sprawdz prosze swoj adres email, aby zweryfikowac subskrybcje']);
        }
    }

    public function verify($token,$email)
    {
        $subscriber_data = Subscriber::where('token',$token)->where('email',$email)->first();
        if($subscriber_data)
        {
            $subscriber_data->token = '';
            $subscriber_data->status = 'Active';
            $subscriber_data->update();

            return redirect()->back()->with('success', 'Zostales pomyslnie zweryfikowany w tym systemie jako subskrybent');
        } 
        else
        {
            return redirect()->route('home');
        }

    }
}
