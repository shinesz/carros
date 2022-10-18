@extends('padrao')
@section('content')
<div class="nadaa"></div>

<div class ="line">

<section class="se2">

   <h1>  Cadastrar modelos</h1>
    
</section>

<div class ="cada">
<div class ="cadas">
<section class ="cadastro">
<form method="post" action="{{route('salvar-banco')}}">
  @csrf
    <div class="form-row">
      <div class="form-group col-md-10">
        <label for="inputModelo">Modelo</label>
        <input type="text" name="modelos" class="form-control" id="inputModelo" placeholder="">
      </div>
      <div class="form-group col-md-10">
        <label for="inputMarca">Marca</label>
        <input type="text" name="marca" class="form-control" id="inputMarca" placeholder="">
      </div>
    </div>
    <div class="form-group">
        <div class="form-group col-md-10">
      <label for="inputAno">Ano</label>
      <input type="text" name="ano" class="form-control" id="inputAno" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <div class="form-group col-md-10">
      <label for="inputCor">Cor</label>
      <input type="text" name="cor" class="form-control" id="inputCor" placeholder="">
        </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-10">
        <label for="inputValor">Valor</label>
        <input type="text" name="valor" class="form-control" id="inputValor" placeholder="">
      </div>
     
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck"></label>
          Sou Humano
        </label>
      </div>
    </div>
</div>
    <button type="submit" class=" boto">Cadastrar</button>
</form>
</section>
</div>
</div>
</div>
<img class="imagem9" src="{{'/img/wallpaper.jpg'}}" alt="">
@endsection










<!-- JavaScript Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>