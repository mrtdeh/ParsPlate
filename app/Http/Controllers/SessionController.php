<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

	public function __constructor()
	
	{
		
		$this->middleware("guest",["except" => "destroy"]);
	
	}

	public function create()
	
	{

		if(auth()->check())
			if(auth()->user()->isSuperAdmin())
				return redirect('/panel/dashboard');
			else
				return redirect()->home();
		
		return view("login");
		
	}


	public function store()
	
	{

		if(! auth()->attempt(request(["email", "password"]))) {

			return back()->withErrors([

				"message" => "email or password invalid"

			]);
		}	

		if(auth()->user()->isSuperAdmin())
			return redirect('/panel/dashboard');
		else
			return redirect()->home();
	}


	public function destroy()
	
	{
		
		auth()->logout();

		return redirect()->home();
	
	}

}
