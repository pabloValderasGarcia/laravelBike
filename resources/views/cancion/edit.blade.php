@extends('cancion.comun')

@section('content')
        
        <h1 style="padding: 12px 0 0 200px">Editar</h1>
        
        <div>
            
            <form action="{{ url('cancion/' . $cancion->id) }}" method="post">
                
                @method('put')
                @csrf
                
                <div style="margin: 20px 0 0 202px">
                    <div>
                        <label for="titulo">Título canción</label>
                        <input id="titulo" name="titulo" type="text" required maxlength="80" value="{{ old('dni', $cancion->titulo) }}">
                    </div>
                    
                    <div>
                        <label for="interprete">Intérprete canción</label>
                        <input id="interprete" name="interprete" type="text" required maxlength="100" value="{{ old('dni', $cancion->interprete) }}">
                    </div>
                    
                    <div>
                        <label for="autor">Autor canción</label>
                        <input id="autor" name="autor" type="text" maxlength="100" value="{{ old('dni', $cancion->autor) }}">
                    </div>
                    
                    <div>
                        <label for="duracion">Duración canción</label>
                        <input id="duracion" name="duracion" type="time" value="{{ old('dni', $cancion->duracion) }}">
                    </div>
                    
                    <div>
                        <label for="genero">Género canción</label>
                        <input id="genero" name="genero" type="text" required maxlength="20" value="{{ old('dni', $cancion->genero) }}">
                    </div>
                    
                    <div>
                        <label for="album">Álbum canción</label>
                        <input id="album" name="album" type="text" maxlength="70" value="{{ old('dni', $cancion->album) }}">
                    </div>
                    
                    <div>
                        <label for="orden">Orden canción</label>
                        <input id="orden" name="orden" type="number" value="{{ old('dni', $cancion->orden) }}">
                    </div>
                    
                    <div>
                        <label for="fechaPublicacion">Fecha publ. canción</label>
                        <input id="fechaPublicacion" name="fechaPublicacion" type="date" value="{{ old('dni', $cancion->fechaPublicacion) }}">
                    </div>
                </div>
                <br/>
                
                <a href="{{ url('cancion') }}" style="border-radius: 5px; font-size: 15px; 
                    margin-left: 200px; background-color: rgb(39, 179, 76); 
                    color: white; padding: 10px">Volver
                </a>
                
                <input style="border-radius: 5px; font-size: 15px; 
                    margin-left: 10px; background-color: rgb(39, 179, 76); 
                    color: white; padding: 8px" type="submit" value="Editar"
                />
                
            </form>
            
        </div>
        
@endsection