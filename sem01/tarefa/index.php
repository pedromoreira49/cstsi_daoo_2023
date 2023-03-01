<?php

use classes\Imc;
use classes\Paciente;

    include 'autoload.php';

    $paciente1 = new Paciente('Pedro', 22, 1.7, 79);
    /* $paciente1->calcImc();
    $paciente1->showImc(); */

    $paciente2 = new Paciente('Luis', 21, 1.8, 55);
    $imc = new Imc();
    $imc::calc($paciente1);
    $imc::calc($paciente2);

?>