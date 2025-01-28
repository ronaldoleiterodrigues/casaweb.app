<div class="box-8">
    <?php if (isset($id) && $id != ''): ?>
        <h2 class="fonte26"><i class="fa-solid fa-user-tie fonte30 mg-r-1"></i> Atualizar Proprietario</h2>
    <?php else: ?>
        <h2 class="fonte26"><i class="fa-solid fa-user-tie fonte30 mg-r-1"></i> Cadastrar Proprietario</h2>
    <?php endif; ?>
</div>

<div class="limpar"></div>
<form action="" method="POST" class=" box-12 mg-t-8">

    <div class="box-12 mg-t-2">
        <input type="hidden" name="id" value="<?php if (isset($id) && $id != ''): echo $proprietario[0]->ID;
                                                endif; ?>">
    </div>

    <div class="box-8">
        <label for="" class="fnc-preto-azulado">Nome</label>
        <input type="text" name="nome" value="<?php if (isset($id) && $id != ''): echo $proprietario[0]->NOME;
                                                endif; ?>">
    </div>

    <div class="box-4">
        <label for="" class="fnc-preto-azulado">Contato</label>
        <input type="text" name="contato" value="<?php if (isset($id) && $id != ''): echo $proprietario[0]->CONTATO;
                                                    endif; ?>">
    </div>

    <div class="box-4">
        <label for="" class="fnc-preto-azulado">Sexo</label>
        <select name="sexo" id="">
            <?php if (isset($id) && $id != ''): ?>

                <option value="<?= $proprietario[0]->SEXO;?>" selected><?php if($proprietario[0]->SEXO == 'M'):  echo 'Masculino'; else: echo 'Feminino';endif;?></option>
                <option value="M">Masculino</option>
                <option value="F">Feminio</option>
            
                <?php else: ?>
                <option value="">Escolha o sexo...</option>
                <option value="M">Masculino</option>
                <option value="F">Feminio</option>

            <?php endif; ?>


        </select>
    </div>


    <div class="box-12 mg-t-2">
        <input type="submit" value="Cadastrar" class="btn bg-azul fnc-branco">
    </div>

</form>