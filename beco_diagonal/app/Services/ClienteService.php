<?php

namespace App\Services;


use App\Models\Usuario;
use App\Models\Endereco;
use Log;

class ClienteService{

   public function salvarUsuario(Usuario $user, Endereco $endereco){
    try{
        //Buscando um usuario com o login que deve ser salvo
        $dbUsuario = Usuario::Where("login",$user->login)->first(); 
          
        if($dbUsuario){
            return [ 'status'=> 'err', 'message' => 'Login ja cadastrado no sistema'];
        }


        \DB::beginTransaction(); //inicia uma transação
        $user->save(); //salvar usuario
        $endereco->usuario_id = $user->id; //relacionamento das tabelas
        $endereco->save(); //salvar o endereço
        \DB::commit(); //confirmando a transação

        return[ 'status'=> 'ok', 'message' => 'Usuário cadastrado com sucesso!'];

    }catch(\Exception $e){  //trata o erro
        \Log::error("Erro",['file'=>'ClienteService.salvarUsuario',
                                   'message'=>$e->getMessage()]);
        \DB::rollback(); //cancelar a transação
        return[ 'status'=> 'err', 'message' => 'Não pode cadastrar um usuário'];

    }
   }
}
