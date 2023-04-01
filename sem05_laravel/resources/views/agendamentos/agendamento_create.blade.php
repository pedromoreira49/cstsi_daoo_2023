<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Insert new agendamento</h1>
    <form action="/agendamento" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Usuario:</td>
                <td><input type="number" name="user_id"/></td>
            </tr>
            <tr>
                <td>Ajudante:</td>
                <td><input type="number" name="helper_id"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/agendamentos" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>