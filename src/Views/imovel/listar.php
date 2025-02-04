<div class="wd-100">
    <div class="box-8">
        <h2><i class="fa-solid fa-city fonte30 mg-r-1"></i>Imovel</h2>
    </div>
    <div class="box-4 flex justify-center item-centro">
        <div class="radius-start wd-30 bg-azul-escuro pd-10 fnc-branco fonte16"><i class="fa-solid fa-plus"></i></div>
        <div class="radius-end wd-60 bg-azul pd-10 fnc-branco fonte16">
            <a href="index.php?controller=ImovelController&metodo=index" class="fnc-branco">Novo Cadastro</a>
        </div>
    </div>

</div>
<div class="limpar"></div>
<table class="grid wd-100 mg-t-8">
    <thead>
        <tr>
            <th class="fonte14 espaco-letra fw-bold">Codigo</th>
            <th class="fonte14 espaco-letra fw-bold">valor</th>
            <th class="fonte14 espaco-letra fw-bold">Endereço</th>
            <th class="fonte14 espaco-letra fw-bold">Bairro</th>
            <th class="fonte14 espaco-letra fw-bold">Cidade</th>
            <th class="fonte14 espaco-letra fw-bold">Tipo Imovel</th>
            <th class="fonte14 espaco-letra fw-bold">Finalidade </th>
            <th class="fonte14 espaco-letra fw-bold">Proprietario </th>
            <th class="fonte14 espaco-letra fw-bold">Contato </th>
            <th class="fonte14 espaco-letra fw-bold">Ativo </th>
            <th class="fonte14 espaco-letra fw-bold">Açoes</th>
        </tr>
    </thead>
    <tbody>

        <?php
        // var_dump($imovel);
        if (isset($imovel) && count($imovel) > 0):
            foreach ($imovel as  $valores):
        ?>
                <tr class=" zebra">
                    <td class="fonte14 espaco-letra fw-300 txt-c"><?= $valores->CODIGO; ?></td>
                    <td class="fonte14 espaco-letra fw-300 txt-c">R$ <?= $formater->converterMoeda($valores->VALOR); ?></td>
                    <td class="fonte14 espaco-letra fw-300 txt-c"> <?= $formater->formataTextoCap($valores->LOGRADOURO); ?></td>
                    <td class="fonte14 espaco-letra fw-300 txt-c"> <?= $formater->formataTextoCap($valores->BAIRRO); ?></td>
                    <td class="fonte14 espaco-letra fw-300 txt-c"> <?= $formater->formataTextoCap($valores->CIDADE); ?></td>
                    <!-- TIPO IMOVEL -->
                    <?php if (isset($tipoimovel)):
                        foreach ($tipoimovel as $valor):
                            if ($valores->TIPOIMOVEL == $valor->ID):
                    ?>
                                <td class="fonte14 espaco-letra fw-300 txt-c"> <?= $formater->formataTextoCap($valor->DESCRICAO); ?></td>

                    <?php endif;
                        endforeach;
                    endif; ?>
                    <!-- FINALIDADE -->
                    <?php if (isset($finalidade)):
                        foreach ($finalidade as $valor):
                            if ($valores->FINALIDADE == $valor->ID):
                    ?>
                                <td class="fonte14 espaco-letra fw-300 txt-c"> <?= $formater->formataTextoCap($valor->DESCRICAO); ?></td>

                    <?php endif;
                        endforeach;
                    endif; ?>
                    <!-- PROPRIETARIO -->
                    <?php if (isset($proprietario)):
                        foreach ($proprietario as $valor):
                            if ($valores->PROPRIETARIO == $valor->ID):
                    ?>
                                <td class="fonte14 espaco-letra fw-300 txt-c"> <?= $formater->formataTextoCap($valor->NOME); ?></td>
                                <td class="fonte14 espaco-letra fw-300 txt-c"> <?= $valor->CONTATO; ?></td>

                    <?php endif;
                        endforeach;
                    endif; ?>



                    <td class=" txt-c">
                        <?php if ($valores->ESTATUS == '1'): ?>
                            <span class="ativo" data-id="<?= $valores->ID; ?>" data-status="0" data-url="index.php?controller=ImovelController&metodo=alterarStatus">
                                <i class="fa-solid fa-lock-open fonte16 fnc-sucesso"></i>
                            </span>
                        <?php else: ?>
                            <span class="ativo" data-id="<?= $valores->ID; ?>" data-status="1" data-url="index.php?controller=ImovelController&metodo=alterarStatus">
                                <i class="fa-solid fa-lock fonte16 fnc-error"></i>
                            </span>

                        <?php endif; ?>
                    </td>

                    <td class="flex justify-around item-centro">

                        <a href="index.php?controller=ImovelController&metodo=deleteConfirm&id=<?= $valores->ID; ?>">
                            <i class="fa-solid fa-trash-can fonte14 fnc-cinza"></i>
                        </a>

                        <a href="index.php?controller=ImovelController&metodo=index&id=<?= $valores->ID; ?>">
                            <i class="fa-solid fa-pen fonte14 fnc-vermelho-claro "></i>
                        </a>

                    </td>
                </tr>
            <?php endforeach;
        else: ?>
            <tr>
                <td colspan="10" class="pd-t-2">
                    <h1 class="txt-c fonte16 poppins-medium fnc-error"> Nenhum registro na base de dados </h1>
                </td>

            </tr>

        <?php endif; ?>


    </tbody>
    <tfoot>

    </tfoot>
</table>