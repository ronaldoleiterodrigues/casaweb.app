<?php

namespace App\Services;

use App\Models\Dao\ProprietarioDao;
use App\Models\Proprietario;

class ProprietarioService
{
    private $proprietarioDao;

    public function __construct(ProprietarioDao $proprietarioDao)
    {
        $this->proprietarioDao = $proprietarioDao;
    }

    public function cadastrarProprietario($dados)
    {
        $proprietario = new Proprietario();

        foreach ($dados as $key => $valores):
            $proprietario->$key = $valores;
        endforeach;

        return $this->proprietarioDao->adicionar($proprietario);
    }

    public function atualizarProprietario($dados)
    {
        $proprietario = new Proprietario();

        foreach ($dados as $key => $valores):
            $proprietario->$key = $valores;
        endforeach;

        return $this->proprietarioDao->atualizar($proprietario);
    }
}
