<?php
namespace Daoo\Aula03\controller\api;

use Daoo\Aula03\model\Ajudante as AjudanteModel;
use Exception;

    class Ajudante extends Controller{
        
        public function __construct(){
            $this->setHeader();
            $this->model = new AjudanteModel();
        }

        public function index(){
            echo json_encode($this->model->read());
        }

        public function show($id){
            $helper = $this->model->read($id);
            if($helper){
                $response = ['helpers' => $helper];
            }else{
                $response = ['Erro' => "Ajudante não encontrado"];
                header('HTTP/1.0 404 Not Found');
            }
            echo json_encode($response);
        }

        public function store(){
            try{
                $this->validateAjudanteRequest();

                $this->model = new AjudanteModel(
                    $_POST['nome'],
                    $_POST['email'],
                    $_POST['senha'],
                    $_POST['credential'],
                    $_POST['cpf'],
                    $_POST['random_code'],
                );
                $this->model->status = isset($_POST['status']);
                if($this->model->create()){
                    echo json_encode([
                        "success" => "Ajudante criado com sucesso!",
                        "data" => $this->model->getColumns()
                    ]);
                }else{
                    throw new Exception("Erro ao criar Ajudante");
                }
            }catch(\Exception $err){
                $this->setHeader(500, 'Erro interno no servidor!');
                echo json_encode([
                    "error" => $err->getMessage()
                ]);
            }
        }

        public function update(){
            try{
                if(!$this->validatePostRequest(['id'])){
                    throw new Exception("Erro: Informe o ID");
                }
                $this->validateAjudanteRequest();

                $this->model = new AjudanteModel(
                    $_POST['nome'],
                    $_POST['email'],
                    $_POST['senha'],
                    $_POST['credential'],
                    $_POST['cpf'],
                    $_POST['random_code']
                );

                $this->model->id = $_POST['id'];
                $this->model->status = isset($_POST['status']);

                if($this->model->update()){
                    echo json_encode([
                        "success" => "Usuario atualizado com sucesso!",
                        "data" => $this->model->getColumns()
                    ]);
                }else{
                    throw new Exception("Erro ao atualizar usuarios!");
                }
            }catch(Exception $err){
                $this->setHeader(500, 'Erro interno no servidor');
                echo json_encode([
                    "error" => $err->getMessage()
                ]);
            }
        }


        public function remove(){
            try{
                if(!isset($_POST['id'])){
                    $this->setHeader(400, "Bad Request!");
                    throw new Exception("Erro: id obrigatorio");
                }
                $id = $_POST['id'];
                if($this->model->delete($id)){
                    $response = ["message" => "Ajudante id: $id removido com sucesso"];
                }else{
                    $this->setHeader(500, "Erro interno no servidor");
                    throw new Exception("Erro ao remover usuario");
                }
                echo json_encode($response);
            }catch(Exception $err){
                echo json_encode([
                    "error" => $err->getMessage()
                ]);
            }
        }

        private function validateAjudanteRequest(){
            $fields = [
                'nome',
                'email',
                'senha',
                'credential',
                'cpf',
                'random_code'
            ];
            if(!$this->validatePostRequest($fields)){
                throw new \Exception('Erro: Campos incompletos!');
            }
        }

    }


?>