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
        Contact::create(request()->except('_token'));

        return back()->withMessage('Data Saved!');

    }

    public function listOfContact()
    {
        $listOfContacts = Contact::all();

        return view('contact-list', compact('listOfContacts'));
        // return view('contact-list')->with(['myName'=> $myName]);
    }

    public function destroy($contactId)
    {
        // method 1
        // $contact = Contact::find($contactId);

        // $contact->delete();

        Contact::destroy($contactId);

        return back()->withMessage("contact deleted");

    }
}
