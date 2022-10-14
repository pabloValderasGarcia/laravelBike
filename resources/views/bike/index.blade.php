<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Bikes</title>
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body style="margin: 0; font-family: Arial, Helvetica, sans-serif">
        
        <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Confirm delete <span id="deleteProduct">bike</span>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <form id="modalDeleteResourceForm" action="bike/1" method="post">
                            @method('delete')
                            @csrf
                            <input type="submit" class="btn btn-primary" value="Delete bike"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <nav style="padding-top: 17px; background-color: rgb(48, 58, 64); width: 100%; height: 60px">
            <a href="../public" style="color: white; text-decoration: none; padding: 0 20px 0 18px; font-size: 19px">dwes</a>
            <a href="../public" style="color: white; text-decoration: none; padding: 0 10px 0 0; font-size: 16px">Home</a>
            <a href="#" style="color: white; text-decoration: none; font-size: 16px">Bike</a>
        </nav>
        <div style="background-color: rgb(222, 224, 227)">
            <p style="margin: 0; padding: 20px 0 70px 215px; font-size: 50px">Bikes</p>
        </div>
        <h1 style="padding: 12px 0 0 200px">Listado de bikes</h1>
        <table style="margin-left: 215px; border-spacing: 10px; border-collapse: separate; font-size: 16px">
            <tr>
                <th style="padding: 0 90px 20px 0">Id</th>
                <th style="padding: 0 170px 20px 0">Nombre</th>
                <th style="padding: 0 150px 20px 0">Precio</th>
                <th style="padding: 0 150px 20px 0">Borrar</th>
                <th style="padding: 0 130px 20px 0">Editar</th>
                <th style="padding: 0 0 20px 0">Ver</th>
            </tr>
            <tr>
                <td style="padding-bottom: 20px">1</td>
                <td style="padding-bottom: 20px">bike1</td>
                <td style="padding-bottom: 20px">5.2</td>
                <td style="padding-bottom: 20px">
                    <a href="" data-toggle="modal" data-target="#modalDelete" >Borrar</a>
                </td>
                <td style="padding-bottom: 20px">
                    <a href="{{ url('bike/1/edit') }}">
                        @method('put')
                        @csrf
                        Editar
                    </a>
                </td>
                <td style="padding-bottom: 20px">
                    <a href="{{ url('bike/1') }}">
                        @csrf
                        Ver
                    </a>
                </td>
            </tr>
            <tr>
                <td style="padding-bottom: 20px">2</td>
                <td style="padding-bottom: 20px">bike2</td>
                <td style="padding-bottom: 20px">2.5</td>
                <td style="padding-bottom: 20px">
                    <a href="" data-toggle="modal" data-target="#modalDelete">Borrar</a>
                </td>
                <td style="padding-bottom: 20px">
                    <a href="{{ url('bike/2/edit') }}">
                        @method('put')
                        @csrf
                        Editar
                    </a>
                </td>
                <td style="padding-bottom: 20px">
                    <a href="{{ url('bike/2') }}">
                        @csrf
                        Ver
                    </a>
                </td>
            </tr>
        </table>
        <form action="{{ url('bike/create') }}" method="get">
            <input style="border-radius: 5px; font-size: 15px; 
            margin-left: 200px; background-color: rgb(39, 179, 76); 
            color: white; padding: 10px" type="submit" value="Agregar bike"/>
        </form>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>