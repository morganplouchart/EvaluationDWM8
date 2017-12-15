<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Genre;
use App\Console;

class GameController extends Controller
{



    public function insertOne(Request $request)

    {

        //dd($request);
        $game = new game;
        $game->nom = $request->nom;
        $game->date = $request->date;
        $game->editeur = $request->editeur;
        $game->save();
        $game->genre()->attach($request->genres);
        $game->console()->attach($request->consoles);
        return redirect('/');


    }


    public function deleteOne(Request $request, $id)

    {

        $game = game::find($id);
        $game->genre()->detach();
        $game->console()->detach();
        $game->delete();
        return redirect('accueil');

    }

    public function updateOne(Request $request, $id)

    {
        $game = game::find($id);

        $genreAll = genre::all();
        $genres = [];
        foreach ($genreAll as $value) {
            $genres[$value->id] = $value->genre;
        }

        $consoleAll = console::all();
        $consoles = [];
        foreach ($consoleAll as $value) {
            $consoles[$value->id] = $value->console;
        }

        return view('update', ['genres' => $genres , 'game' => $game, 'consoles' => $consoles]);
        //dd($consoles);

    }

    public function updateOneAction(Request $request)

    {

        $game = game::find($request->id);
        $game->nom = $request->nom;
        $game->date = $request->date;
        $game->editeur = $request->editeur;
        //$game->genre = $request->genre;
        $game->save();
        $game->genre()->detach();
        $game->genre()->attach($request->genres);
        $game->console()->detach();
        $game->console()->attach($request->consoles);
        return redirect('accueil');


    }
}
