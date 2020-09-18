<!--heredar la masterpage en esta vista-->
@extends('layouts.master')

<!-- contenido vistas-->
@section('contenido_vistas')
<br>
<a class="btn btn-success" href="{{  url('empleados') }}">
    Regresar
    </a>
<br>
 <br>
<div class="row">
<div class="col-md-6 col-lg-12 col-xl-6">

<div class="accordion"  id="accordionExample">
  <div class="card border-primary mb-3 text-center">
    <div class="card-header" id="headingOne">
      <h1 class="mb-0">
        <button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <h2 class="card-title text-dark">Informacion del empleado:</h2>
		    <h4 class="card-subtitle mb-2 text-muted">{{$empleado->FirstName}} {{$empleado->LastName}}</h4>
        </button>
      </h1>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <h4 class="card-title">Cargo: {{ $empleado->Title}}</h4>
                <ul class="list-group list-group-flush">
                @if($empleado->jefe_directo)
                <li class="list-group-item"> jefe Directo: 
                {{ $empleado->jefe_directo->FirstName }}
                {{ $empleado->jefe_directo->LastName }}
                
                </li>
                @endif
                <liv class="list-group-item">
                Dirección: {{ $empleado->Address }} , {{ $empleado->City }} , {{ $empleado->Conuntry }}
                </liv>
                <liv class="list-group-item">
                Fecha Nacimiento: {{ $empleado->BirthDate->toFormattedDateString() }}
                </liv>
                <liv class="list-group-item">
                Fecha Contratación: {{ $empleado->HireDate->toFormattedDateString() }}
                </liv>
                </ul>        
              </div>
    </div>
  </div>
</div>
</div>
    <br />
    <div class="col-md-6 col-lg-12 col-xl-6">
    
    <div class="accordion"  id="accordionExample">
  <div class="card border-success mb-3 text-center">
    <div class="card-header" id="headingTwo">
      <h1 class="mb-0">
        <button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
        <h2 class="card-title text-dark">Subalternos:</h2>
        <h4 class="card-subtitle mb-2 text-muted">------------</h4>
        </button>
      </h1>
    </div>
    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
              
      @if( $empleado->subalternos->count() !==0 )
    <h2 class="text-success"> subalternos: </h2>
    <ul class="list-group list-group-flusg">
    @foreach($empleado->subalternos as $subalterno)
    <li class="list-group-item"> {{ $subalterno->FirstName  }} , {{ $subalterno->LastName }}
    </li>

    @endforeach

    @else
    <h2 class="text-danger"> El empleado no tiene subalternos </h2>
    @endif
    </ul>
    <br>
    </div>
    </div>
  </div>
</div>
</div>
</div>
<br>
<div class="row">

<i class="text-center" aria-hidden="true"><h1>Lista de clientes</h1> 
</i>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nombres</th>
      <th scope="col">Compañia</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @if($empleado->clientes)
  @foreach($empleado->clientes as $cliente)
    <tr>
      <td>{{$cliente->FirstName}} <strong class="text-primary"> {{$cliente->LastName}}</strong></td>
      <td>{{$cliente->Company}}</td>
      <td>{{$cliente->City}}</td>
      <td>{{$cliente->Email}}</td>
    </tr>
    @endforeach
    @else
    <h2 class="text-danger"> El empleado no tiene clientes </2>
    @endif
  </tbody>
</table>
</div>

@endsection