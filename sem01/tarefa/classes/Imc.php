<?php

    namespace classes;

    use classes\Paciente;

    class Imc{
        private $imc;

        public static function calc(Paciente $paciente){
            $imc = $paciente->peso / pow($paciente->altura, 2);
            return $imc;
        }

        public static function mostrarImc(Paciente $paciente){
            $imc = Imc::calc($paciente);
            echo "\nO IMC de $paciente->nome é: ". number_format($imc, 2) . "\n";
        }

        public static function mensagem(Paciente $paciente, string $mensage){
            echo "\nO paciente $paciente->nome está: ". $mensage ."\n";
        }

        public static function classificarSaude(Paciente $paciente){
            $imc = Imc::calc($paciente);
            if($imc < 18.5){
                Imc::mensagem($paciente, "Abaixo do peso");
            }
            else if($imc >= 18.5 && $imc <= 24.9){
                Imc::mensagem($paciente, "Saudável");
            }
            else if($imc >= 25 && $imc <= 29.0){
                Imc::mensagem($paciente, "Sobrepeso");
            }
            else {
                Imc::mensagem($paciente, "Obesidade");
            }
        }

    }

?>