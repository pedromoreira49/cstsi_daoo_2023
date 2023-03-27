<?php

namespace Daoo\Aula03\controller\api;

use Daoo\Aula03\model\Usuario as UsuarioModel;
use Exception;

    class Usuario extends Controller{

        public function __construct(){
            $this->setHeader();
            $this->model = new UsuarioModel();
        }

        public function index(){
            echo json_encode($this->model->read());
        }

        public function show($id){
            $user = $this->model->read($id);
            if($user){
                $response = ['users' => $user];
            }else{
                $response = ['Erro' => "Usuario não encontrado"];
                header('HTTP/1.0 404 Not Found');
            }
            echo json_encode($response);
        }

        public function store(){
            try{
                $this->validateUsuarioRequest();

                $this->model = new UsuarioModel(
                    $_POST['nome'],
                    $_POST['email'],
                    $_POST['senha'],
                );
                $this->model->status = isset($_POST['status']);
                if($this->model->create()){
                    echo json_encode([
                        "success" => "Usuario criado com sucesso!",
                        "data" => $this->model->getColumns()
                    ]);
                }else{
                    throw new Exception("Erro ao criar usuario");
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
                $this->validateUsuarioRequest();

                $this->model = new UsuarioModel(
                    $_POST['nome'],
                    $_POST['email'],
                    $_POST['senha'],
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
                    "Erro" => $err->getMessage()
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
                    $response = ["message" => "Usuario id: $id removido com sucesso"];
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

        private function validateUsuarioRequest(){
            $fields = [
                'nome',
                'email',
                'senha'
            ];
            if(!$this->validatePostRequest($fields)){
                throw new \Exception('Erro: Campos incompletos!');
            }
        }
    }

?>