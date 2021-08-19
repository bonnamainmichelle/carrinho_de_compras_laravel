<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;



class Usuario extends RModel implements Authenticatable
{
    protected $table ="usuarios";
    
    protected $fillable = ['email','login','password','nome'];


    public function getAuthIdentifierName(){
          //retorna a própria chave para objeto authenticável
        return 'login';
    }
      
    public function getAuthIdentifier(){
       return $this->login;      //retorna a identificação do usuário, login é unico dele
    }
     
    public function getAuthPassword(){
        return $this->password;  //retorna a senha desse usuário

    }
    
    public function getRememberToken(){  //lembrar a senha

    }
    
    public function setRememberToken($value){

    }
    
    public function getRememberTokenName(){

    }
}

