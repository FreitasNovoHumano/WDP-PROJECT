<main class="main_content">
    <div class="main_content_slide j_slide"> <!-- CLASS J_SLIDE É PARA UTILIZAR NO JQUERY -->
        <a class="j_slide_item" href="#" title=""><img src="Uploads/featured-01.jpg" alt="" title=""/></a>
        <a class="j_slide_item" href="#" title=""><img src="Uploads/featured-02.jpg" alt="" title=""/></a>
        <a class="j_slide_item" href="#" title=""><img src="Uploads/featured-03.jpg" alt="" title=""/></a> 
        <div class="j_slide_nav"></div> <!-- NATIVAÇÃO DE PLUGNIS -->
    </div>

    <section class="pdt_gallery">
        <div class="container">
            <header class="main_content_header">
                <h1 class="main_content_header_title">Oferta da semana:</h1>
            </header>

            <div class="flex">
                <div class="pdt_gallery_list pdt_gallery_featured">
                    <?php
                    $pdt = "06";
                    require 'Themes/WdpShoes/Templates/product.php';
                    ?>

                </div>
                <div class="pdt_gallery_list flex">
                    <?php
                    $pdt = 0;
                    for ($pdt = 1; $pdt < 5; $pdt++) {
                        require 'Themes/WdpShoes/Templates/product.php';
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
                for ($pdt = 5; $pdt < 9; $pdt++) {
                    require 'Themes/WdpShoes/Templates/product.php';
                }
                ?>                            
            </div>
        </div>
    </section>

    <section class="pdt_gallery pdt_select">
        <div class="container">
            <header class="pdt_select_header">
                <h1><span class="j_tabs_nav transition radius">Eles</span><span class="j_tabs_nav transition radius">Elas</span></h1>
            </header>

            <div class="j_tabs">
                <div class="j_tabs_item">
                    <div class="flex">
                        <div class="pdt_gallery_list pdt_gallery_featured">
                            <?php
                            $pdt = "15";
                            require 'Themes/WdpShoes/Templates/product.php';
                            ?>                            
                        </div>
                        <div class="pdt_gallery_list flex">
                            <?php
                            $pdt = 0;
                            for ($pdt = 11; $pdt < 15; $pdt++) {
                               
                                require 'Themes/WdpShoes/Templates/product.php';
                            }
                            ?>                            
                        </div>                        
                    </div>
                </div>

                <div class="j_tabs_item">
                    <div class="flex">
                        <div class="pdt_gallery_list pdt_gallery_featured">
                            <?php
                            $pdt = "09";
                            require 'Themes/WdpShoes/Templates/product.php';
                            ?>
                        </div>
                        <div class="pdt_gallery_list flex">
                            <?php
                            $pdt = 0;
                            for ($pdt = 5; $pdt < 9; $pdt++) {
                                require 'Themes/WdpShoes/Templates/product.php';
                            }
                            ?>                            
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_gallery">
        <div class="container">
            <header class="main_content_header">
                <h1 class="main_content_header_title">Blog</h1>
            </header>

            <div class="flex">
                <?php
                for ($b = 1; $b < 7; $b++) {
                    require 'Themes/WdpShoes/Templates/article.php';
                }
                ?>
            </div>
        </div>
    </section>
</main>