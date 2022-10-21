@extends('persona.comun')

@section('content')

        <h1 style="padding: 12px 0 0 200px">Mostrar</h1>
        <p style="font-size: 15px; 
            margin-left: 192px; padding: 10px">
            Id = {{ $persona->id }}
            <br/>
            Dni = {{ $persona->dni }}
            <br/>
            Nombre = {{ $persona->nombre }}
            <br/>
            Apellidos = {{ $persona->apellidos }}
            <br/>
            Teléfono = {{ $persona->telefono }}
        </p>
        <div style="display: flex">
            <form action="{{ url('persona') }}" method="get">
                <input style="border-radius: 5px; font-size: 15px; 
                margin-left: 200px; background-color: rgb(39, 179, 76); 
                color: white; padding: 10px" type="submit" value="Volver"/>
            </form>
        </div>
        
@endsection