<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class IndexController extends Controller
{
    public function index() {
        return view('index');
    }

    public function store() {
        $contact = new Contact;

        $contact->name = request('name');
        $contact->email = request('email');
        $contact->message = request('message');

        $contact->save();
        return view('index');
    }
}
