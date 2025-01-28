<?php

namespace App\Controller;

use App\Models\Dao\UsuarioDao;
use App\Models\Notifications;
use App\Models\Usuario;
use App\Services\FileUploadServices;
use App\Services\UsuarioService;
use App\Models\Dao\PerfilDao;

class UsuarioController extends Notifications
{
  private $usuarioService;
  private $usuarioDao;
  private $perfil;
  private $fileiUploadService;
  public function __construct()
  {
    $this->perfil = new PerfilDao();
    $this->usuarioDao = new UsuarioDao();
    $this->usuarioService = new UsuarioService($this->usuarioDao);
    $this->fileiUploadService = new FileUploadServices('lib/img/users-images');

  }

  function index()
  {
    $id = $_GET['id'] ?? null;

    if ($id):
      $usuario = $this->usuarioDao->listarPorId($id);
    endif;

    if ($_POST):
      if (empty($_POST['id'])):
        $this->inserir($_POST, $_FILES);
      else:
        $this->atualizar($_POST, $_FILES);
      endif;

    endif;

     $perfil = $this->perfil->listarTodos();
    require_once "Views/painel/index.php";
  }

  public function inserir($dados, $file)
  {
    $imagem = $this->fileiUploadService->upload($file['imagem']);
    $retorno = $this->usuarioService->cadastrarUsuario($dados, $imagem);
    echo $this->success('Usuario', 'Cadastrar', 'listar');
  }

  function listar()
  {
    $usuario = $this->usuarioDao->listarTodos();
    require_once "Views/painel/index.php";
  }

  function atualizar($dados,$file)
  {
    $imagem = $this->fileiUploadService->upload($file['imagem']);
    $retorno = $this->usuarioService->atualizarUsuario($dados,$imagem);
    echo $this->success('Usuario', 'Atualizar', 'listar');
  }

  function deleteConfirm()
  {

    $id = $_GET['id'] ?? null;
    if ($id):
      echo $this->confirm('Excluir', 'Usuario', '', $id);
    endif;
    require_once "Views/shared/header.php";
  }

  function excluir()
  {
    $id = $_GET['id'] ?? null;

    if ($id):
      //  $ret = $this->proprietarioDao->excluir($id);
      $this->usuarioDao->excluir($id);
      echo $this->success('Usuario', 'Excluido', 'listar');
    endif;

    require_once "Views/shared/header.php";
  }

  public function alterarStatus(){

    $id = $_GET['id'] ?? null;
    $ativo = $_GET['ativo'] ?? null;

    if($id):
      $usuario = new Usuario($id,'','','','','','','',$ativo);
      $this->usuarioDao->atualizar($usuario);
      #$this->success("Proprietaio", "Atualizado", "listar");
    endif;

  }
}
