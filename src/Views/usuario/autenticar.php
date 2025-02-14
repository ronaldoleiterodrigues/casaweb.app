<?php require_once "Views/shared/header.php";?>

<section class="login">
     <div class="container">
        <div class="box-12 mg-t-6 flex justify-center">
            <div class="box-8 shadow-down login">
                <div class="box-4 radius-start pd-50 esq flex justify-center item-centro flex-colum bg-preto-azulado-claro">
                       <h2 class="fw-300 espaco-letra fonte20 fnc-branco">Acesse o sistema com seu usuario e senha</h2>
                       <h1 class="txt-c mg-t-6 fonte28 fnc-vermelho fw-bold roboto-condensed">CasaWeb <span class="fonte22 fw-300"><br> Imobiliaria</span> </h1>
                </div>
                <div class="box-8 dir">
                     <form action="" class="pd-t-4" method="POST">

                        <label class="fnc-preto-azulado " for="">Usuario</label>
                        <input type="text" name="usuario" class="mg-b-20" required/>

                        <label class="fnc-preto-azulado " for="">Senha</label>
                        <input type="password" name="senha" class="mg-b-20" required>

                        <input type="submit" value="Acessar" class="btn bg-vermelho fnc-branco">    
                                        
                    </form>
                </div>
            </div>
        </divbox-12>
     </div>

</section>