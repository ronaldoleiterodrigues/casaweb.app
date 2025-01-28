<?php require_once 'Views/shared/header.php'; ?>
<section class="baner" id="inicio">
    <div class="mascara">
        <div class="container">
            <div class="box-12 mg-t-10">
                <h2 class="fonte60 espaco-letra txt-c fnc-branco mg-t-4">Sua casa a um clique!</h2>
                <span class="block txt-c fnc-branco uppercase fonte30 fw-300">oportunidade casa web</span>
                <a href="index.php?controller=PainelController&metodo=index" class="btn bg-vermelho fnc-branco mg-auto mg-t-4 bg-vermelho-claro-hover">saiba mais</a>
            </div>
        </div>

    </div>
</section>
<div class="limpar"></div>
<!-- sessão de conquista -->
<section class="conquista mg-t-8">
    <div class="container">
        <h3 class="fonte22 espaco-letra fnc-preto-azulado fw-300 uppercase txt-c mg-b-4">O que você quer conquistar?</h3>
        <div class="box-12 flex justify-center pd-t-2">

            <div class="comprar">
                <div class="fundo flex justify-center item-centro">
                    <a href="">
                        <h3 class="fonte68 espaco-letra fw-900 fnc-branco captalize fnc-vermelho-claro-hover">comprar</h3>

                    </a>
                </div>
            </div>

            <div class="alugar">
                <div class="fundoa flex justify-center item-centro">
                    <a href="">
                        <h3 class="fonte68 espaco-letra fw-900 fnc-branco captalize fnc-preto-azulado-hover">alugar</h3>

                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="limpar"></div>
<!-- carregando imoveis disponiveis para compra -->
<section class="produtos" id="comprar">
    <div class="container">
        <div class="box-12 mg-t-8">
            <h3 class="fonte22 fnc-preto-azulado fw-300 espaco-letra uppercase txt-c mg-b-4">Novas oportunidades</h3>
            <h4 class="fonte46 fnc-preto-azulado  espaco-letra uppercase txt-c mg-b-4">Comprar</h4>
        </div>

        <div class="box-12 flex justify-center mg-t-2">

            <div class="box-4 shadow-down pd-b-2">
                <!-- carregar imagem do imovel -->
                <div class="box-12">
                    <img src="lib/img/imagens/casa6.jpg" alt="">
                </div>
                <!-- carregar endereço do imovel -->
                <div class="box-12">
                    <p class="pd-l-2 mg-t-2 fonte28 fw-bold roboto-condensed captalize espaco-letra fnc-preto-azulado fnc-vermelho-hover">
                        rua dos cravos, 233
                    </p>
                    <span class="fonte24 fw-300 pd-l-2 mg-t-1">São Paulo, SP </span>
                </div>
                <!-- carregar valor do imovel -->
                <div class="box-12 pd-20">
                    <p class=" pd-l-2 mg-t-2 fonte22 fw-400 roboto-condensed  fnc-preto-azulado">
                        R$ 225.000,00
                    </p>
                    <div class="divider mg-t-2"></div>
                </div>
                <!-- carregar detalhes do imovel -->
                <div class="box-12 mg-t-2">
                    <div class="box-3 txt-c"> <i class="fa-solid fa-bed fnc-cinza fonte24"></i> <br> Quartos </div>
                    <div class="box-3 txt-c"> <i class="fa-solid fa-bath fnc-cinza fonte24"></i> <br> Banheiros </div>
                    <div class="box-3 txt-c" title="metros quadrados total do imovel"> <i class="fa-regular fa-square fnc-cinza fonte24"></i><br> M2 </div>
                    <div class="box-3 txt-c" title="metros quadrados construidos"> <i class="fa-solid fa-square-minus fnc-cinza fonte24"></i><br> M2 const </div>
                </div>
                <div class="box-12 mg-t-2">
                    <div class="box-3 txt-c fonte16"> 4 </div>
                    <div class="box-3 txt-c fonte16"> 3 </div>
                    <div class="box-3 txt-c fonte16"> 580 </div>
                    <div class="box-3 txt-c fonte16"> 300 </div>
                </div>


            </div>

        </div>

    </div>

</section>
<div class="limpar"></div>

<div class="container">
    <div class="divider mg-t-8"></div>
</div>

<!-- carregando imoveis disponiveis para locação -->
<section class="produtos" id="alugar">
    <div class="container">
        <div class="box-12 mg-t-8">
            <h3 class="fonte22 fnc-preto-azulado fw-300 espaco-letra uppercase txt-c mg-b-4">Novas oportunidades</h3>
            <h4 class="fonte46 fnc-preto-azulado  espaco-letra uppercase txt-c mg-b-4">Alugar</h4>
        </div>

        <div class="box-12 flex justify-center mg-t-2">

            <div class="box-4 shadow-down pd-b-2">
                <!-- carregar imagem do imovel -->
                <div class="box-12">
                    <img src="lib/img/imagens/casa6.jpg" alt="">
                </div>
                <!-- carregar endereço do imovel -->
                <div class="box-12">
                    <p class="pd-l-2 mg-t-2 fonte28 fw-bold roboto-condensed captalize espaco-letra fnc-preto-azulado fnc-vermelho-hover">
                        rua dos cravos, 233
                    </p>
                    <span class="fonte24 fw-300 pd-l-2 mg-t-1">São Paulo, SP </span>
                </div>
                <!-- carregar valor do imovel -->
                <div class="box-12 pd-20">
                    <p class=" pd-l-2 mg-t-2 fonte22 fw-400 roboto-condensed  fnc-preto-azulado">
                        R$ 225.000,00
                    </p>
                    <div class="divider mg-t-2"></div>
                </div>
                <!-- carregar detalhes do imovel -->
                <div class="box-12 mg-t-2">
                    <div class="box-3 txt-c"> <i class="fa-solid fa-bed fnc-cinza fonte24"></i> <br> Quartos </div>
                    <div class="box-3 txt-c"> <i class="fa-solid fa-bath fnc-cinza fonte24"></i> <br> Banheiros </div>
                    <div class="box-3 txt-c" title="metros quadrados total do imovel"> <i class="fa-regular fa-square fnc-cinza fonte24"></i><br> M2 </div>
                    <div class="box-3 txt-c" title="metros quadrados construidos"> <i class="fa-solid fa-square-minus fnc-cinza fonte24"></i><br> M2 const </div>
                </div>
                <div class="box-12 mg-t-2">
                    <div class="box-3 txt-c fonte16"> 4 </div>
                    <div class="box-3 txt-c fonte16"> 3 </div>
                    <div class="box-3 txt-c fonte16"> 580 </div>
                    <div class="box-3 txt-c fonte16"> 300 </div>
                </div>


            </div>

        </div>
    </div>
</section>
<div class="limpar"></div>
<!-- carrega a sessão de depoimentos dos clientes -->
<section class="depoimentos mg-t-10" id="depoimentos">
    <div class="container">
        <h3 class="fonte40 fnc-preto-azulado fw-300 espaco-letra uppercase txt-c mg-b-2">Veja o que nossos clientes estão dizendo</h3>
        <div class="box-12 bg-preto-azulado-escuro flex justify-center item-centro pd-40">
            <div class="carousel">
                <div class="slaides">
                    <!-- slaide 1 -->
                    <div class="slaide">
                        <p class="box-4 fonte16 fnc-branco txt-c ">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                        </p>
                        <cite class="fonte22 fnc-vermelho fw-600">Fulano de tal, São Paulo </cite>
                    </div>

                    <!-- slaide 2 -->
                    <div class="slaide">
                        <p class="box-4 fonte16 fnc-branco txt-c ">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                        </p>
                        <cite class="fonte22 fnc-vermelho fw-600">Ciclano da silva de tal, Rio de Janeiro </cite>
                    </div>

                    <!-- slaide 3 -->
                    <div class="slaide">
                        <p class="box-4 fonte16 fnc-branco txt-c ">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                        </p>
                        <cite class="fonte22 fnc-vermelho fw-600">Beltrano da Costa, Porto Alegre </cite>
                    </div>

                    <!-- slaide 4 -->
                    <div class="slaide">
                        <p class="box-4 fonte16 fnc-branco txt-c ">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                        </p>
                        <cite class="fonte22 fnc-vermelho fw-600">José de tal, Brasilia </cite>
                    </div>

                </div>
                <button class="prev"> &#10094; </button>
                <button class="next"> &#10095; </button>

            </div>
        </div>
    </div>
</section>
<div class="limpar"></div>
<section class="paralax">
    <div class="container">
        <div class="box-12 hg-40 pd-40 bg-preto-azulado-escuro"></div>
    </div>
</section>
<div class="limpar"></div>
<!-- sessão se contato -->
<section class="contato mg-t-8" id="contato">
    <div class="container">
        <div class="box-12 mg-b-6">
            <h3 class="fonte22 fnc-preto-azulado fw-300 espaco-letra uppercase txt-c mg-b-2">o imovel que você procura esta aqui!</h3>
        </div>

        <div class="box-12 flex justify-center item-centro mg-t-4">

            <div class="box-3 txt-c">
                <i class="fa-solid fa-phone fonte56 fnc-vermelho"></i><br><br>
                <span class="fonte26 espaco-letra fnc-preto-azulado fw-900">Telefone</span>
                <p class="fonte16 espaco-letra fw-400 mg-t-2">
                    ligue gratuitamente <br>
                    0800 000-0000
                </p>
            </div>

            <div class="box-3 txt-c">
                <i class="fa-solid fa-location-dot fonte56 fnc-vermelho"></i><br><br>
                <span class="fonte26 espaco-letra fnc-preto-azulado fw-900">localização</span>
                <p class="fonte16 espaco-letra fw-400 mg-t-2">
                    Rua: devs, 7070 - centro<br>
                    São Paulo - sp
                </p>
            </div>

            <div class="box-3 txt-c">
                <i class="fa-solid fa-envelope fonte56 fnc-vermelho"></i> <br><br>
                <span class="fonte26 espaco-letra fnc-preto-azulado fw-900">Email</span>
                <p class="fonte16 espaco-letra fw-400 mg-t-2">
                    Contate-nos via e-mail<br>
                    contato.casaweb@casaweb.com
                </p>
            </div>

        </div>
    </div>
</section>
<div class="limpar"></div>
<!-- carregando o formulario de contato -->
<section class="contato-form bg-preto-azulado-claro mg-t-8 pd-t-10 pd-b-8">
    <div class="container">
        <div class="box-6">
            <div class="box-6">
                <h3 class="fnc-branco fonte22  fw-300 espaco-letra uppercase txt-c mg-b-4">seu imovel a um clique!</h3>
                <p class="fonte16 fnc-branco espaco-letra txt-c lh-24">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                </p>
            </div>
        </div>
        <!-- formulario de contato -->
        <div class="box-6">
            <h3 class="fnc-branco fonte22  fw-300 espaco-letra uppercase txt-c mg-b-8">contato</h3>
            <form action="" method="POST" class="fonte14 fnc-branco">

                <div class="box-6">
                    <label for="">Nome</label>
                    <input type="text" name="nome">
                </div>

                <div class="box-6">
                    <label for="">Sobre-nome</label>
                    <input type="text" name="sobrenome">
                </div>

                <div class="box-12">
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>

                <div class="box-12 flex justify-start">
                    <div class="box-3 flex justify-start"> <label for="" >Interesse</label> </div>
                    <div class="box-4 flex justify-start"> <span>Comprar</span> <input type="radio" name="interesse"> </div>
                    <div class="box-4 flex justify-start"> <span>Alugar</span> <input type="radio" name="interesse"> </div>               
                    
                </div>

                <div class="box-12">
                    <label for="">Mensagem:</label>
                    <textarea name="" id="" class="fnc-branco mg-t-3"></textarea>

                </div>

                <div class="box-12">
                    <input type="submit" class="btn bg-vermelho fnc-branco fonte20">
                </div>

            </form>
        </div>
    </div>
</section>









<?php
require_once 'Views/shared/footer.php';
?>