<?php 


function educimat_files() {
    wp_enqueue_script('jquery_js', get_theme_file_uri('/assets/js/jquery.min.js'), NULL, microtime(), true);
    wp_enqueue_script('bootstrap_js', get_theme_file_uri('/assets/js/bootstrap.js'), NULL, microtime(), true);
    wp_enqueue_script('slick_js', get_theme_file_uri('/assets/js/slick.js'), NULL, microtime(), true);
    wp_enqueue_script('waypoint_js', get_theme_file_uri('/assets/js/waypoints.js'), NULL, microtime(), true);
    wp_enqueue_script('counterup_js', get_theme_file_uri('/assets/js/jquery.counterup.js'), NULL, microtime(), true);
    wp_enqueue_script('mixitup_js', get_theme_file_uri('/assets/js/jquery.mixitup.js'), NULL, microtime(), true);
    wp_enqueue_script('fancybox_js', get_theme_file_uri('/assets/js/jquery.fancybox.pack.js'), NULL, microtime(), true);
    wp_enqueue_script('custom_js', get_theme_file_uri('/assets/js/custom.js'), NULL, microtime(), true);
    wp_enqueue_style('font_awesome_css', get_theme_file_uri('/assets/css/font-awesome.css'));
    wp_enqueue_style('bootstrap_css', get_theme_file_uri('/assets/css/bootstrap.css'));
    wp_enqueue_style('slick_css', get_theme_file_uri('/assets/css/slick.css'));
    wp_enqueue_style('theme_css', get_theme_file_uri('/assets/css/theme-color/orange-theme.css'));
    wp_enqueue_style('google_font_1', '//fonts.googleapis.com/css?family=Montserrat:400,700');
    wp_enqueue_style('google_font_2', '//fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700');

    wp_enqueue_style('educimat_main_css', get_stylesheet_uri(), NULL, microtime());
}
add_action('wp_enqueue_scripts', 'educimat_files');

function educimat_features(){
    register_nav_menu('menu_principal', 'Menu Principal do Site');
    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'educimat_features');

// adicionar o suporte a imagens destacadas para os produtos
add_theme_support( 'post-thumbnails' );


function educimat_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Widgets barra lateral',
        'id'            => 'custom-widget-produtos-lateral',
        'before_widget' => '<div class="mu-single-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => 'Widgets Página de Arquivo',
        'id'            => 'custom-widget-arquivo-lateral',
        'before_widget' => '<div class="mu-single-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
 
}
add_action( 'widgets_init', 'educimat_widgets_init' );


function my_cptui_add_post_types_to_archives( $query ) {
	// We do not want unintended consequences.
	if ( is_admin() || ! $query->is_main_query() ) {
		return;    
	}

	if ( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {

		$query->set(
			'post_type', array( 'post', 'produto_educacional')
		);
	}
}
add_filter( 'pre_get_posts', 'my_cptui_add_post_types_to_archives' );

?>
