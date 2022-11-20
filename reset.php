<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WDP: Reset Básico</title>
        
        <link rel="stylesheet" href="Assets/Styles/Boot.css"/>
        <link rel="stylesheet" href="Assets/Styles/Icons.css"/>

        
        
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800');
            @import url('https://file.myfontastic.com/42GGqxGQ9hYn5mkzD4gNy5/icons.css');

            *{
                font-family: 'Open Sans', sans-serif;
            }
            
            .example{
                padding-bottom: calc(33.33% - 30px);
                background: var(--green);
            }
            
            .h:hover{
                background: var(--green_h);
            }
        </style>
    </head>
    <body>
        <div class="container"><!--CONTROLA TODO O CONTEÚDO-->
            <header>
                <h1>Lorem Ipsum has been the industry's standard &nbsp; <a href="../wdp_project/icons.php">Icones</a></h1>                
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                <a href="#" title="">Lorem Ipsum has</a>
            </header>

            <img alt="" title="" src="https://pixabay.com/get/gb11edd9dfc22e030634f2bef4b2d5b789cc775d107d60e98d20551d194dd5b86d9f8f9cfc35171f034f779b01531edfc.jpg">
            <div class="embed-container"><!--CONTROLA A RESPONSIVIDADE DO IFRAME-->
                <!--IFRAME VÍDEO YOUTUBE CLICK EM COMPARTILHAR > INCORPORAR E COPIA O IFRAME -->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/2Bfvd3Jp2mk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
            <div class="flex">
                <div class="flex-3 rounded example">Rounded</div>
                <div class="flex-3 radius example">Radius</div>
                <div class="flex-3 transition example h">Transition</div>
            </div>                
        </div>

    </body>
</html>
