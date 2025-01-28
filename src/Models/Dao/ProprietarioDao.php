<?php 
namespace App\Models\Dao;

use App\Models\Conexao;
use App\Models\Proprietario;

class ProprietarioDao extends Conexao
{
    public function listarTodos(){
        return $this->listar("PROPRIETARIO");
    }

    public function listarPorId($id){
        return $this->listar("PROPRIETARIO","WHERE ID = ?",[$id]);
    }
   
    public function adicionar(Proprietario $proprietario){

        $atributos = array_keys($proprietario->atributosPreenchidos());
        $valores = array_values($proprietario->atributosPreenchidos());
         
        return $this->inserir('PROPRIETARIO',$atributos,$valores);

    }

    public function atualizar(Proprietario $proprietario){

        $atributos = array_keys($proprietario->atributosPreenchidos());
        $valores = array_values($proprietario->atributosPreenchidos());
        return $this->update('PROPRIETARIO',$atributos,$valores, $proprietario->getId());

    }

    public function excluir($id)
    {
       return $this->deletar('PROPRIETARIO', $id);
    }
}