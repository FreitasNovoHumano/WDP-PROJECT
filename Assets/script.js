$(function(){
    //J_SLIDE
    if ($(".j_slide").length){ //ENCAPSULANDO O OBJETO
        function jSlide(){ //NOME FUNÇÃO
            $(".j_slide_nav span").removeClass("active");
            
            //MANIPULANDO O SLIDE
            if ($(".j_slide_item:visible").next(".j_slide_item").length){ //NEXT LENGTH VERIFICA SE EXISTE OUTRO SLIDE A FRENTE. CASO CONTRÁRIO EXECUTA O MESMO
                $(".j_slide_nav span:eq(" + ($(".j_slide_item:visible").index() + 1) + ")").addClass("active"); //PEGA A POSIÇÃO DO ATIVO E SOMA MAIS UM
                $(".j_slide_item:visible").fadeOut(function (){
                    $(this).next(".j_slide_item").fadeIn();
                });
            } else {
                $(".j_slide_nav span:eq(0)").addClass("active"); //EQ É A POSIÇÃO DO ATIVO E ESTÁ MARCANDO O PRIMEIRO
                
                $(".j_slide_item:visible").fadeOut(function (){
                    $(".j_slide_item:eq(0)").fadeIn();
                });
            }
        }
        //VARIAVEL QUE FAZ A FUNÇÃO RODAR
        var timeSlide = 3000;
        var jSlideTimer = setInterval(function(){
            jSlide();            
        }, timeSlide);
        
        //EVENTO DE PARAR O SLIDE QUANDO POSICIONAR O MOUSE EM CIMA DO SLIDE
        $(".j_slide").mouseenter(function (){
            clearInterval(jSlideTimer);
        }).mouseleave(function (){
            jSlideTimer = setInterval(function (){
                jSlide();
            }, timeSlide);
        });
        
        //NAVEÇÃO DO SLIDE
        var slideNav = ''; //INFORMANDO A DIV DE NAVEGAÇÃO
        $(".j_slide_item").each(function (){ //CRIA A QUANTIDADE DE BOLINHA DE ACORDO COM A QUANTIDADE DE SLIDE
            slideNav += "<span class='rounded transition'></span>"; //ROUNDED DEIXA REDONDO. TRANSITION EFEITO
        });
        //ESTÁ NO SLIDE APLICA O HTML E PROCURA O SPAN INTERNO O CLICK EXECUTA A FUNÇÃO
        $(".j_slide_nav").html(slideNav).find("span").click(function (){
            var navigation = $(this);
            clearInterval(jSlideTimer);//PARA O SLIDE AO CLICK 
        
        $(".j_slide_nav span").removeClass("active"); 
        $(".j_slide_item:visible").fadeOut(function (){ //ENTRANDO DENTRO DO CALLBACK
            navigation.addClass("active");
            $(".j_slide_item:eq(" + navigation.index() + ")").fadeIn();//TRAS O SLIDE AO CLICAR NA BOLINHA 
        });
      });
      $(".j_slide_nav").find("span:eq(0)").addClass("active"); //DEIXA A PRIMEIRA BOLINHA MARCADA
    }
    
    //J_TABS
    if ($(".j_tabs").length){
        $(".j_tabs_nav:eq(0)").addClass("active");//DEIXA A PRIMEIRA ABA MARCADA
        $(".j_tabs_nav").click(function (){
            var jTab = $(this);
            
            $(".j_tabs_nav").removeClass("active"); //REMOVE DE TODAS
            jTab.addClass("active"); //TRAS A QUE FOI CLICADA
            
            $(".j_tabs_item").fadeOut(function (){ //OCUTANDO OS ITENS DA LISTA
                $(".j_tabs_item:eq(" + jTab.index() + ")").fadeIn(); //APRESENTANDO O ITEM QUE FOI CLICADO
            });
        });
    }
});

