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
}
