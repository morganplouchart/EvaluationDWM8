<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genre;



class CreateController extends Controller
{
    public function index()
    {

         $genres = Genre::all();

        return view ('create', ['genres' => $genres]);

    }

}
