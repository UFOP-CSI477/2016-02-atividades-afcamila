<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtletaController extends Controller
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
        $atletas = Atleta::all();

        // load the view and pass the nerds
        return View::make('atletas.index')
            ->with('atletas', $atletas);
    }

    /*public function create()
    {
        // load the create form (app/views/nerds/create.blade.php)
        return View::make('atletas.create');
    }*/

    public function create()
    {
        return view('create');
    }

    public function show($id)
    {
        // get the nerd
        $atleta = Atleta::find($id);

        // show the view and pass the nerd to it
        return View::make('atletas.show')
            ->with('atleta', $atleta);
    }

    public function edit($id)
    {
        // get the nerd
        $atleta = Atleta::find($id);

        // show the edit form and pass the nerd
        return View::make('atletas.edit')
            ->with('atleta', $atleta);
    }

}