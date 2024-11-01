<?php
namespace app\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HamburgueriaController;
use App\Http\Controllers\PratoController;

//apresenta a página principal do sistema 127.0.0.1:8000
Route::get('/', function () { 
    return view('welcome');
});
//apresenta a página do usuário 127.0.0.1:8000/usuarios com a listagem/tabela
Route::get('/usuarios', function () { 
    return view('usuarios.index');
});
//apresenta a página do usuário 127.0.0.1:8000/usuarios de cadastro/create
Route::get('/usuarios/create', function () { 
    return view('usuarios.create');
});
//Route::get('/usuarios', [UsuarioController::class, 'verUsuarios']);
/*
Route::prefix('usuarioss')->group(function(){
	Route::get('/',[UsuarioController::class, 'index'])->name('usuarios->index');
	Route::get('/create',[UsuarioController::class, 'create'])->name('usuarios->create');
	Route::get('/',[UsuarioController::class, 'store'])->name('usuarios->store');
});*/
Route::fallback(function(){
	return "Erro!";
});



/*
Route::get('/home', function () {
    return view('welcome');
});

Route::get('/usuario', [UsuarioController::class, 'index']);
Route::post('/usuario', [UsuarioController::class, 'cadastrar']);
Route::get('/usuario', [UsuarioController::class, 'verUsuarios']);

*/
