<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Automobile Mechanics </title>
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico" />
    
    <?php wp_head(); ?>

    <style>
        .navegacion{
            width: 100%;
            position: fixed;
            top: 0;
        }
        .change{ 
            color: #fed136 !important;
        }
    </style>
</head>
<body id="page-top">

    <!--
        Nombre: Ciro Pérez Iglesias
        Fecha: 29/06/20
    -->
    
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top <?= isset($_GET['pagina']) && $_GET['pagina'] == 'portada' ? '' : 'bg-dark' ?>" id="mainNav">
        <div class="container">
            
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-principal',
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarResponsive',
                    'items_wrap' => '<ul class="navbar-nav text-uppercase ml-auto">%3$s</ul>',
                    'menu_class' => 'nav-item'
                )
            ); ?>
            <!--
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger <?= !isset($_GET['pagina']) || ( isset($_GET['pagina']) && $_GET['pagina'] == 'portada' ) ? 'change' : ''; ?>" href="?pagina=portada">Inicio</a></li>
                
                    <li class="nav-item"><a class="nav-link js-scroll-trigger <?= isset($_GET['pagina']) && $_GET['pagina'] == 'servicios' ? 'change' : '' ?>" href="?pagina=servicios">Servicios</a></li>

                    <li class="nav-item"><a class="nav-link js-scroll-trigger <?= isset($_GET['pagina']) && $_GET['pagina'] == 'nosotros' ? 'change' : '' ?>" href="?pagina=nosotros">Sobre Nosotros</a></li>

                    <li class="nav-item"><a class="nav-link js-scroll-trigger <?= isset($_GET['pagina']) && $_GET['pagina'] == 'contacto' ? 'change' : '' ?>" href="?pagina=contacto">Contacto</a></li>
                    
                </ul>
            </div>
            -->
        </div>
    </nav>
    <?php
    