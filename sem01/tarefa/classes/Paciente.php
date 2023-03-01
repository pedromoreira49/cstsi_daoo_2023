<?php

    namespace classes;

    class Paciente extends Pessoa{
        private $imc;

        public function __construct($nome, $idade, $altura, $peso)
        {
            parent::__construct($nome, $idade, $altura, $peso);
        }

        public function calcImc(){
            if(is_numeric($this->altura) && is_numeric($this->peso)){
                $this->imc = $this->peso / pow($this->altura, 2);
            }else{
                echo "\nIMC $this->nome: Erro, informe peso e altura\n";
            }
        }

        public function showImc(){
            if(is_numeric($this->imc)){
                echo "\nO IMC de $this->nome é: " . number_format($this->imc, 2) . "\n";
            }
        }

        public function setAltura(float $altura){
            $this->altura = $altura;
            $this->calcImc();
        }

        public function setPeso(float $peso){
            $this->peso = $peso;
            $this->calcImc();
        }

        public function __set($nome, $valor){
            if($nome == 'imc'){
                if(is_array($valor)){
                    if($valor[0] > $valor[1]){
                        $this->imc = $valor[0]/ pow($valor[1], 2);
                    }else{
                        echo "Erro, o primeiro item deve ser o peso.";
                    }
                }else{
                    echo "Erro ao atualizar imc, esperado um array [peso, altura]";
                }
            }else{
                $this->$nome = $valor;
            }
        }

    }

?>