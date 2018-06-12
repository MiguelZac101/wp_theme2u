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

//desactvar menu de administracion de la web
add_filter('show_admin_bar','__return_false');
