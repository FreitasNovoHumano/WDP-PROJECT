<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Projeto do Curso / Webdesing em Produção / UpInside Treinamentos">
        <meta name="keywords" content="HTML5, CSS3, jQuery, PHP, JavaScript">
        <meta name="author" content="Fábio Freitas">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WdpShoes | Home</title>

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800" rel="stylesheet">        
        <link rel="stylesheet" href="Assets/Styles/Icons.css">
        <link href="https://file.myfontastic.com/qShUdJgqPRE8Ye3MQiqNuP/icons.css" rel="stylesheet">        
        <link rel="stylesheet" href="Assets/Styles/Boot.css">
        <link rel="stylesheet" href="Themes/WdpShoes/Style.css"><!-- ESTILO DO THEMA -->
        <link rel="shortcut icon" href="Themes/WdpShoes/Images/favicon.png">
    </head>
    <body>
        <header class="main_header">
            <div class="container"><!-- CONTROLA LAYOUT E CONTEÚDO -->
                <div class="main_header_nav">
                    <div class="main_header_nav_log">
                        <a href="" title="WdpShoes | Home">
                            <img alt="" title="" src="Themes/WdpShoes/Images/wdpshoes_logo_white.png" />
                        </a>
                    </div>
                    <div class="main_header_nav_search">
                        <form action="" method="post" class="radius">
                            <input type="text" name="S" placeholder="Pesquisar na WdpShoes:"/>
                            <button class="icon-search icon-notext transition"></button>
                        </form>
                    </div>
                    <div class="main_header_nav_menu">
                        <a href="#" class="icon-cart icon-notext transition main_header_nav_menu_cart"><span>3</span></a><!-- ICON-NOTEXT. VAI MOSTRAR SOMENTE O CARRINHO DE COMPRAS -->
                        <div class="main_header_nav_menu_user">
                            <a href="#" title="" class="icon-user main_header_nav_menu_user_a radius transition">Minha Conta</a>
                            <nav class="radius">
                                <a href="#" title="">Meus pedidos</a>
                                <a href="#" title="">Meus dados</a>
                                <a href="#" title="">Meus endereços</a>
                                <a href="#" title="">Sair</a>
                            </nav>
                        </div>
                    </div>
                </div>
                
                <!-- LOOP DE PHP CRIANDO UM E REPLICANDO. SE MEXER EM UM ALTERA TODOS OS DEPARTAMENTOS  -->
                <ul class="main_header_departments">
                    <?php
                    for ($i = 1; $i < 6; $i++) {
                        ?>
                        <li class="main_header_departments_li">Departamento <?= $i; ?>
                            <ul class="main_header_departments_li_ul">
                                <?php
                                for ($ii = 1; $ii < 6; $ii++) {
                                    ?>
                                    <li class="main_header_departments_li_ul_li"><a title="" href="#">Categoria <?= "{$i}/{$ii}"; ?></a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </header>
        <main class="main_content">
            <h1>Olá Mundo! #BoraProgramar</h1>
        </main>
        <footer class="main_footer"></footer>
    </body>
</html>
