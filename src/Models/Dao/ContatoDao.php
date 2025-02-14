<?php

namespace App\Models\Dao;

use App\Models\Conexao;
use App\Models\Contato;

class ContatoDao extends Conexao
{
    public function adicionar(Contato $contato){

        $atributos = array_keys($contato->atributosPreenchidos());
        $valores = array_values($contato->atributosPreenchidos());
         
        return $this->inserir('CONTATO',$atributos,$valores);
    }
    public function listarTodos(){
        return $this->listar("CONTATO","WHERE ATIVO = 1");
    }

    public function atualizar(Contato $contato){

        $atributos = array_keys($contato->atributosPreenchidos());
        $valores = array_values($contato->atributosPreenchidos());
        return $this->update('CONTATO',$atributos,$valores, $contato->getId());
    }
}
