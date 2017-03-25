<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Estado;
class EstadoController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth',['except'=> 'index']);//so o index n precisa de login para ser acessado
  }
    public function index()
    {
      $estados = Estado::all();
        return view('estados.index')->with('estados', $estados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Estado::create($request->all());
        return redirect('/estados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $estado = Estado::find($id);
      return view('estados.show')->with('estado', $estado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $estado = Estado::find($id);
      return view('estados.edit')->with('estado', $estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $estado = Estado::find($id);
      $estado->nome=$request->nome;
      $estado->sigla=$request->sigla;

      $estado->save();

      return redirect('/estados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Estado::destroy($id);
      return redirect('/estados');
    }
}
