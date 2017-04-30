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

    return view('panels', compact('panels'));
});


Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/newSociety','TypeController@getTypes')->middleware('auth');
Route::get('/mySocieties','SocietyController@getSocieties')->middleware('auth');

Route::post('/society/nova','SocietyController@store')->middleware('auth');

Route::post('/society/nova','SocietyController@store')->middleware('auth');

Route::get('society/edit/{society}', 'SocietyController@edit')->name('editar');

Route::patch('society/update/{society}', function(Illuminate\Http\Request $request, euromilhoes\Society $society) {
    $boolean = $society->update($request->all());

    return $boolean ? "Sociedade alterada com sucesso!": "Sociedade não alterada. Tente mais tarde!";
});