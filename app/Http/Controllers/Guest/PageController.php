<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function show($id){
        $movie = Movie::findOrFail($id);
        return view('detail', compact('movie'));
    }
}
