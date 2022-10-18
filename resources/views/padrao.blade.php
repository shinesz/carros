<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/899ee05f2d.js" crossorigin="anonymous"></script>
 


    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
    <header>
    <nav class="navbar navbar-dark bg-dark">
    
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Car <h1 class="store">Store</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link"  href="{{route('cadastrar-caminhao')}}">Cadastrar Caminhao</a>
            </li>
            <li class="nav-item">
            <a class="nav-link"  href="{{route('editar-caminhao')}}">Lista de Caminhoes</a>
            </li>
            <li class="nav-item">
            <a class="nav-link"  href="{{route('cadastrar-carro')}}">Cadastrar Carros</a>
            </li>
            <li class="nav-item">
            <a class="nav-link"  href="{{route('editar-carro')}}">Lista de Carros</a>
            </li>
        </ul>
       
        </div>
    </div>
    </nav>
</header>
 
@yield('content')
