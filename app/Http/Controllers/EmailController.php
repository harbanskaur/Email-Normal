<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
                                     
class EmailController extends Controller
{
    // public function index()
    // {
    //     $emaildata = [
    //         'title' => 'Mail From Harbans',
    //         'body' => 'This is testing email using SMPT',
    //     ];

    //     Mail::to('dknov2000@gmail.com')->send(new DemoMail($emaildata));

    //     dd('Email Sent Successfully');

    // }

    public function form()
    {
        return view ('form');
    }

    public function send(Request $request)
    {   
        $user=$request->get('mail');
        // $text=$request->get('text');
        

    
        $emaildata = [
                    'title' => 'Mail From Harbans',
                    // 'body' => $text ,
                  
                ];
        
                Mail::to($user)->send(new DemoMail($emaildata));
        
                dd('Email Sent Successfully');
    }
}
