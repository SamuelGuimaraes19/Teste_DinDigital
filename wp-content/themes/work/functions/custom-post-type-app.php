<?php
/*Banner*/
add_action( 'init', 'register_custom_post_type_app' );
function register_custom_post_type_app() {
	$custom = array('slang' => 'apps', 'name' => 'App', 'plural' => 'Div App');
	$labels = array(
		'name' => _x($custom['plural'], 'post type general name'),
		'singular_name' => _x($custom['name'], 'post type singular name'),
		'add_new' => _x('Adicionar Novo', $custom['slang']),
		'add_new_item' => __('Adicionar Novo '.$custom['name']),
		'edit_item' => __('Editar '.$custom['name']),
		'new_item' => __('Novo '.$custom['name']),
		'all_items' => __('Todos os '.$custom['plural']),
		'view_item' => __('Visualizar '.$custom['name']),
		'search_items' => __('Pesquisar '.$custom['plural']),
		'not_found' =>  __('Nenhum '.$custom['name'].' encontrado'),
		'not_found_in_trash' => __('Nenhum '.$custom['name'].' na Lixeira'),
		'parent_item_colon' => '',
		'menu_name' => $custom['plural']
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-smartphone',
		'supports' => array('title', 'thumbnail','custom-fields'),
		'exclude_from_search' => true
	  );
    register_post_type($custom['slang'], $args);
}