<?php

namespace App\Models;

class Log
{
    private string  $id;
    private string  $mensagem;
    private string  $linha;
    private string  $maquina;
    private string  $ip;
    private string  $horariolog;
    private string  $acao;
    private string  $usuario;

    public function __construct(
        string $id = '',
        string $mensagem = '',
        string $linha = '',
        string $maquina = '',
        string $ip = '',
        string $horariolog = '',
        string $acao = '',
        string $usuario = ''
    ) {
        date_default_timezone_set('America/Sao_Paulo');
        $this->id = $id;
        $this->mensagem = $mensagem;
        $this->linha = $linha;
        $this->maquina = $maquina;
        $this->ip = $ip;
        $this->horariolog = $horariolog ?? ('Y-m-d H:i:s');
        $this->acao = $acao;
        $this->usuario = $usuario;
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
    //metodo responsavel por obter o ip do usuario logado
    function getUserIP(): string
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP) ?: '127.0.0.1';
        }

        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            foreach ($ips as $ip) {
                $ip = trim($ip);
                if (filter_var($ip, FILTER_VALIDATE_IP)) {
                    return $ip;
                }
            }
        }

        return $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
    }
    //metodo responsavel por 
    function getHostByIP(string $ip): string
    {
        return gethostbyaddr($ip) ?: 'Desconhecido';
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'mensagem' => $this->mensagem,
            'linha' => $this->linha,
            'maquina' => $this->maquina,
            'ip' => $this->ip,
            'horariolog' => $this->horariolog,
            'acao' => $this->acao,
            'usuario' => $this->usuario
        ];
    }

    public function atributosPreenchidos()
    {
        return array_filter($this->toArray(), fn($value) => $value !== null && $value !== '');
    }
}
