<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Agendamento</title>
</head>
<body>
    <h1>{{$agendamento->helper_id}}</h1>
    <p>{{$agendamento->user_id}}</p>
    <ul>
        <li>Horario: {{$agendamento->created_at}}</li>
    </ul>
    <p><a href="http://localhost:8000/agendamento">Voltar</a></p>
</body>
</html>