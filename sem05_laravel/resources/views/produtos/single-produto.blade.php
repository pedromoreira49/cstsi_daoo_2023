<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Produto</title>
</head>
<body>
    <h1>{{$produto->nome}}</h1>
    <p>{{$produto->descricao}}</p>
    <ul>
        <li>Quantidade: {{$produto->qtd_estoque}}</li>
        <li>Preço: {{$produto->preco}}</li>
        <li>Importado: {{($produto->importado)?'Sim':'Não'}}</li>
    </ul>
    <p><a href="{{route('produtos')}}">Voltar</a></p>
</body>
</html>