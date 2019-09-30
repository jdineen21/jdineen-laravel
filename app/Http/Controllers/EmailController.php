<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send()
    {
        //$title = request('name');
        //$content = request('message');

        Mail::to('jdineen21@gmail.com')->send();

        //return response()->json(['message' => 'Request completed']);
    }
}
