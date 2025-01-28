<?php
namespace App\Models;

class Proprietario
{
    private string $id;
    private string $nome;
    private string $contato;
    private string $sexo;
    private  string $ativo;

    public function __construct(string $id = '', string $nome = '', string $contato = '', string $sexo = '', string $ativo ='')
    {
       $this->id = $id;
       $this->nome = $nome;
       $this->contato = $contato;
       $this->sexo = $sexo;
       $this->ativo = $ativo;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
          $this->id = $id;
    }

    public function __set($chave, $valor){

       if(property_exists($this, $chave)):
        $this->$chave = $valor;

       endif;
    }

    public function toArray(){
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'contato' => $this->contato,
            'sexo' => $this->sexo,
            'ativo' => $this->ativo
        ];
    }
    
    public function atributosPreenchidos()
    {
        return array_filter($this->toArray(), fn($value) => $value !== null && $value !=='');
    }


}