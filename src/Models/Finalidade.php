<?php

namespace App\Models;

class Finalidade
{
    private string $id;
    private string $descricao;

    public function __construct(string $id = '', string $descricao = ''){
   $this->id = $id;
   $this->descricao = $descricao;

    }

    public function getId(){
        return $this->id;
    } 
    public function getDescricao(){
        return $this->descricao;
    }

    public function setId($id){
        return $this->id = $id;
    } 
    public function setDescricao($descricao){
        return $this->descricao = $descricao;
    }
}
