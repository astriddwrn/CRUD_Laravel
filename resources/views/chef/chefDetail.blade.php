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
    <h1 class="text-center ">CHEF</h1>
    
    <div class="container d-flex flex-column align-items-center">
        <table class="table m-5">
        <h1>{{$chef->name}}</h1>
    <h3>{{$chef->gender}}</h3>
      
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">cake</th>
            <th scope="col">Cake price</th>
            </tr>
        </thead>
        <tbody>
        @foreach($chef->cakes as $cake)
            <tr>
            <th scope="row">{{$cake->id}}</th>
            <td>{{$cake->name}}</td>
            <td>Rp {{$cake->price}}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</body>
</html>