<?php

namespace App\Services;

class FileUploadServices
{
    private $uploadDir;

    public function __construct($uploadDir)
    {
        $this->uploadDir = $uploadDir;
    }

    public function upload($file)
    {
        if (!empty($file['name'])):
            $fileName = uniqid() .'_'. $file['name'];
            $fileDir = $this->uploadDir . '/' . $fileName;
            move_uploaded_file($file['tmp_name'],  $fileDir);

            return $fileName;
        endif;
        return '';
    }
    // metodo responsavel por armazenar varias imagens ao mesmo tempo
    public function uploadMultiplo($files, $imovelId)  {
        $fileNames = [];
        $fileDir = $this->uploadDir.'/casa'.$imovelId;
                   # lib/img/upload/casa20

        if(!is_dir($fileDir)):
            mkdir($fileDir,0777,true);
        endif;

        if(is_array($files['name'])):
            foreach($files['name'] as $key => $nome):
                if(!empty($nome)):
                   $fileName = uniqid().'_'.$nome;
                   $saveDir =  $fileDir.'/'.$fileName;

                   if(move_uploaded_file($files['tmp_name'][$key],  $saveDir)):
                    $fileNames[] = 'casa'.$imovelId.'/'.$fileName;
                   endif;

                endif;
            endforeach;
        endif;
        return $fileNames;
    }
}
