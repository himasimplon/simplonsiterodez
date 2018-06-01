<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Htpp\Requests;
use App\Http\Requests\ContactFormRequest;

use App\Mail\ContactEmail;


class ContactController extends Controller
{

	public function create()
	{
		return view('contact.create');
	}
	public function store(ContactFormRequest $request)
	{
		$contact = [];

		$contact['nom'] = $request->get('nom');
		$contact['mail'] = $request->get('mail');
		$contact['website'] = $request->get('website');
		$contact['message'] = $request->get('message');

    	// Mail delivery logic goes here
		\Mail::to('matheo.zeller@gmail.com')->send(new ContactEmail($contact));

		flash('Your message has been sent!')->success();

		return redirect()->route('contact.create');
	}

}
