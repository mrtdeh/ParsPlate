<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Template;

use JavaScript;

use Image;

use Hashids;


class TemplateController extends Controller
{


    public function index()
    
    {
        $templates = Template::take(100)->orderBy("id","desc")->get();
        
        $templateCount = Template::count();

        JavaScript::put([

            'ControllerName' => 'admin/templates',

            'templates' => $templates,
        ]);

        return view("admin.templates");
    
    }


    public function store()
    
    {

        //if (!Input::file('cover')->isValid())
        //  die("upload err");

        $name = str_random(10) . "." . request()->file('cover')->clientExtension();


        $img = Image::make(request()->file('cover'));

        // ->resize(536, null)
        //$img->crop($img->width(),1000)
        $img->widen(536)


        ->crop(536, 710, 0, 0)

        ->save(public_path()."/images/products/cover_${name}")

        ->resize(255, 255)

        ->save(public_path()."/images/products/thumb_${name}");

        
        Template::create([

            "user_id" => auth()->id(),

            "title" => request("title"),

            "desc" => request("desc"),

            "cover" => $name,

            "demo_addr" => "demo test",

            "zip_addr" => "zip test",

        ]);


        

        return redirect("/panel/templates");
    
    }

    

    public function show( $template_hash_id )
    
    {	
        $id = Hashids::decode( $template_hash_id );
        
        $id = array_pop($id);

    	$template = Template::find( $id );
    	
    	return view("product", compact("template"));
    
    }





}
