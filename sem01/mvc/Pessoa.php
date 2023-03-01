<?php

    namespace mvc;

    class Pessoa{
        public $nome, $idade, $peso, $altura;
        private $imc;


        public function __construct(?string $nome, ?int $idade, ?int $peso, ?float $altura)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->peso = $peso;
            $this->altura = $altura;
        }

        //GETTERS
        public function getNome(){
            return $this->nome;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function getPeso(){
            return $this->peso;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function __get($imc){
            return $this->$imc;
        }

        //SETTERS
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setPeso($peso){
            $this->peso = $peso;
        }

        public function setAltura($altura){
            $this->altura = $altura;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function __set($imc, $value){
            $this->$imc = $value;
        }

        function calcImc(){
            $this->__set($this->imc, $this->peso / pow($this->altura, 2));
        }

        function showImc(){
            $this->__get($this->imc);
        }

    }

    $obj = new Pessoa('joao', 30, 40, 1.6);
    $obj1 = new Pessoa('maria', 24, 50, 1.5);
    $obj2 = new Pessoa('ricardo', 50, 80, 1.8);

    $obj->calcImc();
    $obj->showImc();
    $obj->getNome();

    $obj1->calcImc();
    $obj1->showImc();

    $obj2->calcImc();
    $obj2->showImc();


    //var_dump($obj, $obj1, $obj2);

?>
