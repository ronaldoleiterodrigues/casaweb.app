<?php

namespace App\Models\Dao;

use App\Models\Conexao;
use App\Models\Imovel;

class ImovelDao extends Conexao
{
    public function listarTodos(){
        return $this->listar("IMOVEL");
    }

    public function listarPorId($id){
        return $this->listar("IMOVEL","WHERE ID = ?",[$id]);
    }

    public function listarMaxValue($campo){
        return $this->listarUltimoRegistro("IMOVEL",$campo);
    }

   
    public function adicionar(Imovel $imovel){

        $atributos = array_keys($imovel->atributosPreenchidos());
        $valores = array_values($imovel->atributosPreenchidos());
         
        return $this->inserir('IMOVEL',$atributos,$valores);

    }

    public function atualizar(Imovel $imovel){

        $atributos = array_keys($imovel->atributosPreenchidos());
        $valores = array_values($imovel->atributosPreenchidos());
        return $this->update('IMOVEL',$atributos,$valores, $imovel->getId());

    }

    public function excluir($id)
    {
       return $this->deletar('IMOVEL', $id);
       
    }
}
