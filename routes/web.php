<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');

Route::get('/sobrenos', [\App\Http\Controllers\SobrenosController::class, 'sobrenos'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', [\App\Http\Controllers\ContatoController::class, 'login'])->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', [\App\Http\Controllers\ContatoController::class, 'clientes'])->name('app.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', [\App\Http\Controllers\ContatoController::class, 'produtos'])->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');

Route::fallback(function(){
    echo 'Ooooops essa página não foi encontrada. <a href="/">Clique aqui</a> e volte para a tela inicial';
});

// Route::redirect('/rota2','/rota1');

// Route::get('/rota2', function(){
//     return redirect()->route('site.rota1');
// })->name('site.rota2');



// Route::get('/contato/{nome}/{categoria_id}', function(string $nome, int $categoria_id = 1){
//     echo "Estamos aqui: $nome - $categoria_id";
// })->where('categoria_id','[0-9]+')->where('nome', '[A-Za-z]+');
