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
    <p><a href="{{route('createHelper')}}" title="Criar">&#43Criar ajudante</a></p>
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
                <td><a href="{{route('showHelper', $helper->id)}}">{{$helper->id}}</a></td>
                <td>{{$helper->nome}}</td>
                <td>{{$helper->email}}</td>
                <td>{{$helper->credential}}</td>
                <td>
                    <a href="{{route('deleteHelper', $helper->id)}}" title='Deletar'>&#128465</a>
                    <a href="{{route('editHelper', $helper->id)}}" title='Editar'>&#9999<a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Ajudantes não encontrados! </p>
    @endif
</body>
</html>