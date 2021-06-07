<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index() 
    {
        $newsData = ContactUs::get();
        return view('contact.index',compact('newsData'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'recaptcha',  
        ]);
        
        // check if validator fails
        if($validator->fails()) {
            $errors = $validator->errors();
            return redirect('/')
            ->withErrors($validator)
            ->withInput();
        }

        $contectUs = ContactUs::create($request->all());

        $mailData = [
            'subject'=>'hello',
            'main'=>'真的假的',
        ];

        Mail::to('silentlyautomail@gmail.com')
        ->send(new OrderShipped($mailData));

        return 'success';
    }
}
