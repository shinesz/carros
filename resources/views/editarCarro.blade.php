@extends('padrao')
@section('content')
 
<div class="nadaa"></div>
<section class="section1">

</section>




<section class="se3">

   <h1>Lista de Modelos</h1>
    
</section>

<div class="row center">
    <form method = "get" action ="/editar-carro">
  <div class="col">
    <input type="text" id= "marca" name="marca"class="form-control" placeholder="Digite a Marca do Carro" aria-label="First name">
  </div>

  <div class="col">
  <button type="submit" class="btn btn-info">Buscar</button>
  </div>
  </form>
</div>

<br>
<br>
<br>



<div class="header_fixed">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Modelo</th>
                    <th>Marca</th></th>
                    <th>Ano</th>
                    <th>Cor</th>
                    <th>Valor</th>
                    <th>Editar/Excluir</tr>
                    
                </tr>
            </thead>
            <tbody>
            @foreach($registrosCarro as $registrosCarros)
                <tr>
                    <td>{{$registrosCarros->id}}</td>
                    <td>{{$registrosCarros->modelo}}</td>
                    <td>{{$registrosCarros->marca}}</td>
                    <td>{{$registrosCarros->ano}}</td>
                    <td>{{$registrosCarros->cor}}</td>
                    <td>{{$registrosCarros->valor}}</td>
                    <td>
                        <a href="/editar/{{$registrosCarros->id}}"><button><i class="fa-regular fa-pen-to-square"></i></button></a>
                        <form action="/editar/{{$registrosCarros->id}}" method ="post" class="botao1">
                        @csrf
                        @method('DELETE')
                        <a href="#" class="BOTAO2"><button><i class="fa-solid fa-eraser"></i></button></a>
                        </form>
                    </td>
                </tr>  
              
                @endforeach
            </tbody>
        </table>
    </div> 
    @endsection









 





<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>