<?php require_once "Views/shared/header.php"; ?>
<section class="painel">
    <div class="container-100">
        <!-- criando omennu de navegação -->
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
                <li class="mg-b-2 pd-b-1"> <a href="" class="fonte14 fnc-cinza">
                        <i class="fa-solid fa-city fonte18 mg-r-1"></i> Imovel
                    </a>
                </li>
                <li class="mg-b-2 pd-b-1"> 
                    <a href="index.php?controller=UsuarioController&metodo=listar" class="fonte14 fnc-cinza">
                        <i class="fa-solid fa-user fonte18 mg-r-1"></i> Usuário
                    </a>
                </li>
                <li class="mg-b-2 pd-b-1"> <a href="" class="fonte14 fnc-cinza">
                        <i class="fa-solid fa-right-from-bracket fonte18 mg-r-1"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
        <!-- fimde menu de navegação -->
        <section class="carregamento">
            <div class="box-10 bg-branco pd-b-4">

                <ul class="wd-100 mg-t-1 flex justify-end">
                    <li class="mg-r-1">
                        <i class="fa-solid fa-house fonte20 fnc-preto-azulado mg-r-1"></i>
                        <a href="index.php?controller=PainelController&metodo=index" class="fonte14 fnc-preto-azulado">Home Painel </a>
                    </li>
                </ul>
                <div class="divider mg-t-1 mg-b-2"></div>
                <?php
                if ($controller == 'Painel' && $_metodo == 'index'): ?>

                <?php else:
                    require_once "Views/" . $controller . "/" . $metodo . ".php";
                endif; ?>
            </div>
        </section>

    </div>
</section>
<?php 
require_once "Views/shared/footer.php";
?>
