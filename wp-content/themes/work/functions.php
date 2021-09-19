<?php
//MENUS
register_nav_menu( 'principal', 'Menu Principal' );
register_nav_menu( 'ms', 'Mídias Sociais' );
register_nav_menu( 'contatos', 'Contatos' );
//THUMBNAILS
add_theme_support('post-thumbnails');
add_image_size('capa', 1600, 450, true);
add_image_size('smart', 525, 525, true);
add_image_size( 'custom-size', 220, 220, array( 'left', 'top' ) ); // Hard crop left top


//REGISTRANDO POST TYPE
include_once(get_stylesheet_directory() . '/functions/custom-post-type-capa.php');	

include_once(get_stylesheet_directory() . '/functions/custom-post-type-app.php');



//REGISTRANDO TAXONOMIAS
include_once(get_stylesheet_directory() . '/functions/custom-taxonomy.php');

