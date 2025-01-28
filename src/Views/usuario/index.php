<div class="box-8">
    <?php if (isset($id) && $id != ''): ?>
        <h2 class="fonte26"><i class="fa-solid fa-user fonte30 mg-r-1"></i> Atualizar Usuario</h2>
    <?php else: ?>
        <h2 class="fonte26"><i class="fa-solid fa-user fonte30 mg-r-1"></i> Cadastrar Usuario</h2>
    <?php endif; ?>
</div>

<div class="limpar"></div>
<form action="" method="POST" class=" box-12 mg-t-8" enctype="multipart/form-data">

    <div class="box-12 mg-t-2">
        <input type="hidden" name="id" value="<?php if (isset($id) && $id != ''): echo $usuario[0]->ID; endif; ?>">

    </div>

    <div class="box-8">
        <label for="" class="fnc-preto-azulado">Nome</label>
        <input type="text" name="nome" value="<?php if (isset($id) && $id != ''): echo $usuario[0]->NOME; endif; ?>">
    </div>

    <div class="box-4">
        <label for="" class="fnc-preto-azulado">Usuario</label>
        <input type="text" name="usuario" value="<?php if (isset($id) && $id != ''): echo $usuario[0]->USUARIO; endif; ?>">
    </div>

    <?php if (!isset($id)): ?>
        <div class="box-4">
            <label for="" class="fnc-preto-azulado">Senha</label>
            <input type="password" name="senha">
        </div>
    <?php endif; ?>

    <div class="box-4">
        <label for="" class="fnc-preto-azulado">Email</label>
        <input type="email" name="email" value="<?php if (isset($id) && $id != ''): echo $usuario[0]->EMAIL; endif; ?>">
    </div>

    <div class="box-4">
        <label for="" class="fnc-preto-azulado">Perfil</label>
        <select name="perfil" id="">
            <?php if (isset($perfil) && count($perfil) > 0):
                foreach ($perfil as $valores):
                    $selected  = (isset($id) && $id != '' && $usuario[0]->PERFIL == $valores->ID) ? 'selected' : '';
                    $descricao = $valores->DESCRICAO;
                    echo "<option value='{$valores->ID}' {$selected} > {$descricao} </option>"
            ?>


            <?php endforeach;
            endif; ?>


        </select>
    </div>


    <div class="box-6">
        <?php
        $imagem = isset($id) && $id != '' ?  $usuario[0]->IMAGEM : 'user-padrao.png';
        $dirImagem = 'lib/img/users-images/' . $imagem;
        $imagemAlt = $imagem === 'user-padrao.png' ? 'Escolha uma imagem' : 'Imagem do Usuario';
        ?>
        <label for="img" class="fonte16 fnc-preto-azulado mg-t-3 mg-b-3">
            <i class="fa-solid fa-file-image fonte20 fnc-cinza"></i>
            <?= $imagemAlt; ?>
        </label>
        <input type="file" id="img" name="imagem"  onchange="mostrar(this)" value="<?= $imagem; ?>">
        <img class=" logo-150" id="foto" src="<?= $dirImagem ?>" alt="<?= $imagemAlt; ?>">

    </div>


    <div class="box-12 mg-t-2">
        <input type="submit" value="Cadastrar" class="btn bg-azul fnc-branco">
    </div>

</form>