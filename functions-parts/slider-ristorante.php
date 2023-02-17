<?php

/**
 * Definisce post type per le ristorante Lato
 */

add_action( 'init', 'register_ristorante_post_type' );
function register_ristorante_post_type() {

	/** ristorante **/
	$labels = array(
		'name'          => _x( 'Ristorante', 'Post Type General Name', 'bad-baby' ),
		'singular_name' => _x( 'Ristorante', 'Post Type Singular Name', 'bad-baby' ),
		'add_new'       => _x( 'Aggiungi un File', 'Post Type Singular Name', 'bad-baby' ),
		'add_new_item'  => _x( 'Aggiungi un File', 'Post Type Singular Name', 'bad-baby' ),
		'edit_item'      => _x( 'Modifica il File', 'Post Type Singular Name', 'bad-baby' ),
		'view_item'      => _x( 'Visualizza il File', 'Post Type Singular Name', 'bad-baby' ),
	);
	$args   = array(
		'label'         => __( 'ristorante', 'bad-baby' ),
		'labels'        => $labels,
		'supports'      => array( 'title', 'thumbnail' ),
		'hierarchical'  => true,
		'public'        => true,
		'menu_position' => 4,
		'menu_icon'     => 'dashicons-format-gallery',
		'has_archive'   => true,
        'map_meta_cap'    => true,
	);
	register_post_type( 'ristorante', $args );

}