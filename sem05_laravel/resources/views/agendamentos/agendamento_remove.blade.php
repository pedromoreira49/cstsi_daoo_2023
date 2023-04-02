<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de agendamentos</title>
</head>
<body>
    @if ($agendamento)
    <h1>{{$agendamento->user_id}}</h1>
    <p>{{$agendamento->helper_id}}</p>
    <ul>
        <li>horario: {{$agendamento->created_at}}</li>
    </ul>
        <table>
            <tr>
                <td>
                    <form action="{{ route('removeAgendamento',$agendamento->id) }}" method='post'>
                        @csrf
                        <input type="submit" name='confirmar' value="Deletar" />
                    </form>
                </td>
                <td>
                    <a href="/agendamentos"><button>Cancelar</button></a>
                </td>
            </tr>
        </table>
    @else
        <p>Usuários não encontrados! </p>
    @endif
    <a href="/agendamentos">&#9664;Voltar</a>
</body>
</html>