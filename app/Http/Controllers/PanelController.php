<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{


	public function index()
	
	{

		//  Fetch data needed for dashboard
		
		return view("admin.dashboard");
	
	}


}
