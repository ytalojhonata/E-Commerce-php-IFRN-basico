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

Route::get('/',('PagController@inicio'));
             

            /* ##### Rotas de cardapio ##### */
Route::get('/cardapio',('PagController@carda'));
Route::get('/cardapio_sanduiches',('PagController@carda_h'));
Route::get('/cardapio_saladas',('PagController@carda_sa'));
Route::get('/cardapio_sobremesas',('PagController@carda_so'));
             
             /* ##### Rotas de alimentos ##### */
Route::get('/hamburguer',('PagController@hamb'));
Route::get('/sobremesa',('PagController@sobreme'));
Route::get('/saladaa',('PagController@salad'));

/* ##### Rotas do carrinho ##### */
Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho.index');
Route::get('/carrinho/adicionar', function() {
    return redirect()->route('index');
});
Route::post('/carrinho/adicionar', 'CarrinhoController@adicionar')->name('carrinho.adicionar');
Route::delete('/carrinho/remover', 'CarrinhoController@remover')->name('carrinho.remover');
Route::post('/carrinho/concluir', 'CarrinhoController@concluir')->name('carrinho.concluir');
Route::get('/carrinho/compras', 'CarrinhoController@compras')->name('carrinho.compras');
Route::post('/carrinho/cancelar', 'CarrinhoController@cancelar')->name('carrinho.cancelar');
Route::post('/carrinho/desconto', 'CarrinhoController@desconto')->name('carrinho.desconto');


Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
