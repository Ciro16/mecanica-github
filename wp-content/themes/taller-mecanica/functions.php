<?php

//Estilos y JavaScripts
function agregar_css_js(){
    wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');
    wp_enqueue_style('droid', 'https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic');
    wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('jqueryy', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js', array('jqueryy'), '3.5.1', true);
    wp_enqueue_script('jquery-ajax', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array('bootstrap-js'), '4.5.0', true);
    wp_enqueue_script('fontwesome', 'https://use.fontawesome.com/releases/v5.13.0/js/all.js', array('jquery-ajax'), '1.4.1', true);
    wp_enqueue_script('validations', get_template_directory_uri() . '/assets/mail/jqBootstrapValidation.js', array('fontwesome'), '1.4.1', true);
    wp_enqueue_script('contact', get_template_directory_uri() . '/assets/mail/contact_me.js', array('validations'), '1.4.1', true);
    wp_enqueue_script('js', get_template_directory_uri() . '/js/scripts.js', array('contact'), '1.4.1', true);
}
add_action('wp_enqueue_scripts', 'agregar_css_js');

//Menu de navegación
function registrando_menus() {
    register_nav_menus(
        array(
            'menu-principal' => __( 'Menu Principal' )
        )
    );
}
add_action( 'init', 'registrando_menus' );

//Agregar clase a los li
function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li', 1, 3);

//Agregar clase a las etiquetas a
function add_class_a($atts, $item, $args){
    $class = 'nav-link js-scroll-trigger';
    $atts['class'] = $class;
    return $atts; 
}
add_filter('nav_menu_link_attributes', 'add_class_a', 10, 3);