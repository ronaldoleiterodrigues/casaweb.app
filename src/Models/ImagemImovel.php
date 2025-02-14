<?php

namespace App\Models;

class ImagemImovel
{
    private string $id;
    private string $imagem;
    private string $imovel;
    
    public function __construct(string $id = '', string $imagemimovel ='', string $imovel =''){
       $this->id = $id;
       $this->imagem = $imagemimovel;
       $this->imovel = $imovel;

    }
    public function getId(){
        return $this->id;
    }

    public function toArray()
    {
       return [ 
        "id" => $this->id,
        "imagem" => $this->imagem,
        "imovel" => $this->imovel,
       ];
    }    
   public function atributosPreenchidos()
   {
      return array_filter($this->toArray(), fn($value) => $value !== null && $value !== '');
   }

}
