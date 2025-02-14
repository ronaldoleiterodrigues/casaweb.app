<?php

namespace App\Models;

use DateTime;

class Contato
{
    private string $id;
    private string $datamensagem;
    private string $nome;
    private string $sobrenome;
    private string $email;
    private string $interesse;
    private string $mensagem;
    private string $ativo;

    public function __construct($id = '',$nome = '',$sobrenome = '',$email = '',$interesse = '',$mensagem = '', $ativo = ''){
        date_default_timezone_set('America/Sao_Paulo');
        $this->id = $id;
        $this->datamensagem = date('Y-m-d H:i:s');
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->email = $email;
        $this->interesse = $interesse;
        $this->mensagem = $mensagem;
        $this->ativo = $ativo;
    }
    public function getId()
    {
       return $this->id;
    }
    public function setId($id)
    {
       $this->id = $id;
    }
    public function __set($chave, $valor)
    {
       if (property_exists($this, $chave)):
          $this->$chave = $valor;
       endif;
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'datamensagem' => $this->datamensagem,
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome,
            'email' => $this->email,
            'interesse' => $this->interesse,
            'mensagem' => $this->mensagem,
            'ativo' => $this->ativo
        ];
    }

    public function atributosPreenchidos()
    {
        return array_filter($this->toArray(), fn($value) => $value !== null && $value !== '');
    }


}
