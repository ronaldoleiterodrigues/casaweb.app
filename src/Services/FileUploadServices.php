<?php
 namespace App\Services;

 class FileUploadServices
 {
    private $uploadDir;

    public function __construct($uploadDir){
        $this->uploadDir = $uploadDir;
    }

    public function upload($file){

        if(!empty($file['name'])):
            $fileName = uniqid().$file['name'];
            $fileDir = $this->uploadDir .'/'.$fileName;
            move_uploaded_file($file['tmp_name'],  $fileDir);

            return $fileName;
        endif;
        return '';

    }
 }

?>