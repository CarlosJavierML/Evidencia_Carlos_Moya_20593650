<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" integrity="sha512-pli9aKq758PMdsqjNA+Au4CJ7ZatLCCXinnlSfv023z4xmzl8s+Jbj2qNR7RI8DsxFp5e8OvbYGDACzKntZE9w==" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <form class="form-horizontal" method="POST" action="{{ url('artistas/store')}}">
    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend>Nuevo Artista</legend>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Nombre Artista/Banda</label>  
    <div class="col-md-4">
    <input id="textinput" name="nombre_artista" type="text" placeholder="Nombre" class="form-control input-md">
    <!--<strong class="alert alert-danger">{{$errors->first("nombre_artista")}}</strong>-->
    <br>
    @error('nombre_artista')
        <div class="alert alert-danger">{{$message}} </div>
    @enderror
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <label class="col-md-4 control-label" for=""></label>
    <div class="col-md-4">
        <button type="submit" id="" name="" class="btn btn-success">Enviar</button>
    </div>
    </div>

    </fieldset>
    <!--  Letrero de exito(solo va a salir si hay redireccionamiento)-->
    <!-- Existe la variable de sesion-->
    <!--@if(session("exito"))
        <p class="alert-success">¨{{session("exito")}}</p>
    @else
    hay errores de validacion
        @foreach($errors->all() as $error )
            <p class="alert-danger">{{$error}}</p>
        @endforeach-->
    @endif
    </form>
</body>
</html>