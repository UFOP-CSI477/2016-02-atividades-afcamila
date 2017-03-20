<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Produto;
use App\Cart;
use App\Compra;
use Auth;
use Session;

class ProdutoController extends Controller
{
    public function index(){

    	$produtos = Produto::all();
    	return view('shop.index', ['produtos' => $produtos]);
    }

    public function addCart(Request $request, $id){

    	$produto = Produto::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($produto, $produto->id);

    	$request->session()->put('cart', $cart);
    	//dd($request->session->get('cart'));
    	return redirect()->route('produto.index');


    }

    public function getCart(){
        if (!Session::has('cart')) {
            return view('shop.shoppingCart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shoppingCart', ['produtos' => $cart->itens, 'totalPreco' => $cart->total]);
    }

    public function postCart(Request $request){
      if (!Session::has('cart')){
        return redirect()->route('shop.shoppingCart');
      }

      $oldCart = Session::get('cart');
      $cart = new Cart('oldCart');

      $compra = new Compra();
      $compra->cart = serialize($cart);

      Auth::user()->compra()->save($compra);

      Session::forget('cart');
      return redirect()->route('produto.index')->with( 'success' , 'Compra Realizada');
    }

    public function create()
    {   
        /*if(Auth::user()->tipo ==2){//somente o tipo 1 pode acessar
            return view('produtos.create');
        } else {
            session()->flash('error',  'Disciplina: acesso não autorizado!');
            return view ('denied');
        }*/

        return view('shop.create');

    }

    public function area(){

        $produtos = Produto::all();
        return view('shop.area', ['produtos' => $produtos]);
    }

    public function store(Request $request)
    {
         $this->validate($request, [
           'nome' => 'required',
           'preco' => 'required',
           'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);

         if($request->hasFile('imagem')) {
           $file = Input::file('imagem');

           $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

           $nome = $timestamp. '-' .$file->getClientOriginalName();

           $imagem = new \stdClass();//instanciando
           $imagem->filePath = $nome;

           $file->move(public_path().'/images/', $nome);

           $produtos = new Produto;
           $produtos->nome = $request->nome;
           $produtos->preco = $request->preco;
           $produtos->imagem = $nome;
           $produtos->save();
       }

         return $this->create()->with('success', 'Produto cadastrado com sucesso!');
    

    }

      public function show($id)
      {

        $produto = Produto::find($id);
        return view('shop.show')->with('produto', $produto);
      }

      public function edit($id)
      {
        /*if((Auth::user()->tipo==2) || (Auth::user()->tipo==3)){
          $produto =Produto::find($id);
          return view('produtos.edit')->with('produto', $produto);
        } else {
          session()->flash('error',  'Disciplina: acesso não autorizado!');
          return redirect('/homea');
        }*/
        $produto =Produto::find($id);
          return view('shop.edit')->with('produto', $produto);

      }

    public function update(Request $request, $id)
    {
      $produto = Produto::find($id);
      $produto->nome=$request->nome;
      $produto->preco=$request->preco;
      $produto->imagem=$request->imagem;

      $produto->save();

      return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
      /*if(Auth::user()->tipo ==2){
        Produto::destroy($id);
        return redirect('/produtos');
      } else {
        session()->flash('error',  'Disciplina: acesso não autorizado!');
        return redirect('/homea');
      }*/
      Produto::destroy($id);
      return redirect('/area');
    }

}