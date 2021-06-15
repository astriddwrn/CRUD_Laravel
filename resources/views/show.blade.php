<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cake store</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center ">CAKE STORE</h1>
    <div class="container d-flex flex-column align-items-center">
        <a class="btn btn-primary my-3" href="{{route('cake.create')}}" >Add Cake</a>
        <a class="btn btn-secondary my-3" href="/chef" >Chefs</a>
        <table class="table m-5">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Chef</th>
            <th scope="col">Chef's Gender</th>
            <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
        @foreach($cakes as $cake)
            <tr>
            <th scope="row">{{$cake->id}}</th>
            <td>{{$cake->name}}</td>
            <td>Rp {{$cake->price}}</td>
            <td>{{$cake->chef->name}}</td>
            <td>{{$cake->chef->gender}}</td>
            <td>
                <a href="{{route('cake.edit', $cake->id)}}" class="btn btn-success">Edit</a>
                <form action="{{route('cake.delete', $cake->id)}}" method="POST">
                @csrf
                @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</body>
</html>