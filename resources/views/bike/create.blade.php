@extends('bike.comun')

@section('content')
        
        <h1 style="padding: 12px 0 0 200px">Add bike</h1>
        
        <br/>
        
        <div style="display: flex">
            <form action="{{ url('bike/' . $bike->id) }}" method="post">
                
                @csrf
                
                <div style="padding: 0 0 0 200px">
                    <label for="name">Bike name</label><br/>
                    <input id="name" name="name" type="text" required minlength="3" maxlength="50" placeholder="Bike name">
                </div>
                
                <br/>
                
                <a href="{{ url('bike') }}" style="border-radius: 5px; font-size: 15px; 
                margin-left: 200px; background-color: rgb(39, 179, 76); 
                color: white; padding: 10px">Back</a>
                
                <input style="border-radius: 5px; font-size: 15px; 
                margin-left: 10px; background-color: rgb(39, 179, 76); 
                color: white; padding: 10px" type="submit" value="Add"/>
                
            </form>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    </body>
</html>

@endsection