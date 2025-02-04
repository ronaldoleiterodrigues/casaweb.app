<div class="box-8">
    <?php if (isset($id) && $id != ''): ?>
        <h2 class="fonte26"><i class="fa-solid fa-city fonte30 mg-r-1"></i> Atualizar Imovel</h2>
    <?php else: ?>
        <h2 class="fonte26"><i class="fa-solid fa-city fonte30 mg-r-1"></i> Cadastrar Imovel</h2>
    <?php endif; ?>
</div>

<div class="limpar"></div>
<form action="" method="POST" class="form-cad box-12 mg-t-2" enctype="multipart/form-data">

    <div class="box-12 mg-t-2">
        <input type="hidden" name="id" value="<?php if (isset($id) && $id != ''): echo $imovel[0]->ID; endif; ?>">
        <input type="hidden" name="codigo">
    </div>

    <div class="box-3 mg-b-2">
        <label for="" class="fnc-preto-azulado">Cep</label>
        <input type="text" name="cep" value="<?php if (isset($id) && $id != ''): echo $imovel[0]->CEP; endif; ?>" required>
    </div>

    <div class="box-8 mg-b-2">
        <label for="" class="fnc-preto-azulado">Logradouro</label>
        <input type="text" name="logradouro" value="<?php if (isset($id) && $id != ''): echo $imovel[0]->LOGRADOURO; endif; ?>">
    </div>

    <div class="box-6 mg-b-2">
        <label for="" class="fnc-preto-azulado">Bairro</label>
        <input type="text" name="bairro" value="<?php if (isset($id) && $id != ''): echo $imovel[0]->BAIRRO; endif; ?>">
    </div>
 

    <div class="box-6 mg-b-2">
        <label for="" class="fnc-preto-azulado">Cidade</label>
        <input type="text" name="cidade" value="<?php if (isset($id) && $id != ''): echo $imovel[0]->CIDADE; endif; ?>">
    </div>
 

 <div class="box-2 mg-b-2">
     <label for="" class="fnc-preto-azulado">Qtde Quartos</label>
     <input type="number" name="quartos" min='0'  value="<?php if (isset($id) && $id != ''): echo $imovel[0]->QUARTOS; endif; ?>">
 </div>
 

 <div class="box-2 mg-b-2">
     <label for="" class="fnc-preto-azulado">Qtde Banheiros</label>
     <input type="number" name="banheiros"  min='0'  value="<?php if (isset($id) && $id != ''): echo $imovel[0]->BANHEIROS; endif; ?>">
 </div>
 

 <div class="box-2 mg-b-2">
     <label for="" class="fnc-preto-azulado">Carros na Garagem </label>
     <input type="number" name="garagem"  min='0'  value="<?php if (isset($id) && $id != ''): echo $imovel[0]->GARAGEM; endif; ?>">
 </div>
 

 <div class="box-2 mg-b-2">
     <label for="" class="fnc-preto-azulado">Area Total</label>
     <input type="number" name="areatotal"  min='0'  value="<?php if (isset($id) && $id != ''): echo $imovel[0]->AREATOTAL; endif; ?>">
 </div>
 

 <div class="box-2 mg-b-2">
     <label for="" class="fnc-preto-azulado">Area construida</label>
     <input type="number" name="areaconstruida" min='0' value="<?php if (isset($id) && $id != ''): echo $imovel[0]->AREACONSTRUIDA; endif; ?>">
 </div>

 <div class="box-2 mg-b-2">
     <label for="" class="fnc-preto-azulado">Valor do Imovel</label>
     <input type="number" name="valor" min="0"  value="<?php if (isset($id) && $id != ''): echo $imovel[0]->VALOR; endif; ?>">
 </div>

<!-- LISTANDO TIPO DE IMOVEL -->
    <div class="box-4 mg-b-2">
        <label for="" class="fnc-preto-azulado">Escolha o Tipo do seu imovel</label>
        <select name="tipoimovel" id="">
            <?php if (isset($tipoimovel) && count($tipoimovel) > 0):
                foreach ($tipoimovel as $valores):
                    $selected  = (isset($id) && $id != '' && $imovel[0]->TIPOIMOVEL == $valores->ID) ? 'selected' : '';
                    $descricao = $valores->DESCRICAO;
                    echo "<option value='{$valores->ID}' {$selected} > {$descricao} </option>"
            ?>

            <?php endforeach;
            endif; ?>
        </select>
    </div>

    <!-- LISTANDO FINALIDADE  -->
     
    <div class="box-4 mg-b-2">
        <label for="" class="fnc-preto-azulado">Escolha a finalidade</label>
        <select name="finalidade" id="">
            <?php if (isset($finalidade) && count($finalidade) > 0):
                foreach ($finalidade as $valores):
                    $selected  = (isset($id) && $id != '' && $imovel[0]->FINALIDADE == $valores->ID) ? 'selected' : '';
                    $descricao = $valores->DESCRICAO;
                    echo "<option value='{$valores->ID}' {$selected} > {$descricao} </option>"
            ?>

            <?php endforeach;
            endif; ?>
        </select>
    </div>

    <!-- ESCOLHENDO O PROPRIETARIO -->
     
    <div class="box-4 mg-b-2">
        <label for="" class="fnc-preto-azulado">Escolha o Proprietario</label>
        <select name="proprietario" id="">
            <?php if (isset($proprietario) && count($proprietario) > 0):
                foreach ($proprietario as $valores):
                    $selected  = (isset($id) && $id != '' && $imovel[0]->PROPRIETARIO == $valores->ID) ? 'selected' : '';
                    $descricao = $valores->NOME;
                    echo "<option value='{$valores->ID}' {$selected} > {$descricao} </option>"
            ?>

            <?php endforeach;
            endif; ?>
        </select>
    </div>


    <div class="box-6 mg-b-2">
        <?php
        $imagem = isset($id) && $id != '' ?  $imovel[0]->IMAGEMCAPA : 'casa-padrao.png';
        $dirImagem = 'lib/img/upload/' . $imagem;
        $imagemAlt = $imagem === 'casa-padrao.png' ? 'Escolha uma imagem' : 'Imagem do imovel';
        ?>
        <label for="img" class="fonte16 fnc-preto-azulado mg-t-3 mg-b-3">
            <i class="fa-solid fa-file-image fonte20 fnc-cinza"></i>
            <?= $imagemAlt; ?>
        </label>

        <input type="file" id="img" name="imagemcapa"  onchange="mostrar(this)" value="<?= $imagem; ?>">
        <img class=" logo-150" id="foto" src="<?= $dirImagem ?>" alt="<?= $imagemAlt; ?>">

    </div>


    <div class="box-12 mg-t-2">
        <input type="submit" value="Cadastrar" class="btn bg-azul fnc-branco">
    </div>

</form>