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
   
    @yield("scriptjs")
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
  <li class="nav-item">
    <a class="nav-link text-dark" href="{{ route('logar')}}" >Logar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="{{ route('cadastrar')}}" >Cadastrar</a>
  </li>

  <!----------------------Carrinho de compras----------------------------->
  <a href="{{ route('ver_carrinho')}}" class="btn btn-sm" id="carinho"><i class="fa fa-shopping-cart"></i></a>
  
</ul>
</nav>
  </header>



 
        </div>
      </div>
</div>
  </section>


 
  <div class="col-12" >
      <h2 class="mb-3 text-center">Logar no Sistema </h2>
      <form action="{{route('logar')}}" method="post" class="cadastro">
          @csrf
          <div class="form-group">

          Login: <input type="text" name="login" class="form-control" />
          
          </div> 
          
          <div class="form-group">

          Senha: <input type="password" name="senha" class="form-control" />

         </div> 
         <input type="submit" value="Logar" class="btn btn-lg btn-primary" id="buttom">
</form>
</div>










  <!-----------------------Footer--------------------------------->
  <footer class="fixed-bottom">
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

