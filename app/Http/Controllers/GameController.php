<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Genre;
use App\Console;

class GameController extends Controller
{

    public function create()

    {

        return view('/create');

    }


    public function insertOne(Request $request)

    {

        //dd($request);
        $game = new game;
        $game->nom = $request->nom;
        $game->date = $request->date;
        $game->editeur = $request->editeur;
        $game->genre_id = $request->genre;
        $game->genre()->attach($request->genre);
        $game->save();
        return redirect('/');


    }


    public function deleteOne(Request $request, $id)

    {

        $game = game::find($id);
        $game->delete();
        return redirect('/');

    }

    public function updateOne(Request $request, $id)

    {
        $game = game::find($id);
        return view('update', ['game' => $game]);
        //dd($id);

    }

    public function updateOneAction(Request $request)

    {

        $game = game::find($request->id);
        $game->nom = $request->nom;
        $game->date = $request->date;
        $game->editeur = $request->editeur;
        $game->save();
        return redirect('/');


    }
}
