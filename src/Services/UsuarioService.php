<?php

namespace App\Services;

use App\Models\Dao\UsuarioDao;
use App\Models\Usuario;

class UsuarioService
{
    private $usuarioDao;

    public function __construct(UsuarioDao $usuarioDao)
    {
        $this->usuarioDao = $usuarioDao;
    }

    public function cadastrarUsuario($dados, $imagem)
    {
        $usuario = new Usuario();
        $dados['imagem'] = $imagem;

        foreach ($dados as $key => $valores):
            if($key == 'senha'):
                $valores = password_hash($valores, PASSWORD_BCRYPT);
            endif;
            $usuario->$key = $valores;
        endforeach;

        return $this->usuarioDao->adicionar($usuario);
    }

    public function atualizarUsuario($dados, $imagem)
    {
        $usuario = new Usuario();
        $dados['imagem'] = $imagem;
        foreach ($dados as $key => $valores):
            $usuario->$key = $valores;
        endforeach;

        return $this->usuarioDao->atualizar($usuario);
    }
}
