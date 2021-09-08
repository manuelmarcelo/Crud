Mostrar la lista de empleados
@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
<a href="{{url('empleado/create')}}"> Registrar nuevo empleado</a>
<table class="table table-light">
  <thead class="thead-light">
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>ApellidoPaterno</th>
      <th>ApellidoMaterno</th>
      <th>Correo</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($empleados as $empleado)
    <tr>
      <td>{{ $empleado->id }} </td>
      <td>{{ $empleado->Nombre }} </td>
      <td>{{ $empleado->ApellidoMaterno }} </td>
      <td>{{ $empleado->ApellidoPaterno }} </td>
      <td>{{ $empleado->Correo }} </td>
      <td>
        <a href="{{url('/empleado/'.$empleado->id.'/edit')}}">
          Editar|
        </a>
               <form mothod="post" action="{{url('/empleado/'.$empleado->id)}}" >
          {{@csrf_field() }}
          {{method_field('DELETE')}}
          <!-- <input type="submit" onclick="return confirm ('¿Quieres borrar?')" value="Borrar"> -->
<button type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>        </form>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>