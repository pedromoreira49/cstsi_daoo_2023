<?php

    namespace classes;

    use classes\Paciente;

    class Imc{
        private $imc;

        public static function calc(Paciente $paciente){
            $imc = $paciente->peso / pow($paciente->altura, 2);
            return $imc;
        }

        public static function showImc(Paciente $paciente){
            $imc = Imc::calc($paciente);
            echo "\nO IMC de $paciente->nome é: ". number_format($imc, 2) . "\n";
        }

        public static function mensagem(Paciente $paciente, string $mensage){
            echo "\nO paciente $paciente->nome está: ". $mensage ."\n";
        }

    }

?>