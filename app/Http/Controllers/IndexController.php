<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Game as Game;
use App\Genre as Genre;


class IndexController extends Controller
{
    public function index()
    {
        $genres = genre::all();
        $games = game::all();
        return view('accueil', ['games' => $games], ['genres' => $genres]);
    }

}
