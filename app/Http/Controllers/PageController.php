<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        // keys
        // title" => "Il Padrino"
        // "original_title" => "The Godfather"
        // "nationality" => "american"
        // "date" => "1972-03-24"
        // "vote" => 9.2
        
        $data =[
            'movies'=> $movies
        ];
        return view('index', $data);
    }
}
