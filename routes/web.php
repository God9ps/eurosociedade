<?php

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

Route::get('/', function () {
    $panels = collect([
        'type' => 'success',
        'title' => 'Titulo dinamico',
        'footer' => 'footer dinamico',
        'body' => 'lorem ipsum sit dolor amet',
    ]);

    return view('welcome', compact('panels'));
});


Auth::routes();

Route::get('/home', 'HomeController@index');

                                Route::get('jogadores/{player}', function($players) {
   return view('pages.players', compact('players'));
})->name('jogadores.index');
