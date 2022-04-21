<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function (){

    $comics = config('comics');

    return view('pages.comics', ["comics" => $comics]);

})->name('comics');


Route::get('/comics/{id}', function ($id) {
    // id é il parametro che viene passato alla rotta per recuperare un particolare elemento dentro all'array che assegno alla route (in questo caso comics)

    $comics = config('comics');
    // dd($comics[$id]);

    // con abort_if controllo se la condizione che metto tra parentesi (in questo caso se il valore non é settato) allora mi deve dare errore (qui ho specificato un errore 404 ovvero not found)
    abort_if(!isset($comics[$id]), 404);

    $single_comic = $comics[$id]; // a single_comic assegno il singolo dato che è dentro a comics nella posizione id
 
    return view('pages.detail', ["comics" => $single_comic]); 
    // qui come vista, quando seguo questa route, ritorno il file detail che è nella cartella partials e assegno alla chiave comics il valore dentro a single_comic
    // oppure potevo fare la stessa cosa usando il metodo with che ci permette di passare un solo parametro alla volta: return view('pages.detail')->with('comics', $detail); 

})->where('id', '[0-9]+')->name('comic.show');
// al metodo where passo come parametri il nome del parametro passato alla rotta e l'indicazione in cui specifico che deve contenere solo caratteri numerici 
// quindi con where dico che se i parametri che nella rotta vengono passati come id non rispettano la condizione di essere solo valori numerici, allora la rotta non può funzionare 
