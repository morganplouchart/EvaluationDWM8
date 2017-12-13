<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gender;
use App\Color;

class CreateController extends Controller
{
    public function index()
    {

        $genders = Gender::all();
        $colors = Color::all();
        return view ('create', ['genders' => $genders, 'colors' => $colors]);

    }
}
