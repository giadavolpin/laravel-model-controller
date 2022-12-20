<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\movie;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function getfilm()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

/*      $books = ['autore' => 'autore 1'];
return view('home', compact('books'));
*/


}