<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu', 'midas' ),
			'flag-menu' => __( 'Flag Menu', 'midas' ),
		)
	);
}
add_action( 'init', 'register_theme_menus' );


function wpt_theme_styles() {
	wp_enqueue_style( 'google_font_css', 'http://fonts.googleapis.com/css?family=Roboto:300,400,700,900|Roboto+Condensed:300,400,700|Roboto+Slab:300,400,700|Didact+Gothic:400' );
	wp_enqueue_style( 'font_awesome_css', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

function wpt_theme_js() {
	wp_enqueue_script( 'modernizer_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/rwd-2.js', array('jquery'), '', true );
	wp_enqueue_script( 'logo_js', get_template_directory_uri() . '/js/picturefill.js', array('jquery'), '', false );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );

function custom_pagination() {
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    $pages = paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'prev_next' => false,
            'type'  => 'array',
            'prev_next'   => false
        ) );
        if( is_array( $pages ) ) {
            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
            echo '<ul>';
            foreach ( $pages as $page ) {
                    echo "<li>$page</li>";
            }
           echo '</ul>';
        }
}

register_sidebar( array(
    'id'          => 'gold-sidebar',
    'name'        => __( 'Gold Sidebar', 'midas' ),
    'description' => __( 'This sidebar is located on news page.', 'midas' ),
    'before_widget' => '<div id="%1$s" class="clearfix widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widgettitle">',
    'after_title' => '</h3><hr class="header-line">',
) );



?>
