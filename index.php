<?php
define("BASE", "https://www.localhost/wdp_project");
define("THEME", "WdpShoes");
define("THEME_PATH", __DIR__ . "/Themes/" . THEME);
define("THEME_LINK", BASE . "/Themes/" . THEME);

$configBase = BASE;
$configUrL = explode("/", strip_tags(filter_input(INPUT_GET, "url". FILTER_UNSAFE_RAW)));
$configUrl[0] = (!empty($configUrl[0]) ? $configUrl[0] : "index");
$configThemePath = THEME_PATH;
$configThemeLink = THEME_LINK;
$configSiteName = "WdpShoes";
?>
<!DOCTYPE html>
<html lang="pt-br">
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
        
        <script src="Assets/jquery.js"></script>
        <script src="Assets/script.js"></script>
        
    </head>
    <body>
        <?php
        //SEARCH
        echo "";
        //HEADER
        require "/{$configThemePath}/header.php";
        
        //QUERY STRING
        
        
        //FOOTER
        require "/{$configThemePath}/footer.php";

        ?>       
    </body>
</html>
