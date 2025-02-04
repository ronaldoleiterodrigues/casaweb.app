<?php

namespace App\Models\Dao;
use App\Models\Conexao;
class FinalidadeDao extends Conexao
{
   public function listarTodos(){
       return $this->listar("FINALIDADE");
   }
   
}
