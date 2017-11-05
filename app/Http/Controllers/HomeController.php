<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Template;

use JavaScript;


class HomeController extends Controller
{
    
    public function index()
    
    {

    	$templates = Template::take(8)->orderBy("id","desc")->get();
    	
    	$templateCount = Template::count();


    	JavaScript::put([

    	    'ControllerName' => 'home',

    	    'Templates' => $templates,
    	]);

    	return view("index", compact("templateCount"));
    
    }
}




