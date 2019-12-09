<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Http\Controllers\Controller;

class PagController extends Controller
{
 
 public function inicio()
    {
      return view('home.index');
    }
        public function index()
    {
        $registros = Produto::where([
            'tipo'  => 'Sanduiche'
            ])->get();

        return view('home.produto', compact('registros'));
    }
       public function indexsala()
    {
        $registros = Produto::where([
            'tipo'  => 'Salada'
            ])->get();

        return view('cardapio_sa', compact('registros'));
    }
       public function indexso()
    {
        $registros = Produto::where([
            'tipo'  => 'Sobremesa'
            ])->get();

        return view('cardapio_so', compact('registros'));
    }

}
