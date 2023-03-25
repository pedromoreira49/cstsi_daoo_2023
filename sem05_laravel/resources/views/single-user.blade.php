<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single User</title>
</head>
<body>
    <h1>{{$user->nome}}</h1>
    <p>{{$user->email}}</p>
    <ul>
        <li>senha: {{$user->senha}}</li>
    </ul>
    <p><a href="http://localhost:8000/user">Voltar</a></p>
</body>
</html>