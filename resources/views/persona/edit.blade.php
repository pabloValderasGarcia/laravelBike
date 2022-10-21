@extends('persona.comun')

@section('content')
        
        <h1 style="padding: 12px 0 0 200px">Editar</h1>
        
        <div>
            
            <form action="{{ url('persona/' . $persona->id) }}" method="post">
                
                @method('put')
                @csrf
                
                <div style="padding: 0 0 0 200px">
                    <label for="dni">Dni persona</label><br/>
                    <input id="dni" name="dni" type="text" required minlength="9" maxlength="9" value="{{ old('dni', $persona->dni) }}">
                    <br/>
                    <br/>
                    <label for="nombre">Nombre persona</label><br/>
                    <input id="nombre" name="nombre" type="text" required minlength="3" maxlength="30" value="{{ old('nombre', $persona->nombre) }}">
                    <br/>
                    <br/>
                    <label for="apellidos">Apellidos persona</label><br/>
                    <input id="apellidos" name="apellidos" type="text" required minlength="5" maxlength="80" value="{{ old('apellidos', $persona->apellidos) }}">
                    <br/>
                    <br/>
                    <label for="telefono">Telefono persona</label><br/>
                    <input id="telefono" name="telefono" type="text" maxlength="15" value="{{ old('telefono', $persona->telefono) }}">
                </div>
                <br/>
                
                <a href="{{ url('persona') }}" style="border-radius: 5px; font-size: 15px; 
                    margin-left: 200px; background-color: rgb(39, 179, 76); 
                    color: white; padding: 10px">Volver
                </a>
                
                <input style="border-radius: 5px; font-size: 15px; 
                margin-left: 10px; background-color: rgb(39, 179, 76); 
                color: white; padding: 10px" type="submit" value="Editar"/>
                
            </form>
            
        </div>
        
@endsection