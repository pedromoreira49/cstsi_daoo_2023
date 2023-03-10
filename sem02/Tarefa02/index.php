<?php

include 'autoload.php';

use classes\Atleta;
use classes\Medico;
use logs\Relatorio;

$medico = new Medico("Ana", 30, 5000, 4, 80, 1.70);
$atleta = new Atleta("Bia", 20, 70, 1.80);

$medico->mostrarsalario();
$medico->mostrarTempoContrato();

$relatorio = new Relatorio();
$relatorio->add($medico);
$relatorio->add($atleta);
$relatorio->imprime();
