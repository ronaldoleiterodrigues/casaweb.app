<?php

namespace App\Models\Dao;

use App\Models\Conexao;
use App\Models\Log;

class LogDao extends Conexao
{
    public function adicionar(Log $log)
    {
        $atributos = array_keys($log->atributosPreenchidos());
        $valores = array_values($log->atributosPreenchidos());

        return $this->inserir('CASALOGS', $atributos, $valores);
    }
}
