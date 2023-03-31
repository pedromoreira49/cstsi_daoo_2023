<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Helper</title>
</head>
<body>
    <h1>{{$helper->nome}}</h1>
    <p>{{$helper->email}}</p>
    <ul>
        <li>Credencial: {{$helper->credential}}</li>
    </ul>
    <p><a href="http://localhost:8000/helper">Voltar</a></p>
</body>
</html>