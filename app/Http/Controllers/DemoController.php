<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Response;

use Hashids;

use App\Template;

class DemoController extends Controller
{


	public function index( $hashid )
	
	{


		$path = storage_path('uploads/test.zip');
		

		$id = Hashids::decode( $hashid )[0];

		$template = Template::find( $id );

		$demoAddress = $template->demo_addr;
		$title = $template->title;
		$kebabTitle = $template->kebabTitle;

		return view("demo",compact("demoAddress", "hashid", "title", "kebabTitle"));
	
	}		

}
