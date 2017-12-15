<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Game as Game;
use App\Genre as Genre;
use App\Console as Console;

class IndexController extends Controller
{
    public function index()
    {
        $consoles =  console::all();
        $genres = genre::all();
        $games = game::all();
        return view('accueil', ['games' => $games , 'genres' => $genres, 'consoles' => $consoles]);

    }

}
