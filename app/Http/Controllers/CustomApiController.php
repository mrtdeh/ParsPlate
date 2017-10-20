<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Template;

class CustomApiController extends Controller
{


	public function getMoreTemplate(Request $req)
	
	{
		$page = request("page");

		$status = 1;

		$n = 8;

		$templates = Template::orderBy("id", "desc")

		->skip(($page - 1) * $n)->take($n)->get();

		$hasTemplate = Template::count() > $page * 8;
		
		return response()->json(compact("status","templates","hasTemplate"));
	
	}


}
