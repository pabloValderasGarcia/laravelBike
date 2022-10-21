@extends('cancion.comun')

@section('content')

        <h1 style="padding: 12px 0 0 200px">Mostrar canción</h1>
        <p style="font-size: 15px; 
            margin-left: 192px; padding: 10px">
            Id = {{ $cancion->id }}
            <br/>
            Título = {{ $cancion->titulo }}
            <br/>
            Intérprete = {{ $cancion->interprete }}
            <br/>
            Autor = {{ $cancion->autor }}
            <br/>
            Duración = {{ $cancion->duracion }}
            <br/>
            Género = {{ $cancion->genero }}
            <br/>
            Álbum = {{ $cancion->album }}
            <br/>
            Orden = {{ $cancion->orden }}
            <br/>
            Fecha publ. = {{ $cancion->fechaPublicacion }}
        </p>
        
        <div>
            <a href="{{ url('cancion') }}" style="border-radius: 5px; font-size: 15px; 
                margin-left: 200px; background-color: rgb(39, 179, 76); 
                color: white; padding: 10px">Volver
            </a>
        </div>
        
@endsection