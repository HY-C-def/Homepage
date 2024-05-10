<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    //
    public function index(){
        
        return view("index");
    }

    public function about(){
        
        return view("top.about");
    }

    public function company(){
        
        return view("top.company");
    }

    public function contact(){
        
            return view("top.contact");
        
    }
    
    public function edit(Request $req){
    
       // dd($_POST);
         //   dd($req->all());
        $date = [
            'name' => $req->name,
            'kana' => $req->kana,
            'phone' => $req->phone,
            'company' => $req->company,
            'mail' => $req->mail,
            'remail' => $req->remail,
            'comment' => $req->comment
    
        ];
$req->session()->put('date', $date);
        return view("top.edit",compact("date"));
    
}

    public function recruit(){
        
        return view("top.recruit");
    }

    public function service(){
        
        return view("top.service");
    }

    public function privacy(){
        
        return view("top.privacy_policy");
    }

    public function info(){
        
        return view("top.info_policy");
    }
   
}
