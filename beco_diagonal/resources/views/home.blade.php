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


<!-----------------------Carousel de imagens_------------------>
  </header>
  <section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/foto1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/foto2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/foto3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
  <section>
    <div class="container mb-5"> 
      <div class="row"> 
        <div class="col-sm-12 text-dark text-center my-3">
          <h1>Promoções</h1>
        </div>
      </div>

      <!---------------cards------------------------------>
      <div class="row">
        <div class="col-sm-3">
          <div class="card border-warning">
  <img src="/img/home1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-warning">Vampiro a Máscara</h5>
    <p class="card-text"> Vampiro: A Máscara é um cenário de RPG de horror
       pessoal e fantasia urbana, baseado no sistema Storyteller para a linha
        de publicações do World of Darkness,mundo de fantasia sombria.</p>
      <p>R$ 45,99 </p>
    <a href="{{ route('logar')}}" class="btn btn-warning">Comprar</a>
  </div>
</div>
        </div>
               <div class="col-sm-3">
          <div class="card border-warning">
  <img src="/img/home2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-warning">D&D Player´s Handbook</h5>
    <p class="card-text">O Livro do Jogador é um livro de regras para o jogo de 
      fantasia Dungeons & Dragons. Ele não contém o conjunto completo de regras para o jogo e
       inclui apenas regras para uso pelos jogadores do jogo</p>
       <p> R$45,99</p>
    <a href="{{ route('logar')}}" class="btn btn-warning">Comprar</a>
  </div>
</div>
        </div>
               <div class="col-sm-3">
          <div class="card border-warning" >
  <img src="/img/home3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-warning">D&D Monster Manual</h5>
    <p class="card-text">O Manual do Monstro é o principal
       livro bestiário para monstros no jogo de RPG de fantasia de Dungeons & Dragons, publicado pela primeira vez em 1977 pela TSR. Inclui monstros derivados da mitologia e 
      folclore.</p>
      <p>R$45,99</p>
    <a href="{{ route('logar')}}" class="btn btn-warning">Comprar</a>
  </div>
</div>
        </div>

            <div class="col-sm-3">
          <div class="card border-warning" >
  <img src="/img/home4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-warning">Harry Potter e as Relíquias da Morte</h5>
    <p class="card-text">Harry Potter está prestes a fazer 17 anos, mas, ao
       contrário das outras vezes, não irá para Hogwarts após seu aniversário. Agora,
        escoltado por uma verdadeira brigada de bruxos.</p>
        <p>R$50,00</p>
    <a href="{{ route('logar')}}" class="btn btn-warning">Comprar</a>
  </div>
</div>
        </div>
      </div>
    </div>
  </section>
  <!-----------------------Footer--------------------------------->
  <footer >
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