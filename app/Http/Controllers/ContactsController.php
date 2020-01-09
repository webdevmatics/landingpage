<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function homePage() {

        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function landingForm()
    {
        //validate
        request()->validate(
            [
                'first_name' => 'required',
                'email_address' => 'required|email'
            ]
        );

        // method 1 to create data
        Contact::create(request()->except('_token'));

        // method 2
        // $contact = new Contact();
        // $contact->first_name = request('first_name');
        // $contact->email_address = request('email_address');
        // $contact->save();

        return back()->withMessage('Data Saved!');

    }
}
