<?php 

namespace App\Models;

use DateTime;

class Usuario
{
    private string $id;
    private string $nome;
    private string $usuario;
    private string $senha;
    private $perfil;
    private string $email;
    private string $imagem;
    private string $datacadastro;
    private string $ativo;

    public function __construct(string $id = '',string $nome = '',string $usuario ='', string $senha ='',string $perfil ='',string $email ='',string $imagem ='', string $dataCadastro ='',string $ativo  =''){
     
      $this->id = $id;
      $this->nome = $nome;
      $this->usuario = $usuario;
      $this->senha = $senha;
      $this->perfil = $perfil;
      $this->email = $email;
      $this->imagem = $imagem;
      $this->datacadastro = $dataCadastro ?? ('Y-m-d H:i:s');
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
            'usuario' => $this->usuario,
            'senha' => $this->senha,
            'perfil' => $this->perfil,
            'email' => $this->email,
            'imagem' => $this->imagem,
            'datacadastro' => $this->datacadastro,
            'ativo' => $this->ativo
        ];
    }
    
    public function atributosPreenchidos()
    {
        return array_filter($this->toArray(), fn($value) => $value !== null && $value !=='');
    }


    
}