<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $movies_all = Movie::all();

        // dd($movies_all);
        return view('welcome', compact('movies_all'));
    }
}
