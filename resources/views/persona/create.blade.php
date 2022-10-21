@extends('persona.comun')

@section('content')
        
        <div style="display: flex">
            <form action="{{ url('persona/') }}" method="post">
                
                @csrf
                
                <div style="padding: 0 0 0 200px">
                    <label for="dni">Dni persona</label><br/>
                    <input id="dni" name="dni" type="text" required minlength="9" maxlength="9" placeholder="Dni persona">
                </div>
                
                <br/>
                
                <div style="padding: 0 0 0 200px">
                    <label for="nombre">Nombre persona</label><br/>
                    <input id="nombre" name="nombre" type="text" required minlength="3" maxlength="30" placeholder="Nombre persona">
                </div>
                
                <br/>
                
                <div style="padding: 0 0 0 200px">
                    <label for="apellidos">Apellidos persona</label><br/>
                    <input id="apellidos" name="apellidos" type="text" required minlength="5" maxlength="80" placeholder="Apellidos persona">
                </div>
                
                <br/>
                
                <div style="padding: 0 0 0 200px">
                    <label for="telefono">Teléfono persona</label><br/>
                    <input id="telefono" name="telefono" type="text" maxlength="15" placeholder="Teléfono persona">
                </div>
                
                <br/>
                
                <a href="{{ url('persona') }}" style="border-radius: 5px; font-size: 15px; 
                margin-left: 200px; background-color: rgb(39, 179, 76); 
                color: white; padding: 10px">Volver</a>
                
                <input style="border-radius: 5px; font-size: 15px; 
                margin-left: 10px; background-color: rgb(39, 179, 76); 
                color: white; padding: 10px" type="submit" value="Añadir"/>
                
            </form>
        </div>
        
@endsection