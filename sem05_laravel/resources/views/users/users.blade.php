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
    <p><a href="{{route('createUser')}}" title="Criar">&#43Criar usuário</a></p>
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
                <td><a href="{{route('showUser', $user->id)}}">{{$user->id}}</a></td>
                <td>{{$user->nome}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->senha}}</td>
                <td>
                    <a href="{{route('deleteUser', $user->id)}}" title='Deletar'>&#128465</a>
                    <a href="{{route('editUser', $user->id)}}" title='Editar'>&#9999<a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Usuarios não encontrados! </p>
    @endif
</body>
</html>