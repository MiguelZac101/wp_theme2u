<?php

//carga de estilos y js
function theme_scripts(){
    wp_enqueue_style('normalize',  get_template_directory_uri().'/css/normalize.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','theme_scripts');

//confguracion de menus
register_nav_menus(array(
   'menu_principal' => __('Menu Principal','PlantillaWP') 
));

//imagen destacada
add_theme_support('post-thumbnails');

//medidas de imagenes
add_image_size('destacada',1100,418,true);
add_image_size('guia-toronto',350,210,true);
add_image_size('consejos',720,380,true);

//widgets
function theme_widgets(){
    register_sidebar(array(
        'name'          => __('Siderbar Testimoniales'),
        'id'            => 'sidebar-2',
        'description'   => 'Widgets de Testimoniales',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Imagenes Página Principal'),
        'id'            => 'front-page',
        'description'   => 'Widgets para página principal',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init','theme_widgets');

//desactvar menu de administracion de la web
add_filter('show_admin_bar','__return_false');
