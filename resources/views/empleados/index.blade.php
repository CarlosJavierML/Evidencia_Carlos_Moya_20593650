<!--heredar la masterpage en esta vista-->
@extends('layouts.master')

<!-- contenido vistas-->
@section('contenido_vistas')
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Empleados</h1> 
    <a class="btn btn-dark" href="{{  url('empleados/create') }}">
    Nuevo Empleado
    </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Nombre Completo</td>
                <td>Cargo</td>
                <td>Email</td>
                <td>Detalles</td>
                 <td>Actualizar</td>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{$empleado->FirstName}} <strong class="text-primary"> {{$empleado->LastName}}</strong></td>
                    <td>{{$empleado->Title}}</td>
                    <td>{{$empleado->Email}}</td>
                    <td>
                         <a href='{{  url("empleados/$empleado->EmployeeId")   }}' class="btn btn-success">Ver Detalles</a>
                    </td>
                    <td>
                         <a href="{{  url('empleados/'.$empleado->EmployeeId.'/edit')   }}" class="btn btn-info">Actualizar</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- TO DO: PONER EL PAGINADOR -->
    {{$empleados->links() }}
</body>
</html>
@endsection