<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Update helper</h1>
    <form action="{{route('updateHelper',$helper->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="{{$helper->nome}}"/></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"value="{{$helper->email}}"/></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="password" name="senha" value="{{$helper->senha}}"/></td>
            </tr>
            <tr>
                <td>Credencial:</td>
                <td><input type="text" name="credential" value="{{$helper->credential}}"/></td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td><input type="text" name="cpf" value="{{$helper->cpf}}"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Atualizar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/helpers" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>
</html>