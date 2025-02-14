<?php

namespace App\Services;

use App\Models\Imovel;
use App\Models\ImagemImovel;
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
        $dados['codigo'] = str_pad($codigo[0]->ULTIMOVALOR + 1, 6, '0', STR_PAD_LEFT);

        foreach ($dados as $key => $valores):
            $imovel->$key = $valores;
        endforeach;
        return $this->imovelDao->adicionar($imovel);
    } 
    // metodo responsavel por cadastrar imagens para ium imovel
    public function cadastrarImagemImovel($dados, $imagens){
        if(!is_array($imagens)):
              $imagens = [$imagens];
            //   garantindo que meu parametro sera sempre i=uma imagem
        endif;

        foreach($imagens as $imagem):
            $imovelImagem = new ImagemImovel('',$imagem,$dados['imovel']);
            $this->imovelDao->adicionarImagem($imovelImagem);
        endforeach;
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
