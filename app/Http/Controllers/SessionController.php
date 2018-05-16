<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
public function __contruct()
{
    $this->middleware('guest');
}

   public function create()
    {
    	return view('session.create');
    }

    public function store()
    {
    	//attempt to authenticate user
    	if (! auth()->attempt(request(['email','password'])))
    	{
    		return back()->withErrors([
                'message'=> 'Please check your credentials and try again.'
            ]);
    	}

    	return redirect()->home();
    	//if not , redirect back


    	// if so, sign them in

    	//redirect to home page


    }

    public function destroy()
    {
    	auth()->logout();
    	return redirect()->home();
    }
}
