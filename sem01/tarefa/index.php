<?php

use classes\Paciente;

    include 'autoload.php';

    $paciente1 = new Paciente('Pedro', 22, 1.7, 79);
    $paciente1->calcImc();
    $paciente1->showImc();

?>