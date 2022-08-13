<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(ContactRequest $request)
    {
        $contact=Contact::create($request->validated());
        session()->flash('message','Message send successfully!');
        return redirect()->route('home');
    }
}
