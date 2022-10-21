<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Bikes</title>
    </head>
    <body style="margin: 0; font-family: Arial, Helvetica, sans-serif">
        <nav style="padding-top: 20px; background-color: rgb(48, 58, 64); width: 100%; height: 40px">
            <a href="../public" style="color: white; text-decoration: none; padding: 0 20px 0 18px; font-size: 19px">dwes</a>
            <a href="../public" style="color: white; text-decoration: none; padding: 0 10px 0 0; font-size: 16px">Home</a>
            <a href="{{ url('bike') }}" style="color: white; text-decoration: none; padding: 0 10px 0 0; font-size: 16px">Bike</a>
            <a href="{{ url('persona') }}" style="color: white; text-decoration: none; padding: 0 10px 0 0; font-size: 16px">Personas</a>
            <a href="{{ url('cancion') }}" style="color: white; text-decoration: none; padding: 0 10px 0 0; font-size: 16px">Canciones</a>
        </nav>
        <div style="background-color: rgb(222, 224, 227)">
            <p style="margin: 0; padding: 20px 0 70px 215px; font-size: 50px">Principal</p>
        </div>
        <h2 style="border-radius: 5px; padding-top: 20px; margin-left: 200px;">Bikes, personas, canciones, etc.</h2>
        <div style="display: flex">
            <form action="{{ url('bike') }}" method="get">
                <input style="border-radius: 5px; font-size: 15px; 
                margin-left: 200px; background-color: rgb(39, 179, 76); 
                color: white; padding: 10px" type="submit" value="Bikes"/>
            </form>
            <form action="{{ url('persona') }}" method="get">
                <input style="border-radius: 5px; font-size: 15px; 
                margin-left: 10px; background-color: rgb(39, 179, 76); 
                color: white; padding: 10px" type="submit" value="Personas"/>
            </form>
            <form action="{{ url('cancion') }}" method="get">
                <input style="border-radius: 5px; font-size: 15px; 
                margin-left: 10px; background-color: rgb(39, 179, 76); 
                color: white; padding: 10px" type="submit" value="Canciones"/>
            </form>
        </div>
    </body>
</html>