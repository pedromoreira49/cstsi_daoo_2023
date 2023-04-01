<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Agendamentos</title>
</head>
<body>
    <h1>Agendamentos</h1>
    <p><a href="{{route('createAgendamento')}}" title="Criar">&#43Criar agendamento</a></p>
    @if ($agendamentos->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Helper</th>
                <th>User</th>
                <th>Horario</th>
            </tr>
        </thead>
        <tbody>
            @foreach($agendamentos as $agendamento)
            <tr>
                <td><a href="{{route('showAgendamento', $agendamento->id)}}">{{$agendamento->id}}</a></td>
                <td>{{$agendamento->helper_id}}</td>
                <td>{{$agendamento->user_id}}</td>
                <td>{{$agendamento->created_at}}</td>
                <td><a href="{{route('editAgendamento', $agendamento->id)}}" title='Editar'>&#9999<a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Agendamentos não encontrados! </p>
    @endif
</body>
</html>