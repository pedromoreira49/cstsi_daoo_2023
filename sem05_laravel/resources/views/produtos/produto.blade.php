<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <p><a href="{{route('create')}}" title="Criar">&#43Criar produto</a></p>
    @if ($produtos->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>qtd_estoque</th>
                <th>preco</th>
                <th>Importado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td><a href="{{route('show', $produto->id)}}">{{$produto->id}}</a></td>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->qtd_estoque}}</td>
                <td>{{$produto->preco}}</td>
                <td>{{($produto->importado)?'Sim':'Não'}}</td>
                <td>
                    <a href="{{route('delete', $produto->id)}}" title='Deletar'>&#128465</a>
                    <a href="{{route('edit', $produto->id)}}" title='Editar'>&#9999<a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Produtos não encontrados! </p>
    @endif
</body>
</html>