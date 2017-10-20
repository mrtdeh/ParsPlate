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
		
		return view("login");
		
	}


	public function store()
	
	{
		//dd(request(["email", "password"]));
		if(! auth()->attempt(request(["email", "password"]))) {

			return back()->withErrors([

				"message" => "email or password invalid"

			]);
		}	


		return redirect("/panel");
	}


	public function destroy()
	
	{
		
		auth()->logout();

		return redirect()->home();
	
	}

}
