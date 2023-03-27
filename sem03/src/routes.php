<?php

use Daoo\Aula03\controller\Route;
use Daoo\Aula03\controller\api\Produto;
use Daoo\Aula03\controller\api\Usuario;
use Daoo\Aula03\controller\api\Ajudante;

// use Daoo\Aula03\controller\api\Desconto;

/* Route::routes([
	'produto' => Produto::class,
	// 'desconto' => Desconto::class
	// 'usuario' => Usuaraio::class
]); */

Route::routes([
	'usuario' => Usuario::class,
]);

Route::routes([
	'ajudante' => Ajudante::class,
]);

/* Route::routes([
	'paciente' => Produto::class,
	// 'desconto' => Desconto::class
	// 'usuario' => Usuaraio::class
]); */

//api:
// composer run api
// ou
// php -S localhost:8081 src/index.php
//
//http://localhost:8081/classe/metodo/parametro
//http://localhost:8081/produto/show/111

// composer run web
// ou
// php -S localhost:8080 -t src/web/ 
//http://localhost:8081/showProduto.php?id=111