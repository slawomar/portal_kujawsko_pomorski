<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Mail\Websitemail;
use App\Models\Page;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index() 
    {
        $page_data = Page::where('id',1)->first();
        return view('front.contact', compact('page_data'));
    }

    public function send_email(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' =>'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        if(!$validator->passes())
        {
            return response()->json(['code'=>0,'error_message'=>$validator->errors()->toArray()]);
        }
        else
        {
            //Przesyłanie maila
            $admin_data = Admin::where('id',1)->first();
            $subject = 'Formularz Kontaktowy Email';
            $message = 'Wiadomość Gościa szczegóły:<br>';
            $message .= '<b>Imię i Nazwisko Gościa: <b>'.$request->name.'<br>';
            $message .= '<b>Email Gościa: <b>'.$request->email.'<br>';
            $message .= '<b>Wiadomość od Gościa: <b>'.$request->message;
            Mail::to($admin_data->email)->send(new Websitemail($subject,$message));

            return response()->json(['code'=>1,'success_message'=>'Email is sent']);
        }
    }
}
