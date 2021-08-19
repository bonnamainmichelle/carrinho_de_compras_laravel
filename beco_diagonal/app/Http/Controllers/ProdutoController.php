<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;



class ProdutoController extends Controller
{
    public function index(Request $request)
    {
        $data = [];


      

        return view("home",$data);


    }

    

    



    public function categoria( $idcategoria = 0,Request $request)
    {
        $data = [];


              //buscar todos os produtos
        //select * from produtos 
    $listaProdutos = Produto::all();
    $data["lista"] = $listaProdutos;

        return view("categoria", $data);
    }


    public function adicionarCarrinho($idProduto = 0, Request $request )
    {

   //buscar o produto pelo id

       $prod = Produto::find($idProduto);

       if($prod){
           //encontrou um produto

           //buscar da sessão o carrinho
           $carrinho = session('cart' , []);

           array_push($carrinho, $prod);
           session(['cart'=>$carrinho]);
       }
       return redirect()->route("categoria");
    
    }


    public function verCarrinho(Request $request)
    {
        //buscar o carrinho da session

        $carrinho = session('cart',[]);
       $data = ['cart'=> $carrinho];

       return view("carrinho" , $data); 
    }

 public function excluirCarrinho($indice,Request $request)
{
    $carrinho = session('cart',[]);
    if(isset($carrinho[$indice])){
        unset($carrinho[$indice]);
    }
    session(["cart"=>$carrinho]);
    return redirect()->route("ver_carrinho");
}

}


