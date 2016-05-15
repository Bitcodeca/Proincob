<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
function awesome_script_enqueue() {
	//css
	wp_enqueue_style('materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.0', 'all');
	wp_enqueue_style('nivo-slidercss', get_template_directory_uri() . '/css/nivo-slider.css', array(), '1.0.0', 'all');
    wp_enqueue_style('animatecss', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all');
	//js
	wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js', array(), '2.0.2', true);
	wp_enqueue_script('materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js', array(), '2.0.2', true); 
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
	wp_enqueue_script('nivo-sliderjs', get_template_directory_uri() . '/js/jquery.nivo.slider.pack.js', array(), '1.0.0', true);
	wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

/*
	==========================================
	 Activate menus
	==========================================
*/
function awesome_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Nav principal');
	
}

add_action('init', 'awesome_theme_setup');

/*
	==========================================
	 Theme support function
	==========================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

/*
	==========================================
	Post
	==========================================
*/

function paginainicio(){
   $args = array(
   'labels'=> array( 'name'=>'inicio',
       'singular_name'=> 'inicio',
       'menu_name'=>'Inicio',
       'name_admin_bar'=> 'inicio',
       'all_items' =>'Ver todas las publicaciones',
       'add_new'=> 'Añadir nueva publicación' ),
   'description' =>"Este tipo de post es para el inicio",
   'public' => true,
   'exclude_from_search'=>false,
   'publicly_queryable'=> true,
   'show_ui' => true,
   'show_in_menu'=> true,
   'show_in_admin_bar'=> true,
   'menu_position'=>6,
   'capability_type'=> 'page',
   'supports'=> array( 'title', 'editor', 'author', 'thumbnail' ),
  'taxonomies' => array('category'),
   'query_var'=>true,
  );
  register_post_type( "inicio", $args );
 }
 add_action("init","paginainicio");
 
 function paginaempresa(){
   $args = array(
   'labels'=> array( 'name'=>'empresa',
       'singular_name'=> 'empresa',
       'menu_name'=>'Empresa',
       'name_admin_bar'=> 'empresa',
       'all_items' =>'Ver todas las publicaciones',
       'add_new'=> 'Añadir nueva publicación' ),
   'description' =>"Este tipo de post es para la empresa",
   'public' => true,
   'exclude_from_search'=>false,
   'publicly_queryable'=> true,
   'show_ui' => true,
   'show_in_menu'=> true,
   'show_in_admin_bar'=> true,
   'menu_position'=>6,
   'capability_type'=> 'page',
   'supports'=> array( 'title', 'editor', 'author', 'thumbnail' ),
  'taxonomies' => array('category'),
   'query_var'=>true,
  );
  register_post_type( "empresa", $args );
 }
 add_action("init","paginaempresa");
 
 function paginaobras(){
   $args = array(
   'labels'=> array( 'name'=>'obras',
       'singular_name'=> 'obras',
       'menu_name'=>'Obras',
       'name_admin_bar'=> 'obras',
       'all_items' =>'Ver todas las publicaciones',
       'add_new'=> 'Añadir nueva publicación' ),
   'description' =>"Este tipo de post es para las obras",
   'public' => true,
   'exclude_from_search'=>false,
   'publicly_queryable'=> true,
   'show_ui' => true,
   'show_in_menu'=> true,
   'show_in_admin_bar'=> true,
   'menu_position'=>6,
   'capability_type'=> 'page',
   'supports'=> array( 'title', 'editor', 'author', 'thumbnail' ),
  'taxonomies' => array('category'),
   'query_var'=>true,
  );
  register_post_type( "obras", $args );
 }
 add_action("init","paginaobras");
 
 function paginalegal(){
   $args = array(
   'labels'=> array( 'name'=>'legal',
       'singular_name'=> 'legal',
       'menu_name'=>'Legal',
       'name_admin_bar'=> 'legal',
       'all_items' =>'Ver todas las publicaciones',
       'add_new'=> 'Añadir nueva publicación' ),
   'description' =>"Este tipo de post es para legal",
   'public' => true,
   'exclude_from_search'=>false,
   'publicly_queryable'=> true,
   'show_ui' => true,
   'show_in_menu'=> true,
   'show_in_admin_bar'=> true,
   'menu_position'=>6,
   'capability_type'=> 'page',
   'supports'=> array( 'title', 'editor', 'author', 'thumbnail' ),
  'taxonomies' => array('category'),
   'query_var'=>true,
  );
  register_post_type( "legal", $args );
 }
 add_action("init","paginalegal");
  
 function paginamedia(){
   $args = array(
   'labels'=> array( 'name'=>'media',
       'singular_name'=> 'media',
       'menu_name'=>'Media',
       'name_admin_bar'=> 'media',
       'all_items' =>'Ver todas las publicaciones',
       'add_new'=> 'Añadir nueva publicación' ),
   'description' =>"Este tipo de post es para media",
   'public' => true,
   'exclude_from_search'=>false,
   'publicly_queryable'=> true,
   'show_ui' => true,
   'show_in_menu'=> true,
   'show_in_admin_bar'=> true,
   'menu_position'=>6,
   'capability_type'=> 'page',
   'supports'=> array( 'title', 'editor', 'author', 'thumbnail' ),
  'taxonomies' => array('category'),
   'query_var'=>true,
  );
  register_post_type( "media", $args );
 }
 add_action("init","paginamedia");
   
 function paginacontacto(){
   $args = array(
   'labels'=> array( 'name'=>'contacto',
       'singular_name'=> 'contacto',
       'menu_name'=>'Contacto',
       'name_admin_bar'=> 'contacto',
       'all_items' =>'Ver todas las publicaciones',
       'add_new'=> 'Añadir nueva publicación' ),
   'description' =>"Este tipo de post es para contacto",
   'public' => true,
   'exclude_from_search'=>false,
   'publicly_queryable'=> true,
   'show_ui' => true,
   'show_in_menu'=> true,
   'show_in_admin_bar'=> true,
   'menu_position'=>6,
   'capability_type'=> 'page',
   'supports'=> array( 'title', 'editor', 'author', 'thumbnail' ),
  'taxonomies' => array('category'),
   'query_var'=>true,
  );
  register_post_type( "contacto", $args );
 }
 add_action("init","paginacontacto");
 
 /******************************************************************************
 * Enable Bootstrap Active Class In Navigation Menu
 *****************************************************************************/
class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() )
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu dropdown-menu\">\n";
    }

    function display_element ($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
    {
        $element->hasChildren = isset($children_elements[$element->ID]) && !empty($children_elements[$element->ID]);

        return parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        if($item->current || $item->current_item_ancestor || $item->current_item_parent){
            $class_names .= ' active ';
        }
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
        $output .= $indent . '<li' . $id . $class_names .'>';
        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';
        $atts['class']  = ($item->hasChildren)         ? 'dropdown-toggle' : '';
        $atts['data-toggle']  = ($item->hasChildren)   ? 'dropdown'        : '';
        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        if( $item->hasChildren) {
            $item_output .= ' <b class="caret"></b>';
        }
        $item_output .= '</a>';
        $item_output .= $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}
update_option('image_default_link_type','none');