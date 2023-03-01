<?php

    namespace classes;

    use classes\Paciente;

    class Imc{
        private $imc;

        public static function calc(Paciente $paciente){
            $imc = $paciente->peso / pow($paciente->altura, 2);
            echo "\nO IMC de $paciente->nome é: ". number_format($imc, 2) . "\n";
        }

        public static function classificarSaude(Paciente $paciente){

        }

        public static function classificarPelaIdade(){
            
        }

    }

?>