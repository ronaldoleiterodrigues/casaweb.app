<?php
use App\Configurations\Formater;
$formater = new Formater();

if ($_GET) {
    $controller = strtolower(str_replace("Controller", "", $_GET['controller']));
    $metodo = strtolower($_GET['metodo']);    
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa Web - imobiliaria online</title>
    <!-- carregando arquivos java scripts -->
    <script type="text/javascript" src="lib/js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="lib/js/animacoes.js"></script>
    <script type="text/javascript" src="lib/js/ajax.js"></script>

    <!-- carregando fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- carregANDO FONTES EXTERNAS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- CARREGANDO CSS -->
    <link rel="stylesheet" href="lib/css/aurora.css">
    <link rel="stylesheet" href="lib/css/site.css">

</head>

<body>
    <header class="header bg-preto-azulado-escuro hg-80 wd-100 pd-t-2">
        <div class="container">
            <div class="box-6 flex justify-start item-centro">
                <a href="index.php">
                    <h1 class=" fonte36 fnc-branco fw-bold roboto-condensed">CasaWeb <span class="fonte22 fw-300"> - Imobiliaria</span> </h1>
                </a>

                <i class="fa-brands fa-facebook-f  fonte22 fnc-branco mg-r-3 mg-l-3"></i>
                <i class="fa-brands fa-linkedin-in fonte22 fnc-branco mg-r-3"></i>
                <i class="fa-brands fa-youtube     fonte22 fnc-branco mg-r-3"></i>

            </div>
            <!-- criando menu de navegação -->
            <div class="box-6">
                <nav class="wd-100 mg-t-1">
                    <ul class="flex justify-end">
                        <li class="mg-l-3"> <a href="#inicio" class="fnc-branco fnc-vermelho-hover espaco-letra fonte16 captalize">inicio </a> </li>
                        <li class="mg-l-3"> <a href="#comprar" class="fnc-branco fnc-vermelho-hover espaco-letra fonte16 captalize">Camprar </a> </li>
                        <li class="mg-l-3"> <a href="#alugar" class="fnc-branco fnc-vermelho-hover espaco-letra fonte16 captalize">Alugar </a> </li>
                        <li class="mg-l-3"> <a href="#depoimentos" class="fnc-branco fnc-vermelho-hover espaco-letra fonte16 captalize">depoimentos </a> </li>
                        <li class="mg-l-3"> <a href="#contato" class="fnc-branco fnc-vermelho-hover espaco-letra fonte16 captalize">Contato </a> </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="limpar"></div>
        <div class="barra bg-vermelho"></div>
    </header>
    <div class="limpar"></div>
    <div class="esconde"></div>