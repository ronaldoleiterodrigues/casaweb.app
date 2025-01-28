<?php

namespace App\Controller;

use App\Models\Dao\ProprietarioDao;
use App\Models\Notifications;
use App\Models\Proprietario;
use App\Services\ProprietarioService;

class ProprietarioController extends Notifications
{
  private $proprietarioService;
  private $proprietarioDao;
  public function __construct()
  {
    $this->proprietarioDao = new ProprietarioDao();
    $this->proprietarioService = new ProprietarioService($this->proprietarioDao);
  }

  function index()
  {
    $id = $_GET['id'] ?? null;

    if ($id):
      $proprietario = $this->proprietarioDao->listarPorId($id);
    endif;

    if ($_POST):
      if (empty($_POST['id'])):
        $this->inserir($_POST);
      else:
        $this->atualizar($_POST);
      endif;

    endif;

    require_once "Views/painel/index.php";
  }

  public function inserir($dados)
  {
    $retorno = $this->proprietarioService->cadastrarProprietario($dados);
    echo $this->success('Proprietario', 'Cadastrar', 'listar');
  }

  function listar()
  {
    $proprietario = $this->proprietarioDao->listarTodos();
    require_once "Views/painel/index.php";
  }

  function atualizar($dados)
  {
    $retorno = $this->proprietarioService->atualizarProprietario($dados);
    echo $this->success('Proprietario', 'Atualizar', 'listar');
  }

  function deleteConfirm()
  {

    $id = $_GET['id'] ?? null;
    if ($id):
      echo $this->confirm('Excluir', 'Proprietario', '', $id);
    endif;
    require_once "Views/shared/header.php";
  }

  function excluir()
  {
    $id = $_GET['id'] ?? null;

    if ($id):
      //  $ret = $this->proprietarioDao->excluir($id);
      $this->proprietarioDao->excluir($id);
      echo $this->success('Proprietario', 'Excluido', 'listar');
    endif;

    require_once "Views/shared/header.php";
  }

  public function alterarStatus(){

    $id = $_GET['id'] ?? null;
    $ativo = $_GET['ativo'] ?? null;

    if($id):
      $proprietario = new Proprietario($id, '','','',$ativo);
      $this->proprietarioDao->atualizar($proprietario);
      #$this->success("Proprietaio", "Atualizado", "listar");
    endif;

  }
}
