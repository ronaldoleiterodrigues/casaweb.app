<?php

namespace App\Controller;

use App\Models\Dao\ContatoDao;
use App\Models\Contato;
use App\Models\Dao\ImovelDao;
use App\Models\Notifications;

class BaseController extends Notifications
{
    function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST'):

            $contato = new Contato();
            $contatoDao = new ContatoDao();

            foreach($_POST as $key => $dados):
               $contato->$key = $dados;
            endforeach;

            $contatoDao->adicionar($contato);

            echo $this->defaultMessage('Mensagem cadastrada com sucesso!','Aguarde o contato de nosso representante','','');

        endif;

        $imoveis = (new ImovelDao())->listarTodos();
        require_once 'Views/home/index.php';
    }
}
