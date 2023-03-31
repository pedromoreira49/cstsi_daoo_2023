<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Usuarios</h1>
    @if ($users->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td><a href="http://localhost:8000/user/{{$user->id}}">{{$user->id}}</a></td>
                <td>{{$user->nome}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->senha}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Usuarios não encontrados! </p>
    @endif
</body>
</html>