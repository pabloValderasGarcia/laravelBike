@extends('cancion.comun')

@section('content')
        
        <div style="display: flex">
            
            <form action="{{ url('cancion/') }}" method="post">
                
                @csrf
                
                <div style="margin: 20px 0 0 202px">
                    <div>
                        <label for="titulo">Título canción</label>
                        <input id="titulo" name="titulo" type="text" required maxlength="80" placeholder="Título canción">
                    </div>
                    
                    <div>
                        <label for="interprete">Intérprete canción</label>
                        <input id="interprete" name="interprete" type="text" required maxlength="100" placeholder="Intérprete canción">
                    </div>
                    
                    <div>
                        <label for="autor">Autor canción</label>
                        <input id="autor" name="autor" type="text" maxlength="100" placeholder="Autor canción">
                    </div>
                    
                    <div>
                        <label for="duracion">Duración canción</label>
                        <input id="duracion" name="duracion" type="time" placeholder="Duración canción">
                    </div>
                    
                    <div>
                        <label for="genero">Género canción</label>
                        <input id="genero" name="genero" type="text" required maxlength="20" placeholder="Género canción">
                    </div>
                    
                    <div>
                        <label for="album">Álbum canción</label>
                        <input id="album" name="album" type="text" maxlength="70" placeholder="Álbum canción">
                    </div>
                    
                    <div>
                        <label for="orden">Orden canción</label>
                        <input id="orden" name="orden" type="number" placeholder="Orden canción">
                    </div>
                    
                    <div>
                        <label for="fechaPublicacion">Fecha publ. canción</label>
                        <input id="fechaPublicacion" name="fechaPublicacion" type="date" placeholder="Fecha publ. canción">
                    </div>
                </div>

                <br/>
                
                <a href="{{ url('cancion') }}" style="border-radius: 5px; font-size: 15px; 
                    margin-left: 200px; background-color: rgb(39, 179, 76); 
                    color: white; padding: 10px">Volver
                </a>
                
                <input style="border-radius: 5px; font-size: 15px; 
                    margin-left: 10px; background-color: rgb(39, 179, 76); 
                    color: white; padding: 8px" type="submit" value="Añadir"
                />
                
            </form>
        </div>
        
@endsection