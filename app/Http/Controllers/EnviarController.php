<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnviarController extends Controller
{
   public function enviarDados(Request $request){

       $nome = $request->nome;
       $idade = $request->idade;

}
}
