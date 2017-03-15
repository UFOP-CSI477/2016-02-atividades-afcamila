<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the nerds
        $eventos = Evento::all();

        // load the view and pass the nerds
        return View::make('eventos.index')
            ->with('eventos', $eventos);
    }

    public function create()
    {
        // load the create form (app/views/nerds/create.blade.php)
        return View::make('eventos.create');
    }

    public function show($id)
    {
        // get the nerd
        $evento = Evento::find($id);

        // show the view and pass the nerd to it
        return View::make('eventos.show')
            ->with('evento', $evento);
    }

    public function edit($id)
    {
        // get the nerd
        $evento = Eventos::find($id);

        // show the edit form and pass the nerd
        return View::make('eventos.edit')
            ->with('evento', $evento);
    }

    public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'nome'       => 'required',
            'data'      => 'required|date',
            'preco' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        /*if ($validator->fails()) {
            return Redirect::to('evento/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));*/
        } else {
            // store
            $evento = new Evento;
            $evento->nome       = Input::get('nome');
            $evento->data      = Input::get('data');
            $evento->preco = Input::get('preco');
            $evento->save();

            // redirect
            Session::flash('message', 'Evento inserido com sucesso!');
            return Redirect::to('eventos');
        }
    }


}