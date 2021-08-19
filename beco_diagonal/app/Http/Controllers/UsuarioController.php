<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UsuarioController extends Controller
{
    public function logar(Request $request){
        $data = [];

        if($request->isMethod("POST")){
            //Se entrar neste IF é por que o usuário clicou no botão Logar

            $login = $request->input("login");  //resgatando Login e senha do campo input
            $senha = $request->input("senha");

            $credential = ['login'=>$login , 'password'=>$senha]; //colocar em um array e logar

            //logar



            if(Auth::attempt($credential)){
               return redirect()->route("categoria");

            }else{
                $request->session()->flash("err", "Usuário/Senha Inválido");
                
                return redirect()->route("logar");

            }
        }

        return view("logar" , $data);
    
    }

    public function sair(Request $request)
    {
        Auth::logout(); //deslogar o usuário
        return redirect()->route("home");
    }
}

