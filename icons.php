<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WDP: Icones, links e botões</title>
        
        <link rel="stylesheet" href="Assets/Styles/Boot.css"/>
        <link rel="stylesheet" href="Assets/Styles/Icons.css"/>
        
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800');
            @import url('https://file.myfontastic.com/qShUdJgqPRE8Ye3MQiqNuP/icons.css');

            *{
                font-family: 'Open Sans', sans-serif;
            }
            
            .box{
                display: flex;
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
            }
            
            .box_container{
                width: 600px;
                margin: auto;
                padding: 0 20px 20px 20px;
                background: #fbfbfb;
            }
            
            .box_container h1{
                margin: 20px 0 10px 0;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <div class="box_container">
                <header>
                    <h1>Lorem Ipsum &nbsp; <a href="../wdp_project/reset.php">Reset</a> or 
                        <a href="../wdp_project/triggers.php">Triggers</a></h1>
                </header>
                <h2>Icones</h2>
                <p class="icon-facebook">&nbsp;Facebook</p>
                <p class="icon-instagram">&nbsp;Instagram</p>
                <p class="icon-youtube">&nbsp;YouTube</p>
                <p class="icon-search">&nbsp;Pesquisar</p>
                
                <h2>Links</h2>
                <P><a title="" href="#">Link1</a></P>
                <P><a title="" href="#" class="icon-facebook">Link2</a></P>
                
                <h2>Botões</h2>
                <a class="btn radius" title="" href="#">Link Button</a>
                <a class="btn radius transition" title="" href="#">Link Button</a>
                <button class="btn">Button</button>
                <span class="btn radius transition icon-search">&nbsp;Span Button</span>
                
                <p>Tamanhos</p>
                <a class="btn radius btn-small" title="" href="#">Link Button</a>
                <a class="btn radius" title="" href="#">Link Button</a>
                <a class="btn radius btn-big" title="" href="#">Link Button</a>
                
                <p>Cores</p>
                <span class="btn btn-green radius transition icon-search">&nbsp;Span Button</span>
                <span class="btn btn-green-out radius transition icon-search">&nbsp;Span Button</span>
                <span class="btn btn-blue radius transition icon-search">&nbsp;Span Button</span>
                <span class="btn btn-blue-out radius transition icon-search">&nbsp;Span Button</span>
                <span class="btn btn-yellow radius transition icon-search">&nbsp;Span Button</span>
                <span class="btn btn-yellow-out radius transition icon-search">&nbsp;Span Button</span>
                <span class="btn btn-red radius transition icon-search">&nbsp;Span Button</span>
                <span class="btn btn-red-out radius transition icon-search">&nbsp;Span Button</span>
                
            </div>
        </div>        
    </body>
</html>
