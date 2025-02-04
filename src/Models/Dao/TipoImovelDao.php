<?php

namespace App\Models\Dao;
use App\Models\Conexao;

class TipoImovelDao extends Conexao
{
   public function listarTodos(){
       return $this->listar("TIPOIMOVEL");
   }
   
}
