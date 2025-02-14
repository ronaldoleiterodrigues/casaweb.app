<?php 
namespace App\Models\Dao;

use App\Models\Conexao;
use App\Models\Usuario;

class UsuarioDao extends Conexao
{
    public function listarTodos(){
        return $this->listar("USUARIO");
    }

    public function autenticar($usuario){
        return $this->listar("USUARIO","WHERE USUARIO = '".$usuario."'"); 
    }

    public function listarPorId($id){
        return $this->listar("USUARIO","WHERE ID = ?",[$id]);
    }
   
    public function adicionar(Usuario $usuario){

        $atributos = array_keys($usuario->atributosPreenchidos());
        $valores = array_values($usuario->atributosPreenchidos());
         
        return $this->inserir('USUARIO',$atributos,$valores);

    }

    public function atualizar(Usuario $usuario){

        $atributos = array_keys($usuario->atributosPreenchidos());
        $valores = array_values($usuario->atributosPreenchidos());
        return $this->update('USUARIO',$atributos,$valores, $usuario->getId());

    }

    public function excluir($id)
    {
       return $this->deletar('USUARIO', $id);
    }
}