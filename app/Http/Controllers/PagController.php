<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagController extends Controller
{
   public function inicio()
    {
      return view('welcome');
    }
    public function carda()
    {
      return view('cardapio_h');
    }
    public function carda_h()
    {
      return view('cardapio_h');
    }
    public function carda_sa()
    {
      return view('cardapio_sa');
    }
    public function carda_so()
    {
      return view('cardapio_so');
    }


}
