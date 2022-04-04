<?php
use Symfony\Component\HttpFoundation\Request;

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

use App\Dentista;

//rota para listar os dentistas
Route::get('/', ['App\Http\Controllers\DentistaController', 'paginacaoAjax']);

Route::get('/mostra-especialidades', ['App\Http\Controllers\DentistaController', 'paginacaoAjaxEspecialidades']);


//rota de exclusão de Dentistas  (para editar os dados)
Route::get('/excluir-dentistas/{id}', ['App\Http\Controllers\DentistaController', 'apagaDentista']);

//rota de adição de especialidades 
Route::get('/adicionar-especialidade/{id}', ['App\Http\Controllers\DentistaController', 'adicionaEsp']);

//rota de exclusão de especialidades vinculadas  (para editar os dados)
Route::get('/desvincularESP/{id}', ['App\Http\Controllers\DentistaController', 'desvincularESP']);


//rota de edição de Dentistas GET (para ler os dados)
Route::get('/editar-dentistas/{id}', ['App\Http\Controllers\DentistaController', 'editaDentista']);

//rota de edição de Dentistas POST (para editar os dados)
Route::post('/editar-dentistas/{id}', ['App\Http\Controllers\DentistaController', 'editDentista']);

//rota para cadastro de dentista
Route::get('/adicionar-dentista', function(){
    return view('addDentista');
});

//rota de criação de Dentistas
Route::post('/cadastrar-dentista', ['App\Http\Controllers\DentistaController', 'addDentista']);

//rota para a adição/criação de novas especialidades
Route::post('/adicionar-especialidade', ['App\Http\Controllers\DentistaController', 'addEspecialidadeUser']);

//lista as especialidades atribuidas
Route::get('/mostra-especialidadesAtb/{id}', ['App\Http\Controllers\DentistaController', 'mostraEspecialidadesAtb']);


//rota para cadastro de especialidade
Route::get('/cadastrar-especialidade', function(){
    return view('addEspecialidade');
});

//rota de edição de Especialidades GET (para ler os dados)
Route::get('/editar-especialidade/{id}', ['App\Http\Controllers\DentistaController', 'editaEspecialidade']);

//rota de edição de Especialidade POST (para editar os dados)
Route::post('/editar-especialidade/{id}', ['App\Http\Controllers\DentistaController', 'editEspecialidade']);

//rota de criação de especialidade
Route::post('/cadastrar-especialidade', ['App\Http\Controllers\DentistaController', 'addEspecialidade']);










