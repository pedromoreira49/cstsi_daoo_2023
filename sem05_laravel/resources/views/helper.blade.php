<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ajudantes</title>
</head>
<body>
    <h1>Ajudantes</h1>
    @if ($helpers->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Credencial</th>
            </tr>
        </thead>
        <tbody>
            @foreach($helpers as $helper)
            <tr>
                <td><a href="http://localhost:8000/helper/{{$helper->id}}">{{$helper->id}}</a></td>
                <td>{{$helper->nome}}</td>
                <td>{{$helper->email}}</td>
                <td>{{$helper->credential}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Ajudantes não encontrados! </p>
    @endif
</body>
</html>