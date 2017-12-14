<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat as Cat;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    public function index()

    {
        $cats = cat::all();
        //var_dump($cats);die;
        //$cats = DB::table('cats')->paginate(5);
        return view('accueil', ['cats' => $cats]);


    }


}
