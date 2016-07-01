<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    
<title> <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; <?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" media="all" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />﻿
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,300,400,600,700" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/4rodas/css/ionicons.min.css">


   <?php wp_head(); ?>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   <script type="text/javascript">
   	    /*menu4rodas*/
    $(document).ready(function () {
        "use strict";
        $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');

        $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');

        $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\"><a class=\"lupa_min\"></a><a class=\"logoMin\"></a></a>");

        $(".menu > ul > li").hover(function (e) {
            if ($(window).width() > 943) {
                $(this).children("ul").stop(true, false).fadeToggle(150);
                e.preventDefault();
            }
        });
        $(".menu > ul > li").click(function () {
            if ($(window).width() <= 943) {
                $(this).children("ul").fadeToggle(150);
            }
        });
        $(".menu-mobile").click(function (e) {
            $(".menu > ul").toggleClass('show-on-mobile');
            e.preventDefault();
        });
    });

   </script>

    </head>

    <body>

 <header class="menu-container">
                <nav class="menu">
                <img src="http://localhost/wordpress/wp-content/themes/4rodas/img/logo_pc.png" class="logo2">

                    <ul>
                        <li>
                            <a href="#">CARROS</a>
                            <ul>
                                <li class="drop">
                                    <ul>
                                        <li style="background-color:#474747; padding-left:20px; position:relative"><a href="#">Ver todos os carros</a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                    </ul>
                                </li>
                                <li class="drop">
                                    <ul>
                                        <li><a href="#">Audi</a></li>
                                        <li><a href="#">Bentrey</a></li>
                                        <li><a href="#">BMW</a></li>
                                        <li><a href="#">Chevrolet</a></li>
                                    </ul>
                                </li>
                                <li class="drop">
                                    <ul>
                                        <li><a href="#">Chrysler</a></li>
                                        <li><a href="#">Chevrolet</a></li>
                                        <li><a href="#">Dodge</a></li>
                                        <li><a href="#">Ferrari</a></li>
                                    </ul>
                                </li>
                                <li class="drop">
                                    <ul>
                                        <li><a href="#">Fiat</a></li>
                                        <li><a href="#">Ford</a></li>
                                        <li><a href="#">Honda</a></li>
                                        <li><a href="#">Hyundai</a></li>
                                    </ul>
                                </li>
                                <li class="drop">
                                    <ul>
                                        <li><a href="#">Fiat</a></li>
                                        <li><a href="#">Ford</a></li>
                                        <li><a href="#">Honda</a></li>
                                        <li><a href="#">Hyundai</a></li>
                                    </ul>
                                </li>
                                <li class="drop">
                                    <ul>
                                        <li><a href="#">Fiat</a></li>
                                        <li><a href="#">Ford</a></li>
                                        <li><a href="#">Honda</a></li>
                                        <li><a href="#">Hyundai</a></li>
                                    </ul>
                                </li>
                            </ul>                
                        </li>

                        <li><a href="#">TESTES</a>
                            <ul>
                                <li class="drop menu_interno">
                                    <ul>
                                        <li class="line"><a href="#">Ver tudo de teste</a></li>
                                        <li><a href="#">Comparativos</a></li>
                                        <li><a href="#">Impressões</a></li>
                                        <li><a href="#">Longa duração</a></li>
                                        <li><a href="#">Teste de pista</a></li>
                                    </ul>
                                </li>
                                <li class="drop">
                                    <ul>
                                        <li>
	                                        <a href="#"> 
	                                        	<img src="http://localhost/wordpress/wp-content/themes/4rodas/img/teste-abril_03.png">
	                    					</a>
                    					</li>        
                    					<li><a href="#">Ford Focus Fastback</a></li>
                                        <li><a href="#">Titanium Plus</a></li>
                                    </ul>
                                </li>
                                <li class="drop space-left-30">
                                    <ul>
                                        <li>
	                                        <a href="#"> 
	                                        	<img src="http://localhost/wordpress/wp-content/themes/4rodas/img/teste-abril_05.png">
	                    					</a>
                    					</li> 
                                        <li><a href="#">Audi A6 2.0 TFSI</a></li>
                                        <li><a href="#"></a></li>
                                    </ul>
                                </li>
                                <li class="drop space-left-60">
                                    <ul>
                                        <li class="title-menu"><h3>Ford EcoSport 1.6 PowerShift</h3><a href="#"><p>EcoSporte ganha motor 1.6 atrelado à transmissão automatizada de 6...</p></a></li>
                                        
                                    </ul>
                                </li>
                                <li class="drop space-left-30">
                                    <ul>
                                        <li>
	                                        <a href="#"> 
	                                        <img src="http://localhost/wordpress/wp-content/themes/4rodas/img/teste-abril_07.png">
	                    					</a>
                    					</li>                                         
                    					<li><a href="#">Audi Q3 1.4</a></li>
                                    </ul>
                                </li>
                                <li class="drop space-left-60">
                                    <ul>
                                        <li>
	                                        <a href="#"> 
	                                        	<img src="http://localhost/wordpress/wp-content/themes/4rodas/img/teste-abril_09.png">
	                    					</a>
                    					</li>                                         
                    					<li><a href="#">BMW 420i Cabriolet</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li><a href="#">NOTICIAS</a></li>
                        <li><a href="#">AUTO SERVIÇO</a></li>
                        <li><a href="#">GUIA DE COMPRAS</a></li>
                        <li><a href="#">TABELA FIPE</a></li>
                        <li><a href="#">ASSINE</a></li>

                    </ul>
                
                </nav>

            </header>

            <div id="divBusca">
                <input type="text" id="txtBusca" placeholder="PESQUISAR"/>
                <img src="http://localhost/wordpress/wp-content/themes/4rodas/img/lupa_min.png" id="btnBusca" alt="Buscar">
            </div>

            <nav class="container subNav">

                <ul class="acessados" style="">
                    <li><a href="#">salão do automóveo</a></li>
                    <li><a href="#">renegade</a></li>
                    <li><a href="#">novo sandero</a></li>
                    <li><a href="#">novo fox</a></li>
                    <li><a href="#">novo ka</a></li>
                    <li><a href="#">hb20</a></li>
                    <li><a href="#">duster</a></li>
                    <li><a href="#">golf</a></li>
                    <li><a href="#">corolla</a></li>
                    <li><a href="#">civic</a></li>
                    <li><a href="#">ia-zi</a></li>
                </ul>

                <div class="container subNav_Left">
                    <h4 class="title_acessados">+ acessados</h4>
                </div>
            </nav>

   
