<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Genre;

=======

use App\Gender;
use App\Color;
>>>>>>> de2d4612dda96391e04a5df73e24a39f1bcaa991

class CreateController extends Controller
{
    public function index()
    {

<<<<<<< HEAD
        $genres = Genre::all();

        return view ('create', ['genres' => $genres]);

    }

=======
        $genders = Gender::all();
        $colors = Color::all();
        return view ('create', ['genders' => $genders, 'colors' => $colors]);

    }
>>>>>>> de2d4612dda96391e04a5df73e24a39f1bcaa991
}
