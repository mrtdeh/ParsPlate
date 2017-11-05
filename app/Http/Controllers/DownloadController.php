<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Template;

use Hashids, Counter;

class DownloadController extends Controller
{



	public function index( $hashid )
	
	{


		$id = Hashids::decode( $hashid )[0];

		$template = Template::find( $id );


		if(empty($template)){
		    return view("errors.404");
		}

		Counter::count("downloads" . $id);

		$filename = $template->zip_addr;
		$fakename = $template->kebabTitle;
		
			 //dd(env('APP_ENV'));

		$path = "http://localhost/fileServer/pkg/${filename}.zip";
		// $path = storage_path('uploads/test.zip');

		header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: inline; filename='.$fakename . '[ParsPlate.ir].zip');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
       // header('Pragma: public');
       // header('Content-Length: ' . filesize($path));
        @ob_clean();
        flush();
        readfile($path);
        //echo file_get_contents($path);


	
	}	

}
