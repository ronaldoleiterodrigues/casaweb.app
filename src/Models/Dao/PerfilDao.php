<?php 
 namespace App\Models\Dao;
 use App\Models\Conexao;

 class PerfilDao extends Conexao
 {
    public function listarTodos(){
        return $this->listar("PERFIL");
    }
    
 }
?>