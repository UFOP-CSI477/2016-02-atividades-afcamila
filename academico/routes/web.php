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

use App\Aluno;
use App\Cidade;
use App\Estado;
use App\Disciplina;
use App\Turma;

Route::get('/', function () {

  return view('layout.principal');
});

Route::get('/about', function () {
  return view('about');
});

Route::get('/estadosold', function () {
  //$estados = DB::table('estados')->get();
  $estados = Estado::all();
  return view('estados.index')->with('estados', $estados);
});



Route::get('/estadosold/{estado}', function ($id) {
  $estado = DB::table('estados')->find($id);
  return view('estados.show')->with('estado', $estado);
});

Route::get('/cidadesold', function () {
  //$cidades = DB::table('cidades')->get();
  $cidades = Cidade::all();
  return view('cidades.index')->with('cidades', $cidades);
});

Route::get('/cidadesold/{cidade}', function ($id) {
  $cidade = DB::table('cidades')->find($id);
  return view('cidades.show')->with('cidade', $cidade);
});

Route::get('/alunosold', function () {
  //$alunos = DB::table('alunos')->get();
  $alunos = Aluno::all();
  // Pode-se usar: '$alunos = App\Aluno::all();' sem o use 'App\Aluno';
  return view('alunos.index')->with('alunos', $alunos);
});

Route::get('/alunosold/{aluno}', function ($id) {
  $aluno = DB::table('alunos')->find($id);
  //dd($aluno);
  return view('alunos.show')->with('aluno', $aluno);
});

Route::resource('/disciplinas','DisciplinaController');
Route::resource('/turmas','TurmaController');
Route::resource('/alunos','AlunoController');
Route::resource('/estados','EstadoController');
Route::resource('/cidades','CidadeController');

Auth::routes();

Route::get('/home', 'HomeController@index');
