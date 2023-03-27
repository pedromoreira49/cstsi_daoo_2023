<?php

namespace Daoo\Aula03\model;

use Exception;

class Ajudante extends ORM implements iDAO
{
    private $id, $nome, $email, $senha, $credential, $status, $cpf;

    public function __construct(
        $nome = '',
        $email = '',
        $senha = '',
        $random_code = 0,
        $credential = '',
        $cpf = '',
        $status = false
    ){
        parent::__construct();
        $this->table = 'helpers';
        $this->primary = 'id';
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->credential = $credential;
        $this->cpf = $cpf;
        $this->random_code = $random_code;
        $this->status = $status;
        $this->mapColumns($this);
    }

    public function read($id = null){
        try{
            if($id){
                return $this->selectById($id);
            }
            return $this->select([]);
        }catch(\Exception $err){
            error_log("ERRO: ".print_r($err, TRUE));
            throw new Exception($err->getMessage());
        }
    }

    public function create(){
        try{
            $sql = "INSERT INTO $this->table ($this->columns)"
                . "VALUES ($this->params)";

            $prepStmt = $this->conn->prepare($sql);
            $result = $prepStmt->execute($this->values);

            if(!$result || $prepStmt->rowCount() != 1){
                throw new Exception("Erro ao inserir usuario!");
            }

            $this->id = $this->conn->lastInsertId();
            $this->dumpQuery($prepStmt);
            return true;
        }catch(\Exception $err){
            error_log("ERRO: " . print_r($err, TRUE));
            $prepStmt ?? $this->dumpQuery($prepStmt);
            return false;
        }
    }

    public function update(){
        try{
            $this->values[':id'] = $this->id;
            $sql = "UPDATE $this->table SET $this->updated WHERE id = :id";
            $prepStmt = $this->conn->prepare($sql);
            $prepStmt->bindValue(':status', $this->status);
            if($prepStmt->execute($this->values)){
                $this->dumpQuery($prepStmt);
                return $prepStmt->rowCount() > 0;
            }
        }catch(\Exception $err){
            error_log("ERRO: " . print_r($err, TRUE));
            $this->dumpQuery($prepStmt);
            return false;
        }
    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $prepStmt = $this->conn->prepare($sql);
        if($prepStmt->execute([':id' => $id])){
            return $prepStmt->rowCount() > 0;
        }else{
            return false;
        }
    }

    public function filter($arrayFilter){

    }

    public function getColumns(): array
    {
        $columns = [
            "nome" => $this->nome,
            "email" => $this->email,
            "senha" => $this->senha,
            "credential" => $this->credential,
            "cpf" => $this->cpf,
            "random_code" => $this->random_code,
            "status" => $this->status
        ];
        if($this->id) $columns['id']=$this->id;
        return $columns;
    }

    public function __set($name, $value){
        $this->$name = $value;
        if($name != 'id') $this->mapColumns($this);
    }

    public function __get($name){
        return $this->$name;
    }
}