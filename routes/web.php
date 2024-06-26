<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // creo una variabile per recuperare i dati nel fine comics.php della cartella config
    $comics = config('comics');

    return view('homepage', [
        'comics' => $comics
    ]);
})->name('Home');

Route::get('/comics', function () {
    // creo una variabile per recuperare i dati nel fine comics.php della cartella config
    $comics = config('comics');

    //$comicIndex = $_GET['index']; prende tramite get il paramettro 'index' passato alla query string

    $comicIndex = request()->input('index'); //request restituiisce un oggetto di tipo request che ha a disposizione una funzione 'input' che fa premdere un parametro della querystring o della richiesta in post

    $comic = $comics[$comicIndex];

    return view('subpages.comics.show', compact('comic'));
})->name('comics.show');
