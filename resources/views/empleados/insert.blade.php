<!-- heredar la masterpage en esta vista -->
@extends('layouts.master')

<!--inicio de la vista -->
@section('contenido_vistas')
<form class="form-horizontal" method="post" action="{{  url('empleados')  }}">
@csrf    
<fieldset>

<!-- Form Name -->
<legend>Nuevo Empleado</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre</label>  
  <div class="col-md-5">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Apellido</label>  
  <div class="col-md-5">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Jefe Directo</label>
  <div class="col-md-5">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <!--- recorrer los jefes-->
      @foreach($jefes as $j)
          <option>{{  $j->LastName }}, {{ $j->FirstName }} </option>
      @endforeach
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Cargo</label>
  <div class="col-md-5">
    <select id="selectbasic" name="selectbasic" class="form-control">
    <!--recorrer los cargos-->
    @foreach($cargos as $c)
    <option> {{$c->Title }}</option>
    @endforeach
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de Contratación</label>  
  <div class="col-md-5">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de Nacimiento</label>  
  <div class="col-md-5">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-5">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Direccion</label>  
  <div class="col-md-5">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Ciudad</label>  
  <div class="col-md-5">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
    
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