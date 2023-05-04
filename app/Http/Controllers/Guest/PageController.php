<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        //prendo tutti i film dal db
        $movies = Movie::all();
        //restituisco la view con il pacchetto dei film
        return view('home', compact('movies'));
    }

    public function show($id){
        //prendo un solo film per id
        $movie = Movie::findOrFail($id);
        //restituisco la view con il pacchetto del film selezionato
        return view('detail', compact('movie'));
    }
}
