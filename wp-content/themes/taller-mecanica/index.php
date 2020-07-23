<?php

/*
    Nombre: Ciro Pérez Iglesias
    Fecha: 29/06/20
*/

get_header(); ?>

<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">¡Bienvenido!</div>
        <div class="masthead-heading text-uppercase">Automobile Mechanics</div>
        <!--<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>-->
        <br/>
    </div>
</header>

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-between">

<?php if( have_posts() ): 
        while ( have_posts() ) : 
            the_post(); ?>
            
            <div class="card mb-3" style="width: 18rem;">
                <img src="" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Autor: <?php the_author(); ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted">Fecha: <?php the_time('j, F, Y'); ?></h6>
                    <p class="card-text"><?php the_content(); ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            
    <?php endwhile; 
    endif; ?>

    </div>
</div>

<?php get_footer(); ?>
