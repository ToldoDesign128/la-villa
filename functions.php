<?php

if ( ! function_exists( 'la_villa_setup' ) ) :
    function la_villa_setup() {
        /**
         * Sets up theme defaults and registers support for various WordPress features.
         *
         * It is important to set up these functions before the init hook so
         * that none of these features are lost.
         *
         *  @package la villa
         *  @since la villa 1.0
         */
            // Enable title in header
            add_theme_support( "title-tag" );
            // Collegamenti automatici ai feed
            add_theme_support( 'automatic-feed-links' );
            // Supporto immagini in evidenza
            add_theme_support( 'post-thumbnails' );
            // Supporto formati
            add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );

            // Carica dominio di testo per traduzioni
            load_theme_textdomain( 'la_villa', get_template_directory() . '/languages' );

            // Custom menu areas
            register_nav_menus( array(
                'primary' => __( 'Primary Navigation', 'theme_slug' ),
            ) );

    }
endif; // la_villa_setup
add_action( 'after_setup_theme', 'la_villa_setup' );


/*REMOVE
----------------------------------------------*/

// Remove comments
add_action('admin_init', function () {
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
add_filter('comments_array', '__return_empty_array', 10, 2);
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

//Remove emoji
function la_villa_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
    add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'la_villa_disable_emojis' );
    function disable_emojis_tinymce( $plugins ) {
        if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
        } else {
        return array();
        }
    }
    function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
        if ( 'dns-prefetch' == $relation_type ) {
            $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
            $urls = array_diff( $urls, array( $emoji_svg_url ) );
        }
        return $urls;
    }


// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
        return $data;
    }
    $filetype = wp_check_filetype( $filename, $mimes );
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4 );
function cc_mime_types( $mimes ){
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );
function fix_svg() {
echo '';
}
add_action( 'admin_head', 'fix_svg' );


// Il mio stile e i miei scripts

function add_la_villa_scripts() {
    wp_enqueue_style("hamburger-style", get_template_directory_uri() . '/assets/hamburgers.min.css');
    wp_enqueue_style("splide-style", get_template_directory_uri() . '/splide.min.css');
    wp_enqueue_style("la-villa-style", get_template_directory_uri() . '/style.min.css');
    wp_enqueue_script("splide-script", get_template_directory_uri().'/assets/js/splide/splide.min.js', array("jquery"), null, false);
	wp_enqueue_script("la-villa-script", get_template_directory_uri(). '/script.min.js', array("jquery"), null, true);

}
add_action( 'wp_enqueue_scripts', 'add_la_villa_scripts' );

// Functions part
require dirname(__FILE__).'/functions-parts/slider-camere1.php';
require dirname(__FILE__).'/functions-parts/slider-camere2.php';
require dirname(__FILE__).'/functions-parts/slider-ristorante.php';