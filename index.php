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
            <div class="main_content_slide j_slide"><!<!-- CLASS J_SLIDE É PARA UTILIZAR NO JQUERY -->
               <!-- <a class="j_slide_item" href="#" title=""><img src="Uploads/featured-01.jpg" alt="" title=""/></a> -->
                <a class="j_slide_item" href="#" title=""><img src="Uploads/featured-02.jpg" alt="" title=""/></a>
               <!-- <a class="j_slide_item" href="#" title=""><img src="Uploads/featured-03.jpg" alt="" title=""/></a> -->
                <div class="j_slide_nav"></div>

            </div>
            <section class="pdt_gallery">
                <div class="container">
                    <header class="main_content_header">
                        <h1 class="main_content_header_title">Oferta da semana:</h1>
                    </header>
                    
                    <div class="flex">
                        <div class="pdt_gallery_list pdt_gallery_featured">
                            <article class="pdt_gallery_item flex-2"> <!-- FLEX-2 SIGNIFICA 2 LINHAS COM 2 ELEMENTOS -->
                                <a href="#" title=""><img alt="" title="" src="Uploads/products/06.jpg"/></a>
                                <header class="pdt_gallery_item_desc">
                                    <h2 class="pdt_gallery_item_desc_title"><a class="transition" href="#" title="Calça Moletom Cofort Mama Latina">Calça Moletom Cofort Mama Latina</a></h2>
                                    <div class="pdt_gallery_item_desc_price">
                                        <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                    </div>
                                    <p>2x R$ 29,95</p>
                                </header>                                
                            </article>                            
                        </div>
                        <div class="pdt_gallery_list flex">
                            <?php
                            $pdt = 0;
                            for ($pdt = 1; $pdt < 5; $pdt++){                            
                            ?>
                            <article class="pdt_gallery_item flex-2"> <!-- FLEX-2 SIGNIFICA 2 LINHAS COM 2 ELEMENTOS -->
                                <a href="#" title=""><img alt="" title="" src="Uploads/products/<?= str_pad($pdt, 2, 0, STR_PAD_LEFT); ?>.jpg"/></a>
                                <header class="pdt_gallery_item_desc">
                                    <h2 class="pdt_gallery_item_desc_title"><a class="transition" href="#" title="Calça Moletom Cofort Mama Latina">Calça Moletom Cofort Mama Latina</a></h2>
                                    <div class="pdt_gallery_item_desc_price">
                                        <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                    </div>
                                    <p>2x R$ 29,95</p>
                                </header>                                
                            </article>
                            
                            <?php
                            }
                            ?>                            
                        </div>                        
                    </div>
                    
                    <div class="pdt_gallery_normalize">
                        <img class="pdt_gallery_item pdt_gallery_banner" src="Uploads/featured-01.jpg" alt="" title=""/>
                    </div>                    
                    <div class="pdt_gallery_normalize flex">
                            <?php
                            $pdt = 0;
                            for ($pdt = 5; $pdt < 9; $pdt++){                            
                            ?>
                            <article class="pdt_gallery_item flex-2"> <!-- FLEX-2 SIGNIFICA 2 LINHAS COM 2 ELEMENTOS -->
                                <a href="#" title=""><img alt="" title="" src="Uploads/products/<?= str_pad($pdt, 2, 0, STR_PAD_LEFT); ?>.jpg"/></a> <!--<!-- STR PAD LEFT ALTERA AS IMAGENS ATRAVÉS DO IDICE 01, 02 E SUCESSIVAMENTE -->
                                <header class="pdt_gallery_item_desc">
                                    <h2 class="pdt_gallery_item_desc_title"><a class="transition" href="#" title="Calça Moletom Cofort Mama Latina">Calça Moletom Cofort Mama Latina</a></h2>
                                    <div class="pdt_gallery_item_desc_price">
                                        <p><b>R$ 59,90</b> <span>R$ 99,90</span></p>
                                    </div>
                                    <p>2x R$ 29,95</p>
                                </header>                                
                            </article>                            
                            <?php
                            }
                            ?>                            
                        </div>
                </div>
            </section>
        </main>        
        
        <footer class="main_footer">
            <div class="container">
                <article class="main_footer_optin">
                    <header class="main_footer_optin_header">
                        <h3>Quer 20% de desconto?</h3>
                        <p>Informe seu melhor e-mail logo abaixo e receba um cupom com 20% de desconto para sua primeira compra!</p>
                    </header>
                    <form>
                        <input type="email" name="email" placeholder="Informe seu e-mail:"/>
                        <button class="btn radius transition icon-mail">Quero meu desconto!</button>
                    </form>                    
                </article>                
                <div class="main_footer_nav flex">
                    <?php
                    for ($m = 1; $m < 4; $m++){
                    ?>
                    <nav class="flex-4">
                        <h4>Nome do menu <?= $m; ?>:</h4>
                        <?php
                        for ($mm = 1; $mm < 6; $mm++){
                        ?>
                        <a href="#" title="">Link de rodapé <?= "{$m}/{$mm}"; ?></a>
                            <?php
                        }
                        ?>
                    </nav>
                    <?php
                    }
                    ?>
                    <nav class="flex-4">
                        <h4>Pagamento seguro:</h4>
                        <ul class="main_footer_nav_pays flex">
                            <li class="flex-4"><img alt="" title="" src="Assets/Cards/mastercard.png"/></li>
                            <li class="flex-4"><img alt="" title="" src="Assets/Cards/visa.png"/></li>
                            <li class="flex-4"><img alt="" title="" src="Assets/Cards/amex.png"/></li>
                            <li class="flex-4"><img alt="" title="" src="Assets/Cards/aura.png"/></li>
                            <li class="flex-4"><img alt="" title="" src="Assets/Cards/dinners.png"/></li>
                            <li class="flex-4"><img alt="" title="" src="Assets/Cards/discover.png"/></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="main_footer_bottom">
                <div class="container flex">
                    <div class="main_footer_bottom_copy">
                        <img alt="WdpShoes" title="WdpShoes" src="Themes/WdpShoes/Images/wdpshoes_logo_black.png"/>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <nav class="main_footer_bottom_social">
                        <a title="" href="" class="icon-facebook icon-notext transition"></a>
                        <a title="" href="" class="icon-instagram icon-notext transition"></a>
                        <a title="" href="" class="icon-youtube icon-notext transition"></a>
                    </nav>
                </div>                
            </div>
        </footer>
    </body>
</html>
