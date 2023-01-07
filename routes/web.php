<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/film', [PageController::class, 'getfilm'])->name('film');
*/
Route::resource('comics', PageController::class);


// Route::get('/percorsoURL', function () {
//     return view('nome_della_view_che_devo_prendere');
// });