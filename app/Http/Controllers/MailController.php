<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PharIo\Manifest\Email;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function send(Request $req){
        $date = [
            'name' => $req->name,
            'kana' => $req->kana,
            'phone' => $req->phone,
            'company' => $req->company,
            'mail' => $req->mail,
            'remail' => $req->remail,
            'comment' => $req->comment
    
        ];
    
        //dd($date); 
        Mail::send('top.mail',['date'=>$date], function($message){
            $message->to('yui.17w210@gmail.com','test')
                    ->subject('This is Test Mail');
    });
return view('top.sended');
   
}
}
