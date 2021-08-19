@extends("layout")

@section("conteudo")

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
   
   




<!------------------------------->
  <div class="col-12">
    <h2 class="text-center"> Cadastro de Cliente </h2>
</div>
    <div class="cadastro"> 
   <form action="{{ route('cadastrar_cliente')}}" method="post" style="width:100%">
        @csrf
        <div class="form-group">
           Nome: <input type="text" name="nome" class="form-control" />
        </div>

          <div class="form-group">
           E-mail: <input type="email" name="email" class="form-control" />
        </div>

        <div class="form-group">
           Cpf: <input type="text" name="cpf" id="cpf" class="form-control" />
        </div>

        <div class="form-group">
           Senha: <input type="password" name="password" class="form-control" />
        </div>

        <div class="form-group">
           Endereço: <input type="text" name="logradouro" class="form-control" />
        </div>

        <div class="form-group">
           Número: <input type="text" name="numero" class="form-control" />
        </div>

        <div class="form-group">
           Complemento: <input type="text" name="complemento" class="form-control" />
        </div>

        <div class="form-group">
           Cidade: <input type="text" name="cidade" class="form-control" />
        </div>

        <div class="form-group">
          Cep: <input type="text" name="cep" id="cep" class="form-control" />
        </div>

        <div class="form-group">
          Estado: <input type="text" name="estado" class="form-control" />
        </div>
         
        <input type="submit" value="Cadastrar" class="btn btn-success btn-sm mb-3" id="buttom" />
</form>

</div>

@endsection
