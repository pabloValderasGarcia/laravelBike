@extends('cancion.comun')

@section('content')

        <h1 style="padding: 12px 0 10px 200px">Lista de canciones</h1>
        <table id="cancionTable" style="margin-left: 215px; border-spacing: 10px; border-collapse: separate; font-size: 16px">
            <tr>
                <th style="padding: 0 40px 20px 0">Id</th>
                <th style="padding: 0 40px 20px 0">Título</th>
                <th style="padding: 0 40px 20px 0">Intérprete</th>
                <th style="padding: 0 40px 20px 0">Autor</th>
                <th style="padding: 0 40px 20px 0">Duración</th>
                <th style="padding: 0 40px 20px 0">Género</th>
                <th style="padding: 0 40px 20px 0">Álbum</th>
                <th style="padding: 0 40px 20px 0">Orden</th>
                <th style="padding: 0 40px 20px 0">Fecha publ.</th>
                <th style="padding: 0 30px 20px 0">Eliminar</th>
                <th style="padding: 0 30px 20px 0">Editar</th>
                <th style="padding: 0 30px 20px 0">Ver</th>
            </tr>
            @foreach($canciones as $cancion)
            <tr>
                <td style="padding-bottom: 20px">{{ $cancion->id }}</td>
                <td style="padding-bottom: 20px">{{ $cancion->titulo }}</td>
                <td style="padding-bottom: 20px">{{ $cancion->interprete }}</td>
                <td style="padding-bottom: 20px">{{ $cancion->autor }}</td>
                <td style="padding-bottom: 20px">{{ $cancion->duracion }}</td>
                <td style="padding-bottom: 20px">{{ $cancion->genero }}</td>
                <td style="padding-bottom: 20px">{{ $cancion->album }}</td>
                <td style="padding-bottom: 20px">{{ $cancion->orden }}</td>
                <td style="padding-bottom: 20px">{{ $cancion->fechaPublicacion }}</td>
                <td class="deleteRow" style="padding-bottom: 20px">
                    <a href="#" class="deleteRow" data-name="{{ $cancion->id }}" data-url="{{ url('cancion/' . $cancion->id) }}" data-toggle="modal" data-target="#modalDelete" >Borrar</a>
                </td>
                <td style="padding-bottom: 20px">
                    <a href="{{ url('cancion/' . $cancion->id . '/edit') }}">Editar</a>
                </td>
                <td style="padding-bottom: 20px">
                    <a href="{{ url('cancion/' . $cancion->id) }}">Ver</a>
                </td>
            </tr>
            @endforeach
        </table>
        <form action="{{ url('cancion/create') }}" method="get">
            <input style="border-radius: 5px; font-size: 15px; 
            margin-left: 200px; background-color: rgb(39, 179, 76); 
            color: white; padding: 10px" type="submit" value="Añadir canción"/>
        </form>
        <form action="" method="post" id="deleteForm">
            @method('delete')
            @csrf
        </form>
        <script src="{{ url('assets/js/cancionIndex.js') }}"></script>

@endsection