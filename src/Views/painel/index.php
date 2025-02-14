<?php
require_once "Views/shared/header.php";

// if (empty($_SESSION) && !isset($_SESSION['logado'])):
//     header("location:index.php");
// endif;

?>
<section class="painel">
    <div class="container-100">
        <!-- criando o mennu de navegação -->
        <div class="box-2 bg-preto-azulado-escuro hg-full">
            <div class="saudacao bg-branco pd-20 mg-b-4">
                <span class="fonte14">
                    <i class="fa-solid fa-handshake fnc-preto-azulado fonte16 mg-r-1"></i>
                    Seja bem vindo Usuario!</span>
            </div>
            <ul class="pd-10">
                <li class="mg-b-2 pd-b-1"> <a href="index.php?controller=ProprietarioController&metodo=listar" class="fonte14 fnc-cinza">
                        <i class="fa-solid fa-user-tie fonte18 mg-r-1"></i> Proprietario
                    </a>
                </li>
                <li class="mg-b-2 pd-b-1"> <a href="index.php?controller=ImovelController&metodo=listar" class="fonte14 fnc-cinza">
                        <i class="fa-solid fa-city fonte18 mg-r-1"></i> Imovel
                    </a>
                </li>
                <li class="mg-b-2 pd-b-1">
                    <a href="index.php?controller=UsuarioController&metodo=listar" class="fonte14 fnc-cinza">
                        <i class="fa-solid fa-user fonte18 mg-r-1"></i> Usuário
                    </a>
                </li>
                <li class="mg-b-2 pd-b-1"> <a href="index.php?controller=UsuarioController&metodo=logout" class="fonte14 fnc-cinza">
                        <i class="fa-solid fa-right-from-bracket fonte18 mg-r-1"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
        <!-- fimde menu de navegação -->
        <section class="carregamento">
            <div class="box-10 bg-branco pd-b-4">
                <div class="box-12">
                    <ul class="wd-100 mg-t-1 flex justify-end">
                        <li class="mg-r-1">

                            <i class="fa-solid fa-house fonte20 fnc-preto-azulado mg-r-1"></i>
                            <a href="index.php?controller=PainelController&metodo=index" class="fonte14 fnc-preto-azulado">
                                Home Painel
                            </a>
                        </li>
                    </ul>
                    <div class="divider mg-t-1 mg-b-2"></div>
                </div>


                <?php
                if ($controller == 'painel' && $metodo == 'index'):

                    if (isset($mensagens) && count($mensagens) > 0):
                        $totaMsg = count($mensagens);
                ?>
                        <div class="box-12 flex justify-end">
                            <div class="total-msg flex justify-center item-centro">
                                <span class=" fnc-vermelho"><?= $totaMsg; ?> </span>
                            </div>
                            <div class="icon-msg">
                                <i class="fa-solid fa-envelope fonte28 fnc-vermelho" onclick="exibirMensagem()"></i>
                            </div>
                        </div>
                        <!-- listando as mensagens do banco de dados -->
                        <div id="blocoMensagens" class="box-12 mod borda-light shadow-down mg-b-2 pd-20 radius">
                            <div class="box-12 mg-b-1">
                                <a href="index.php?controller=PainelController&metodo=index" class="block txt-c">
                                    <i class="fa-solid fa-circle-xmark fonte30 fnc-preto-azulado-claro"></i>
                                </a>
                            </div>
                            <?php foreach ($mensagens as $mensagem): ?>
                                <div class="box-12 shadow-down mg-b-2 pd-20 radius bg-cinza-claro">


                                    <h1 class="fonte12 poppins-medium fnc-preto-azulado-claro fw-300">
                                        <b>Data Mensagem:</b>
                                        <?= $formater->formatarDataTime($mensagem->DATAMENSAGEM); ?>
                                    </h1>
                                    <p class="fonte12 poppins-medium fnc-preto-azulado-claro fw-300">
                                        <b>Nome Completo:</b>
                                        <?= $formater->formataTextoCap($mensagem->NOME);
                                        $mensagem->SOBRENOME; ?>
                                    </p>
                                    <p class="fonte12 poppins-medium fnc-preto-azulado-claro fw-300">
                                        <b>Email:</b>
                                        <?= $formater->formataTextoCap($mensagem->EMAIL); ?>
                                    </p>
                                    <p class="mg-b-1 fonte12 poppins-medium fnc-preto-azulado-claro fw-300">
                                        <b>Interesse:</b>
                                        <?= $formater->formataTextoCap($mensagem->INTERESSE); ?>
                                    </p>
                                    <p class="msg-cli pd-10 block fonte12 poppins-medium fnc-preto-azulado-claro fw-300 overflow-scroll">
                                        <b>Mensagem:</b><br>
                                        <?= $formater->formataTextoCap($mensagem->MENSAGEM); ?>
                                    </p>
                                    <span class="ativo block mg-t-1" data-id="<?= $mensagem->ID; ?>" data-status="0" data-url="index.php?controller=PainelController&metodo=alterarStatus">
                                      <!-- <i class="fa-solid fa-lock-open fonte16 fnc-sucesso"></i> -->
                                      <i class="fa-solid fa-circle-check fonte26 fnc-error"></i>
                                    </span>

                                </div>

                        <?php endforeach;
                        endif; ?>
                        </div>
                    <?php else:
                    require_once "Views/" . $controller . "/" . $metodo . ".php";
                    ?>

                    <?php endif; ?>
            </div>
        </section>

    </div>
</section>
<?php
require_once "Views/shared/footer.php";
?>