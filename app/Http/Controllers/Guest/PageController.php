<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        // nella index si visualizza sempre tutto il contenuto di una tabella

        // prendo tutti i film dalla tabella del database
        $comics = Comic::all();

        // richiamo la view "home" e le passo i film che ho preso prima
        return view('home', compact("comics"));
    }
//public function getfilm()
//{
// $movies = Movie::all();
// return view('home', compact('movies'));
//}

/*      $books = ['autore' => 'autore 1'];
return view('home', compact('books'));
*/


}