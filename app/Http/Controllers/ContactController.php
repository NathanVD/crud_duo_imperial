<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function edit() {

        $contact = Contact::find(1);

        return view('admin.contact',compact('contact'));
    }

    public function update() {

        $contacts = Contact::find(1);

        if (!$contacts) {
            $contacts = new Contact;
        }

        $contacts->adress1 = request('adress1');
        $contacts->adress2 = request('adress2');
        $contacts->email = request('email');
        $contacts->phone = request('phone');

        $contacts->save();

        return redirect()->route('admin');
    }
}
