<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store()
    {
    	//validate form
    	$this->validate(request(),[
    		'name'=>'required',
    		'email'=>'required|email',
    		'password'=>'required|confirmed'
    	]);

    	// save the user

    	$user=User::create(request(['name','email','password']));
    	
    	// sign them in
    	auth()->login($user);

    	// redirect to home page

    	return redirect()->home();

    }
}
