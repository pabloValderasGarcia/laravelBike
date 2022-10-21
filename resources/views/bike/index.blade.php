@extends('bike.comun')

@section('content')

        <h1 style="padding: 12px 0 10px 200px">Bikes list</h1>
        <table id="bikeTable" style="margin-left: 215px; border-spacing: 10px; border-collapse: separate; font-size: 16px">
            <tr>
                <th style="padding: 0 90px 20px 0">Id</th>
                <th style="padding: 0 170px 20px 0">Name</th>
                <th style="padding: 0 150px 20px 0">Delete</th>
                <th style="padding: 0 130px 20px 0">Edit</th>
                <th style="padding: 0 0 20px 0">View</th>
            </tr>
            @foreach($bikes as $bike)
            <tr>
                <td style="padding-bottom: 20px">{{ $bike->id }}</td>
                <td style="padding-bottom: 20px">{{ $bike->name }}</td>
                <td class="deleteRow" style="padding-bottom: 20px">
                    <a href="#" class="deleteRow" data-name="{{ $bike->name }}" data-url="{{ url('bike/' . $bike->id) }}" data-toggle="modal" data-target="#modalDelete" >Delete</a>
                </td>
                <td style="padding-bottom: 20px">
                    <a href="{{ url('bike/' . $bike->id . '/edit') }}">Edit</a>
                </td>
                <td style="padding-bottom: 20px">
                    <a href="{{ url('bike/' . $bike->id) }}">View</a>
                </td>
            </tr>
            @endforeach
        </table>
        <form action="{{ url('bike/create') }}" method="get">
            <input style="border-radius: 5px; font-size: 15px; 
            margin-left: 200px; background-color: rgb(39, 179, 76); 
            color: white; padding: 10px" type="submit" value="Add bike"/>
        </form>
        <form action="" method="post" id="deleteForm">
            @method('delete')
            @csrf
        </form>
        <script src="{{ url('assets/js/bikeIndex.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

@endsection