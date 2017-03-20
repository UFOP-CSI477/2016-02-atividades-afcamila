<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Produto;
use App\Cart;
use App\User;
use Session;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     public function __construct()
     {
       $this->middleware('auth');
     }

    public function index()
    {
      /*if(Auth::user()->tipo ==1){//somente o tipo 1 pode acessar
        $compras = Compra::all();
        return view('compras.index')->with('compras', $compras);
      } else {
        session()->flash('error',  'Acesso não autorizado!');
        return redirect('/homec');
      }*/
      $compras = Compra::all();
      return view('compras.index')->with('compras', $compras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function comprar($id)
    {
      /*if(Auth::user()->tipo ==1){
        $produtos = Produto::find($id);
        return view('compras.create')->with('produtos', $produtos);
      } else {
        session()->flash('error',  'Acesso não autorizado!');
        return redirect('/');
      }*/
      $produtos = Produto::find($id);
        return view('compras.store')->with('produtos', $produtos);
    }

    public function store(Request $request)
    {
        $compra = new Compra;
        $compra->quantidade=$request->quantidade;
        $compra->data=$data = date("d/m/Y");
        $compra->user_id=Auth::user()->id;
        $compra->produto_id=$request->produto_id;

        $compra->save();

        return redirect('/');
    }

    public function show($id)
    {
      $compra = Compra::find($id);
      return view('compras.show')->with('compra', $compra);
    }

    public function update(Request $request, $id)
    {
      $compra = Compra::find($id);
      $compra->quantidade=$request->quantidade;
      $compra->data=$request->data;
      $compra->produto_id=$request->produto_id; 
      $compra->user_id=$request->user_id;


      $compra->save();

      return redirect('/compras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Compra::destroy($id);
      return redirect('/compras');
    }
}
