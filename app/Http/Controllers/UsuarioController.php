<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'nome'=>'required',
            'idade'=> 'required'
        ]);
        \App\Models\Usuario::create([
            'nome' => $request->nome,
            'idade' => $request->idade]);

        echo "Produto Criado com Sucesso";
        return redirect('../vertodos');
    }

    public function read($id)
    {
        $usuario = \App\Models\Usuario::find($id);
        return view('ver-pessoa', ['usuario' => $usuario]);
    }

    public function editarGet($id)
    {
        $usuario = \App\Models\Usuario::find($id);
        return view('editar', ['usuario' => $usuario]);
    }

    public function editarSet(\Illuminate\Http\Request $request, $id)
    {
        $request->validate([
            'nome'=>'required',
            'idade'=> 'required|numeric'
        ]);
        $usuario = \App\Models\Usuario::find($id);
        $usuario->update([
            'nome' => $request->nome,
            'idade' => $request->idade]);
        echo "Produto salvado com sucesso";
        return redirect('../vertodos');

    }

    public function deletar($id)
    {
        $user = Usuario::find($id);
        $user->delete();
        return redirect('../vertodos');
    }

    public function verTodos()
    {
        $users = Usuario::All();
        return view('vertodos',['users'=>$users]);

    }
}
