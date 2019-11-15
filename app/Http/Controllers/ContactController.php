<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/** Manually importing the helper Mail */
use Illuminate\Support\Facades\Mail;
/** As well as the mail template created with Artisan */
use App\Mail\ContactMail;

class ContactController extends Controller
{
    //

    public function create(){

        return view('contact.create');

    }

    public function store(){


        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // Let's now send our email
        Mail::to('test@test.com')->send(new ContactMail($data) );

        return view('contact.create', )->with('SuccessMessage', 'Your email was succesfully sent to our databases.');

    }

}

