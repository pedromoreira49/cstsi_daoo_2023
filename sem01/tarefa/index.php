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
    $imc::mostrarImc($paciente1);
    //IMC: O IMC de Pedro é: 27.34
    $imc::classificarSaude($paciente1);
    //Mensagem: O paciente Pedro está: Sobrepeso

    $imc::calc($paciente2);
    $imc::mostrarImc($paciente2);
    //IMC: O IMC de Luis é: 16.98
    $imc::classificarSaude($paciente2);
    //Mensagem: O paciente Luis está: Abaixo do peso

?>