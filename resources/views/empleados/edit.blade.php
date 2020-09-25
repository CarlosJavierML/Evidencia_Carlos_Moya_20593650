<!-- heredar la masterpage en esta vista -->
@extends('layouts.master')

@section('estilos-particulares')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('j-deps')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
  } );
  </script>
@endsection

<!--inicio de la vista -->
@section('contenido_vistas')
<form class="form-horizontal" method="post" action="{{  url('empleados/'. $empleado->EmployeeId)  }}">
@method("PUT")
@csrf    
@if(session("mensaje"))
<p class="alert-success">{{ session("mensaje")}}</p>
@endif
<fieldset>

<!-- Form Name -->
<legend>Actualizar Empleado: {{ $empleado->FirstName}},  {{ $empleado->LastName}}</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre</label>  
  <div class="col-md-5">
  <input id="textinput" value="{{ $empleado->FirstName}}" name="nombre" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Apellido</label>  
  <div class="col-md-5">
  <input id="textinput" value="{{ $empleado->LastName}}" name="apellido" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Jefe Directo</label>
  <div class="col-md-5">
    <select id="selectbasic" name="jefe" class="form-control">
    @if($empleado->jefe_directo()->count() === 0)
          <option selected value="">Seleccione jefe directo... </option>
          @foreach($jefes as $j)
          <option value="{{ $j->EmployeeId}}">{{  $j->LastName }}, {{ $j->FirstName }} </option>
          @endforeach
    @else
    <option selected value="">Seleccione jefe directo... </option>

      @foreach($jefes as $j)
        @if( $j->EmployeeId === $empleado->jefe_directo()->first()->EmployeeId)
          <option value="{{ $j->EmployeeId}}" selected>{{  $j->LastName }}, {{ $j->FirstName }} </option>
    @else
     <option value="{{ $j->EmployeeId}}">{{  $j->LastName }}, {{ $j->FirstName }} </option>
    @endif
      @endforeach
      @endif
    </select>
    <p>{{ $errors->first('jefe')}}</p>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Cargo</label>
  <div class="col-md-5">
    <select id="selectbasic" name="cargo" class="form-control">
    <!--recorrer los cargos-->
    @foreach($cargos as $c)
    @if ($empleado->Title === "Sales Support Agent")
    <option selected> {{$c->Title }}</option>
    @else
    <option selected> {{$c->Title }}</option>
    @endif
    @endforeach
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de Contratación</label>  
  <div class="col-md-5">
  <input id="datepicker" value="{{ $empleado->HireDate->format('Y-m-d')}}" name="contrato" type="text" placeholder="" class="datepicker form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de Nacimiento</label>  
  <div class="col-md-5">
  <input id="" value="{{ $empleado->BirthDate->format('Y-m-d')}}" name="nacimiento" type="text" placeholder="" class="datepicker form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-5">
  <input id="textinput" value="{{ $empleado->Email}}" name="email" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Direccion</label>  
  <div class="col-md-5">
  <input id="textinput" value="{{ $empleado->Address}}" name="direccion" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Ciudad</label>  
  <div class="col-md-5">
  <input id="textinput" value="{{ $empleado->City}}" name="ciudad" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Enviar</button>
  </div>
</div>


</fieldset>
</form>

<!-- fin de la vista -->
@endsection