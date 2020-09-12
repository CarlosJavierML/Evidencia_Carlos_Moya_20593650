<!--heredar la masterpage en esta vista-->
@extends('layouts.master')

<!-- contenido vistas-->
@section('contenido_vistas')

<!--BEGIN FIRST CARD-->
<div class="card border-success mb-3 text-center">
  <div class="card-header">
    <a class="collapsed card-link text-center" data-toggle="collapse" href="#collapseFIRST">
		<h5 class="card-title text-dark">First Fold</h5>
		<h6 class="card-subtitle mb-2 text-muted">Subtitle</h6>
	</a>
  </div>
  <div id="collapseFIRST" class="collapse" data-parent="#accordion">
    <div class="card-body text-left">
    
	  <table class="table table-hover group table-striped">
	  	<tbody>   
	  	  <tr>
	  		<td>Title:</td>
	  		<td>Value</td>
	  	 </tr>
	  			
	  		<tr>
	  		<td>Title:</td>
	  		<td>Value</td>
	  	 </tr>
	  
	  		<tr>
	  		<td>Title:</td>
	  		<td>Value</td>
	  	 </tr>
	  	</tbody>
	  	</table>
    </div>
	
	<div class="card-footer text-muted">
		<a role="button" target="_BLANK" href="#" class="btn btn-sm btn-info"><font style="font-size: 8px;">Link</font></a>
		<a role="button" target="_BLANK" href="#" class="btn btn-sm btn-info"><font style="font-size: 8px;">Link</font></a>
	</div>
	
   </div>
</div>
<!--END FIRST CARD-->
<h2>Informacion del empleado:</h2>




    <div class="card" style="width:400px">
    <div class="card-header">
    {{$empleado->FirstName}} {{$empleado->LastName}}

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

    <br />
    @if( $empleado->subalternos->count() !==0 )
    <h2 class="text-success"> subalternos: </h2>
    <ul class="list-group list-group-flusg">
    @foreach($empleado->subalternos as $subalterno)
    <li class="list-group-item"> {{ $subalterno->FirstName  }} , {{ $subalterno->LastName }}
    </li>

    @endforeach
    </ul>

    @else
    <h2 class="text-danger"> El empleado no tiene subalternos </2>
    @endif

@endsection