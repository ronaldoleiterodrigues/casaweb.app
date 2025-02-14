<?php

namespace App\Controller;

use App\Models\Dao\ContatoDao;
use App\Models\Contato;

class PainelController
{
    private $contatoDao;

    public function __construct(){
        $this->contatoDao = new ContatoDao();
    }
    
    function index()
    {      
       $mensagens = $this->contatoDao->listarTodos();
        require_once "Views/painel/index.php";
    }

    public function alterarStatus()
    {

        $id = $_GET['id'] ?? null;
        $ativo = $_GET['ativo'] ?? null;

        if ($id):
            $contato = new Contato($id,"","","","","",$ativo);
            $this->contatoDao->atualizar($contato);
        #$this->success("Imovel", "Atualizado", "listar");
        endif;
    }

    
    
}
