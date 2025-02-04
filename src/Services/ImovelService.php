<?php

namespace App\Services;

use App\Models\Imovel;
use App\Models\Dao\ImovelDao;

class ImovelService
{
    private $imovelDao;

    public function __construct(ImovelDao $imovelDao)
    {
        $this->imovelDao = $imovelDao;
    }

    public function cadastrarImovel($dados, $imagem)
    {
        $codigo = $this->imovelDao->listarMaxValue('CODIGO');
        
        $imovel = new Imovel();
        $dados['imagemcapa'] = $imagem;
        $dados['codigo'] = str_pad($codigo[0]->ULTIMOVALOR + 1,6,'0',STR_PAD_LEFT);

        foreach ($dados as $key => $valores):
            $imovel->$key = $valores;
        endforeach;

        //echo "<pre class='fonte14 fnc-sucesso mg-t-4'>";
        //var_dump($codigo);
        //echo "</pre>";

        return $this->imovelDao->adicionar($imovel);
    }

    public function atualizarImovel($dados, $imagem)
    {
        $imovel = new Imovel();
        $dados['imagemcapa'] = $imagem;

        foreach ($dados as $key => $valores):
            $imovel->$key = $valores;
        endforeach;
        return $this->imovelDao->atualizar($imovel);
    }
}
