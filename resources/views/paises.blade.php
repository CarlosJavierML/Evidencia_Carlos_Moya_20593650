<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-primary">Lista de Paises</h1>
    <table class="table table-hover table-bordered">
    <thead>
    <tr>
    <th>Pais</th>
    <th>Capital</th>
    <th>Moneda</th>
    <th>Población</th>
    <th>Ciudades</th>
    </tr>
    </thead>
    <!-- recorre la tabla foreach blade-->
    @foreach($paises as $pais => $infopais)
         <tr>
             <td rowspan="3"> {{ $pais }}</td>
             <td rowspan="3"> {{$infopais["capital"]}} </td>
             <td rowspan="3"> {{$infopais["moneda"]}} </td>
             <td rowspan="3"> {{$infopais["población"]}} </td>
             <td class="text-success">{{$infopais ["Ciudades" ][0]}}</td>
                <tr>
                    <td class="text-success">{{$infopais ["Ciudades" ][1]}}</td>
                </tr>
                <tr>
                    <td class="text-success">{{$infopais ["Ciudades" ][2]}}</td>
                </tr>
         </tr>
    @endforeach
    </table>
</body>
</html>