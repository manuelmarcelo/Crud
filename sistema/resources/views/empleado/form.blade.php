Formulario que tendrá los datos en común con create y edit
<label for="Nombre"> Nombre </label>
<input type="text"name="Nombre" value ="{{$empleado->Nombre}}" id="Nombre" >
<br>

<label for="ApellidoPaterno"> ApellidoPaterno</label>
<input type="text "name="ApellidoPaterno" value ="{{$empleado->ApellidoPaterno}}" id="ApellidoPaterno" >
<br>

<label for="ApellidoMMaterno"> ApellidoMaterno</label>
<input type="text "name="ApellidoMaterno" value ="{{$empleado->ApellidoMaterno}}" id="ApellidoMaterno" >
<br>

<label for="Correo"> Correo</label>
<input type="text "name="Correo" value ="{{$empleado->Correo}}" id="Correo" >
<br>
<input type="submit" value="Guardar datos">
<br>