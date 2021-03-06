<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cake Store</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body class="antialiased">
        <h1 class="my-5 text-center">Add Menu</h1>
        <form class="m-5" action="{{route('cake.store')}}" method="POST">
        @csrf
            <div class="form-group">
                <label>Cake Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label>Chef</label> <br>
                <select name="chef_id">
                    @foreach($chefs as $chef)
                        <option value="{{$chef->id}}">{{$chef->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>
