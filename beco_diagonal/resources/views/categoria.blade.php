<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--Css-->
    <link rel="stylesheet" href="/css/style.css">
    
    <!--Font-awesome-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Beco Diagonal</title>
  </head>
  <body>


  <header>
    <!-- navbar -->
<nav class="navbar navbar-light bg-light">
  <div >
  <img src="/img/logo.svg" alt="logo">
  
    <a class="navbar-brand text-dark"   href="{{ route('home')}}"> Beco Diagonal</a>
</div> 
 
    <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active text-dark" aria-current="page" href="{{ route('home')}}" >Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="{{ route('categoria')}}" >Livros</a>
  </li>
  @if(!\Auth::user())
  <li class="nav-item">
    <a class="nav-link text-dark" href="{{ route('logar')}}" >Logar</a>
  </li>
  @else
  <li class="nav-item">
    <a class="nav-link text-dark" href="{{ route('sair')}}" >Logout</a>
  </li>

  @endif
  <li class="nav-item">
    <a class="nav-link text-dark" href="{{ route('cadastrar')}}" >Cadastrar</a>
  </li>

  <!----------------------Carrinho de compras----------------------------->
  <a href="{{ route('ver_carrinho')}}" class="btn btn-sm" id="carinho"><i class="fa fa-shopping-cart"></i></a>
  
</ul>
</nav>
</header>




@if(\Auth::user())
 <div class="col-12">
   <p class="text-right">Seja bem Vindo(a), {{ \Auth::user()->nome }}, <a href="{{ route('sair')}}">Sair </a></p>
</div>

@endif

  @if($message = Session::get("err")) 
<div class="col-12">
   <div class="alert alert-danger text-center">{{$message}}</div> 
</div>
@endif

@if($message = Session::get("ok"))
<div class="col-12">
   <div class="alert alert-success text-center">{{$message}}</div>
</div>
@endif





 
  <section>
    <div class="container mb-5"> 
      <div class="row"> 
        <div class="col-sm-12 text-dark text-center my-3">
          <h1>Livros</h1>
        </div>
      </div>

      <!---------------cards------------------------------>
      <div class="row">
        @if(isset($lista))
        @foreach($lista as $prod)
        <div class="col-sm-3 mb-3">
          <div class="card border-warning">
  <img src="{{asset($prod->foto)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-warning">{{($prod->nome)}} - R${{$prod->valor}} </h5>
    <p class="card-text"></p>
    <a href="{{ route('adicionar_carrinho' , ['idproduto' =>$prod->id]) }}" class="btn btn-warning">Adicionar Item</a>
  </div>
</div>
        </div>
        @endforeach
        @endif
  
</div>
      </div>
    </div>
  </section>
  <!-----------------------Footer--------------------------------->
  <footer>
    <div class="container-fluid bg-dark text-white text-center p-3">
      <div class="row">
      <div class="col-sm-12">
        <p class="mb-0"> Loja Beco Diagonal &copy; 2021 <p>
      </div>
      </div>
    </div>
  </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>
