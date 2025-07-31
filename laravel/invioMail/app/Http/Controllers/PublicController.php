<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage () {
    return view('welcome');
}

public function contactUs(){
    return view('contattaci');
}

public function thankYou(){
    return view('thankYou');
}

public function submit(Request $request){
// dd($request->all());
    $name= $request->input('username');
    $email= $request->input('email');
    $usermessage= $request->input('message');

    Mail::to($email)->send(new ContactMail($name, $email, $usermessage));

    
    // return redirect()->route('home')->with('status', 'Mail inviata con successo, sarai ricontattato al più presto!');
    return redirect()->route('thankYou.page');
}
}
