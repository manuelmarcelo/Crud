Formulario que tendrá los datos en común con create y edit
<label for="Nombre"> Nombre </label>
<input type="text"name="Nombre" value ="{{isset($empleado->Nombre)?$empleado->Nombre:""}}" id="Nombre" >
<br>

<label for="ApellidoPaterno"> ApellidoPaterno</label>
<input type="text "name="ApellidoPaterno" value ="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:""}}" id="ApellidoPaterno" >
<br>

<label for="ApellidoMMaterno"> ApellidoMaterno</label>
<input type="text "name="ApellidoMaterno" value ="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:""}}" id="ApellidoMaterno" >
<br>

<label for="Correo"> Correo</label>
<input type="text "name="Correo" value ="{{isset($empleado->Correo)?$empleado->Correo:""}}" id="Correo" >
<br>
<input type="submit" value="Guardar datos">
<a href="{{url('empleado/')}}"> Regresar</a>

<br>