<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class RegisterController extends Controller
{

	public function create()
	
	{

		if(auth()->check())
			return redirect()->home();
		
		return view("register");
	
	}


	public function store()
	
	{	
		$this->validate(request(),[

			"name" => "required",

			"email" => "required|email|unique:users",

			"password" => "required|confirmed"
		]);
		
		$user = User::create(request(["name","email","password"]));


		auth()->login($user);

		return redirect()->home();

	
	}





}
