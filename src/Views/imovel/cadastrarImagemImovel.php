<div class="box-12">
    <h1 class=" fonte28 mg-b-4"><i class="fa-solid fa-camera fonte28 fnc-preto-azulado"></i> Cadastrar Imagem Imovel</h1>

    <form action="" method="POST" enctype="multipart/form-data" class="box-12">

     <input type="hidden" name = "imovel" value="<?= $imovel[0]->ID; ?>" />

     <div class="box-6 mg-b-2">
        <?php
        $imagem = 'casa-padrao.png';
        $dirImagem = 'lib/img/upload/' . $imagem;
        ?>
        <label class="file-image" for="img" class="fonte16 fnc-preto-azulado mg-t-3 mg-b-3">
            <i class="fa-solid fa-file-image fonte20 fnc-preto-azulado"></i>
            Escolha uma imagem
        </label>

        <input type="file" multiple id="img" name="imagens[]"  onchange="mostrar(this)" value="<?= $imagem; ?>">
        <img class=" logo-150" id="foto" src="<?= $dirImagem ?>" >

    </div>


    <div class="box-12 mg-t-2">
        <input type="submit" value="Cadastrar" class="btn bg-azul fnc-branco">
    </div>
   
    </form>
</div>