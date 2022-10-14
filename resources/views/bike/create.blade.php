<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Bikes</title>
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body style="margin: 0; font-family: Arial, Helvetica, sans-serif">
        
        <nav style="padding-top: 17px; background-color: rgb(48, 58, 64); width: 100%; height: 60px">
            <a href="../" style="color: white; text-decoration: none; padding: 0 20px 0 18px; font-size: 19px">dwes</a>
            <a href="../" style="color: white; text-decoration: none; padding: 0 10px 0 0; font-size: 16px">Home</a>
            <a href="." style="color: white; text-decoration: none; font-size: 16px">Bike</a>
        </nav>
        
        <div style="background-color: rgb(222, 224, 227)">
            <p style="margin: 0; padding: 20px 0 70px 215px; font-size: 50px">Bikes</p>
        </div>
        
        <h1 style="padding: 12px 0 0 200px">Añadir bike</h1>
        
        <div style="padding: 0 0 0 200px">
            <label for="text">Nombre bike</label><br/>
            <input id="text" name="text" type="text" placeholder="Nombre bike"><br/><br/>
            <label for="desc">Precio bike</label><br/>
            <input id="desc" name="desc" type="text" placeholder="Precio bike">
        </div>
        <br/>
        <div style="display: flex">
            <form action="{{ url('bike') }}">
                <input style="border-radius: 5px; font-size: 15px; 
                margin-left: 200px; background-color: rgb(39, 179, 76); 
                color: white; padding: 10px" type="submit" value="Volver"/>
            </form>
            
            <form action="{{ url('bike') }}" method="post">
                @csrf
                <input style="border-radius: 5px; font-size: 15px; 
                margin-left: 10px; background-color: rgb(39, 179, 76); 
                color: white; padding: 10px" type="submit" value="Agregar"/>
            </form>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    </body>
</html>