<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categorie;

class JsonController extends Controller
{
    //

    public function JsonOutput()
    {
    	$categories = Categorie::all();

    	return response()->json($categories);
    	
    }
}
