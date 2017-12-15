<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genre;
use App\Console;


class CreateController extends Controller
{
    public function index()
    {
         $consoles = console::all();
         $genres = genre::all();

        return view ('create', ['genres' => $genres, 'consoles' => $consoles]);

    }

}
