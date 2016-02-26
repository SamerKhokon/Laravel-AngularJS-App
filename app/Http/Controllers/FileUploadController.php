<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FileUploadController extends Controller
{
    //file upload post
	public function getUpload()
    {
	    $all = Input::all();
		Input::file('file')->move(pulic_path() ,  public_path()."/uploads/".Input::file('file'));
		//$file = $_FILES['file']['name'];
		//move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']);
		print_r($all);
	}
}
