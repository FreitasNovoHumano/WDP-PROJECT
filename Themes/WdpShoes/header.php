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