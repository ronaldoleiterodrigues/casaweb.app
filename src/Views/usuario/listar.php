<div class="wd-100">
    <div class="box-8">
        <h2><i class="fa-solid fa-user fonte30 mg-r-1"></i>Usuario</h2>
    </div>
    <div class="box-4 flex justify-center item-centro">
        <div class="radius-start wd-30 bg-azul-escuro pd-10 fnc-branco fonte16"><i class="fa-solid fa-plus"></i></div>
        <div class="radius-end wd-60 bg-azul pd-10 fnc-branco fonte16">
            <a href="index.php?controller=UsuarioController&metodo=index" class="fnc-branco">Novo Cadastro</a>
        </div>
    </div>

</div>
<div class="limpar"></div>
<table class="grid wd-100 mg-t-8">
    <thead>
        <tr>
            <th class="fonte14 espaco-letra fw-bold">Data Cadastro</th>
            <th class="fonte14 espaco-letra fw-bold">Nome</th>
            <th class="fonte14 espaco-letra fw-bold">Usuario</th>
            <th class="fonte14 espaco-letra fw-bold">Email</th>
            <th class="fonte14 espaco-letra fw-bold">Perfil</th>
            <th class="fonte14 espaco-letra fw-bold">Status</th>
            <th class="fonte14 espaco-letra fw-bold">Açoes</th>
        </tr>
    </thead>
    <tbody>

        <?php
        #var_dump($proprietario);
        if (isset($usuario) && count($usuario) > 0):
            foreach ($usuario as  $valores):
        ?>
                <tr class=" zebra">
                    <td class="fonte14 espaco-letra fw-300 txt-c"><?= $valores->DATACADASTRO; ?></td>
                    <td class="fonte14 espaco-letra fw-300 txt-c"><?= $valores->NOME; ?></td>
                    <td class="fonte14 espaco-letra fw-300 txt-c"> <?= $valores->USUARIO; ?></td>
                    <td class="fonte14 espaco-letra fw-300 txt-c"> <?= $valores->EMAIL; ?></td>
                    <td class="fonte14 espaco-letra fw-300 txt-c"><?php if ($valores->PERFIL == '1'): echo 'ADMINISTRADOR';
                                                                    else: echo 'USUARIO';
                                                                    endif; ?></td>
                    <td class=" txt-c">
                        <?php if ($valores->ATIVO == '1'): ?>
                            <span class="ativo" data-id="<?= $valores->ID; ?>" data-status="0" data-url="index.php?controller=UsuarioController&metodo=alterarStatus">
                                <i class="fa-solid fa-lock-open fonte16 fnc-sucesso"></i>
                            </span>
                        <?php else: ?>
                            <span class="ativo" data-id="<?= $valores->ID; ?>" data-status="1" data-url="index.php?controller=UsuarioController&metodo=alterarStatus">
                                <i class="fa-solid fa-lock fonte16 fnc-error"></i>
                            </span>

                        <?php endif; ?>
                    </td>
                    <td class="flex justify-center item-centro">
                        <a href="index.php?controller=UsuarioController&metodo=deleteConfirm&id=<?= $valores->ID; ?>">
                            <i class="fa-solid fa-trash-can fonte14 mg-r-2 fnc-cinza"></i>
                        </a>
                        <a href="index.php?controller=UsuarioController&metodo=index&id=<?= $valores->ID; ?>">
                            <i class="fa-solid fa-pen fonte14 fnc-vermelho-claro "></i>
                        </a>

                    </td>
                </tr>
            <?php endforeach;
        else: ?>
           <td colspan="7" class="pd-t-2"> 
           <h1 class="txt-c fonte16 poppins-medium"> Nenhum registro na base de dados </h1>
           </td>
        <?php endif; ?>


    </tbody>
    <tfoot>

    </tfoot>
</table>

<script>
    $(function () {
    $('.user-ativo').click(function (e) {
        let ativo = $(this).data('status'); // Obtém o valor do atributo rel
        let id = $(this).data('id'); // Obtém o ID do atributo data-id
        let UrlBase = $(this).data('url');
        // alert(UrlBase+'&id='+id+'&ativo='+ativo)

        $.ajax({
            type: "get",
            url: UrlBase + '&id=' + id + '&ativo=' + ativo,
            success: function () {
                location.reload(); // Recarrega a página após sucesso
            }
        });
    });
});
</script>