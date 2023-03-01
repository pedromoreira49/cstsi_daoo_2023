<?php

    namespace classes;

    use classes\Paciente;

    class Imc{
        private $imc;

        public static function calc(Paciente $paciente){
            $imc = $paciente->peso / pow($paciente->altura, 2);
            return $imc;
        }


    }

?>