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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/atletas','AtletaController');

Route::resource('/eventos','EventoController');

Route::resource('/registros','RegistroController');



Route::get('eventos', function () {

  $eventos = App\Evento::all();
  return view('eventos.index')->with('eventos',$eventos);
});
Route::get('/eventos/{evento}', function ($id) {

  $eventos = DB::table('eventos')->find($id);
  return view('eventos.show')->with('evento', $evento);
});



Route::get('atletas', function () {

  $atletas = App\Atleta::all();
  return view('atletas.index')->with('atletas',$atletas);
});
Route::get('/atletas/{atleta}', function ($id) {

  $atletas = DB::table('atletas')->find($id);
  return view('atletas.show')->with('atleta', $atleta);
});
Route::get('/create', 'AtletaController@create');



Route::get('registros', function () {

  $registros = App\Registro::all();
  return view('registros.index')->with('registros',$registros);
});
Route::get('/registros/{registro}', function ($id) {

  $registros = DB::table('registros')->find($id);
  return view('registros.show')->with('registro', $registro);
});


Auth::routes();

Route::get('/home', 'HomeController@index');

        Route::get('atletas/create', function()
        {
            return View::make('atletas.create');
        });

        Route::get('registros/create', function()
        {
            return View::make('registros.create');
        });

        Route::get('eventos/create', function()
        {
            return View::make('eventos.create');
        });


         Route::post('atletas/create', function()
        {
            // add the post to the database
            // $post = new Post;
            // $post->title = Input::get('title');
            // more stuff here
            // $post->save();

            // create a success message
            Session::flash('message', 'Successfully created post!');

            // redirect
            return Redirect::to('atletas/create');
        });