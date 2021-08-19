<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;
use App\Services\ClienteService;

class ClienteController extends Controller
{
    public function cadastrar(Request $request)
    {
        $data = [];

        return view("cadastrar", $data);
    }

    public function login(Request $request)
    {
        $data = [];

     

        return view("login",$data);
    }

    public function cadastrarCliente(Request $request)
    {


        $values = $request->all(); //pega todos os valores do formulário
        $usuario = new Usuario();
        $usuario->fill($values);
        $usuario->login = $request->input("cpf","");

        $senha = $request->input("password", ""); //resgata a senha do input
        $usuario->password = \Hash::make($senha); //recebe a biblioteca hash e criptografa a senha
        
        $endereco = new Endereco($values);

     
        $clienteService = new ClienteService();
       $result = $clienteService->salvarUsuario($usuario, $endereco, "");



       $message = $result["message"];
       $status = $result["status"];
      //ok = cadastrado com sucesso!,err = Usuario não pode ser cadastrado
       $request->session()->flash($status, $message); 

        return redirect()->route("cadastrar");
    }
}

