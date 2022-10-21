@extends('persona.comun')

@section('content')

        <h1 style="padding: 12px 0 10px 200px">Lista de personas</h1>
        <table id="personaTable" style="margin-left: 215px; border-spacing: 10px; border-collapse: separate; font-size: 16px">
            <tr>
                <th style="padding: 0 90px 20px 0">Id</th>
                <th style="padding: 0 120px 20px 0">Dni</th>
                <th style="padding: 0 120px 20px 0">Nombre</th>
                <th style="padding: 0 120px 20px 0">Apellidos</th>
                <th style="padding: 0 120px 20px 0">Telefono</th>
                <th style="padding: 0 120px 20px 0">Borrar</th>
                <th style="padding: 0 120px 20px 0">Editar</th>
                <th style="padding: 0 0 20px 0">Ver</th>
            </tr>
            @foreach($personas as $persona)
            <tr>
                <td style="padding-bottom: 20px">{{ $persona->id }}</td>
                <td style="padding-bottom: 20px">{{ $persona->dni }}</td>
                <td style="padding-bottom: 20px">{{ $persona->nombre }}</td>
                <td style="padding-bottom: 20px">{{ $persona->apellidos }}</td>
                <td style="padding-bottom: 20px">{{ $persona->telefono }}</td>
                <td class="deleteRow" style="padding-bottom: 20px">
                    <a href="#" class="deleteRow" data-name="{{ $persona->dni }}" data-url="{{ url('persona/' . $persona->id) }}" data-toggle="modal" data-target="#modalDelete" >Borrar</a>
                </td>
                <td style="padding-bottom: 20px">
                    <a href="{{ url('persona/' . $persona->id . '/edit') }}">Editar</a>
                </td>
                <td style="padding-bottom: 20px">
                    <a href="{{ url('persona/' . $persona->id) }}">Ver</a>
                </td>
            </tr>
            @endforeach
        </table>
        <form action="{{ url('persona/create') }}" method="get">
            <input style="border-radius: 5px; font-size: 15px; 
            margin-left: 200px; background-color: rgb(39, 179, 76); 
            color: white; padding: 10px" type="submit" value="Añadir persona"/>
        </form>
        <form action="" method="post" id="deleteForm">
            @method('delete')
            @csrf
        </form>
        <script src="{{ url('assets/js/personaIndex.js') }}"></script>

@endsection