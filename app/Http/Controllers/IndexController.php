<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\ContactMail;

class IndexController extends Controller
{
    public function index() {
        return view('index');
    }

    public function send(Request $request) {
        
        Mail::send(new ContactMail($request));

        $sent = True;
        
        return view('index', compact('sent'));
    }
}
