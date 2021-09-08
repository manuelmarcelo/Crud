Formulario que tendrá los datos en común con create y edit
<label for="Nombre"> Nombre </label>
<input type="text"name="Nombre" value ="{{isset($empleado->Nombre)?$empleado->Nombre:'n'}}" id="Nombre" >
<br>

<label for="ApellidoPaterno"> ApellidoPaterno</label>
<input type="text "name="ApellidoPaterno" value ="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:'n'}}" id="ApellidoPaterno" >
<br>

<label for="ApellidoMaterno"> ApellidoMaterno</label>
<input type="text "name="ApellidoMaterno" value ="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:'n'}}" id="ApellidoMaterno" >
<br>

<label for="Correo"> Correo</label>
<input type="text "name="Correo" value ="{{ isset($empleado->Correo)?$empleado->Correo:'n'}}" id="Correo" >
<br>
<input type="submit" value="Guardar datos">
<a href="{{url('empleado/')}}"> Regresar</a>

<br>