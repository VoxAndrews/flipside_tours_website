<?php
function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), null, false);
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
}
 
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

?>
<?php
function add_menu_link_class( $atts, $item, $args ) {
if($args->link_class) {$atts['class'] = $args->link_class;
}
return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
function add_menu_list_item_class($classes, $item, $args) {
if($args->list_item_class){$classes[] = $args->list_item_class;
                          }return $classes;
    }
    add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);
?>
<?php
	if ( get_field(' headerlargebackgroundimage') ) {
		echo 'style="background: url(' . get_field(' headerlargebackgroundimage') . ')"';
	}
?>