<?php

/**
 * Definisce post type per le Camere Lato Viale
 */

add_action( 'init', 'register_camere_viale_post_type' );
function register_camere_viale_post_type() {

	/** camere Viale **/
	$labels = array(
		'name'          => _x( 'Camere Viale', 'Post Type General Name', 'bad-baby' ),
		'singular_name' => _x( 'Camere Viale', 'Post Type Singular Name', 'bad-baby' ),
		'add_new'       => _x( 'Aggiungi un File', 'Post Type Singular Name', 'bad-baby' ),
		'add_new_item'  => _x( 'Aggiungi un File', 'Post Type Singular Name', 'bad-baby' ),
		'edit_item'      => _x( 'Modifica il File', 'Post Type Singular Name', 'bad-baby' ),
		'view_item'      => _x( 'Visualizza il File', 'Post Type Singular Name', 'bad-baby' ),
	);
	$args   = array(
		'label'         => __( 'camere_viale', 'bad-baby' ),
		'labels'        => $labels,
		'supports'      => array( 'title', 'thumbnail' ),
		'hierarchical'  => true,
		'public'        => true,
		'menu_position' => 4,
		'menu_icon'     => 'dashicons-format-gallery',
		'has_archive'   => true,
        'map_meta_cap'    => true,
	);
	register_post_type( 'camere_viale', $args );

}