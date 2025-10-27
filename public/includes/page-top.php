<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="./css/default.css" rel="stylesheet"/>
        <title>Larika</title>
    </head>

    <body>

        <!-- BARRA DE NAVEGAÇÃO -->
        <!-- navbar é a classe principal que define o elemento como uma barra de navegação -->
        <!-- navbar-expand-lg controla o comportamento responsivo da barra de navegação. 
            navbar-expand indica em qual breakpoint a barra de navegação deve expandir e 
            -lg define o breakpoint como large/grande telas grandes igual ou acima de 992px
        -->
        <!-- navbar-light define o esquema de cores do texto de links para melhor visualização -->
        <nav class="navbar navbar-expand-lg navbar-light">

            <!-- container-fluid cria um container que ocupa toda a viewport (área disponível da tela) -->
            <div class="container-fluid">

                <!-- navbar-brand aplica configurações de estilo para destacar a logo e nome do site e também um espaçamento interno (padding) -->
                <a class="navbar-brand" href="#">
                    <img src="./img/ham-ico-64.png" alt="" width="32" height="32">
                    Larika
                </a>

                <!-- BOTÃO DE MENU COLAPSÁVEL (PARA TELAS MENORES) -->
                <!-- navbar-toggler aplica o estilo do botão para aparecer em telas menores para controlar a exibição
                    do conteúdo que fica escondido, os itens da barra de navegação, conhecido como botão hamburguer
                -->
                <!-- Os atributos data-bs-toggle e data-bs-target são atributos Javascrpit do Bootstrap -->
                <!-- O data-bs-toggle fala pro Bootstrap que esse botão deve controlar um componente que deve ser recolhido ou expandido, o menu -->
                <!-- Já o data-bs-target especifica qual elemento o botão vai controlar e por isso, o valor que definimos nele,
                    no caso #navbarMain atua como um seletor CSS que aponta pro elemento que tem o id navbarMain que está na nossa <div> itens de navegação
                -->
                
                <!-- O atributo aria-expanded define como está o menu, escondido ou visível (false ou true) iniciamos com false
                    e o Javascript do Bootstrap automaticamente alterna para true quando o usuário clica no botão (também é um recurso para leitores de tela)
                -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" 
                aria-controls="navbarMain" aria-expanded="false">

                    <!-- A class navbar-toggler-icon é o ícone do nosso botão hamburguer -->
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- ITENS DE NAVEGAÇÃO -->
                <!-- collapse é classe que oculta os elementos da div e quando o botão é clicado o Javascript adiciona 
                    ou remove a classe show para exibir ou esconder o conteúdo  
                -->
                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Home Page</a>
                        </li>

                        <!-- MENU DROPDOWN DO CARDAPIO -->
                        <!-- nav-item define que esse elemento é um item da nossa barra de navegação -->
                        <!-- e o dropdown define que esse elemento é um dropdown -->
                        <li class="nav-item dropdown">

                            <!-- dropdown-toggle adiciona um botão ao final do texto para indicar que se trata de um menu dropdown -->
                            <a class="nav-link dropdown-toggle" href="#" id="menuLink" role="button" 
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Cardapio
                            </a>

                            <!-- dropdown-menu define que essa lista será o menu do nosso dropdown -->
                            <ul class="dropdown-menu" aria-labelledby="menuLink">
                                <li>
                                    <a class="dropdown-item" href="./cardapio.php?type=hamburger">Hamburguer</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./cardapio.php?type=hot-dog">Hot Dog</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./cardapio.php?type=potato">Batatas Recheadas</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./cardapio.php?type=snack">Porções</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./cardapio.php?type=drinks">Bebidas</a>
                                </li>
                            </ul>

                        </li>

                    </ul>
                </div>

            </div>
        </nav>