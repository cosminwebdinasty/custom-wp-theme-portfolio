<?php

function register_styles(){

      wp_enqueue_style('style', get_template_directory_uri(). "/style.css", array(), '1.0', 'all'); 
      wp_enqueue_style('foundation', get_template_directory_uri(). "/assets/css/foundation.css", array(), '1.0', 'all'); 
      wp_enqueue_style('normalize', get_template_directory_uri(). "/assets/css/normalize.css", array(), '1.0', 'all');
      wp_enqueue_style('fa', get_template_directory_uri(). "/assets/css/font-awesome.min.css", array(), '1.0', 'all');
      wp_enqueue_style('st', get_template_directory_uri(). "/assets/css/style.css", array(), '1.0', 'all'); 
      wp_enqueue_style('custom', get_template_directory_uri(). "/assets/css/custom.css", array(), '1.0', 'all'); +
      wp_enqueue_style('fresco-css', get_template_directory_uri(). "/assets/css/fresco.css", array(), '1.0', 'all');

    wp_enqueue_script('fresco-js', get_stylesheet_directory_uri() . '/assets/js/fresco.min.js', array(), true);
    wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-1.10.2.js', 'jquery', true);
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array(), true);
    wp_enqueue_script( 'ajax-pagination',  get_stylesheet_directory_uri() . '/assets/js/ajax-pagination.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script('appear', get_stylesheet_directory_uri() . '/assets/js/appear.js', array(), true);
    wp_enqueue_script('foundationjs', get_stylesheet_directory_uri() . '/assets/js/foundation.min.js', array(), true);
    wp_enqueue_script('general', get_stylesheet_directory_uri() . '/assets/js/general.js', array(), true);
    wp_enqueue_script('is', get_stylesheet_directory_uri() . '/assets/js/jquery-isotope.js', array(), true);
    wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/assets/js/modernizr.js', array(), true);
    wp_enqueue_script('pace', get_stylesheet_directory_uri() . '/assets/js/pace.js', array(), true);
    wp_enqueue_script('jqc', get_stylesheet_directory_uri() . '/assets/js/jquery.carouFredSel-6.2.1-packed.js', array(), true);

global $wp_query;
wp_localize_script( 'ajax-pagination', 'ajaxpagination', array(
	'ajaxurl' => admin_url( 'admin-ajax.php' ),
	'query_vars' => json_encode( $wp_query->query )
));

}
add_action('wp_enqueue_scripts', 'register_styles'); 

add_action( 'wp_ajax_nopriv_ajax_load_portofolio', 'my_ajax_load_portofolio' );
add_action( 'wp_ajax_ajax_load_portofolio', 'my_ajax_load_portofolio' );

function my_ajax_load_portofolio() {
    $parentcat = (int)$_POST['category'];
    $subcat = (int)$_POST['subcategory'];
    
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'portfolio',
        'orderby' => 'date',
        'order' => 'DESC',
      );

      $args['tax_query'] = [
          [
            'taxonomy' => 'categorii',   
            'field' => 'term_id',         
            'terms' => $parentcat,      
          ],
          [
            'taxonomy' => 'categorii',   
            'field' => 'term_id',         
            'terms' => $subcat,      
          ]
      ];

      $loop = new WP_Query( $args );

      ob_start();
      
      if(!empty($loop->posts)){
          include(get_stylesheet_directory().'/template-parts/portofolio-items.php');
      }else{
          include(get_stylesheet_directory().'/template-parts/portofolio-empty.php');
      }

      $content = ob_get_clean();

      echo $content;
      die(); 
}
 
add_theme_support( 'title-tag' );
add_theme_support('post-thumbnails');    

function activate_menu() {
    add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'New Menu'),
    ));
}

add_action('init', 'activate_menu');

add_filter( 'excerpt_length', function($length) {
    return 15;
}, PHP_INT_MAX );


    function portfolio_cpt(){

        $args = array(

            'labels' => array(
                'name' => 'Portfolio',
                'singular_name' => 'Project'
            ),

            'public' => true,
            'has_archive' => true,
            'supports' => array ('title', 'editor', 'thumbnail', 'custom-fields', 'author'),
            'menu_icon' => 'dashicons-portfolio',
            'rewrite' => array('slug' => 'portfolio'),
            'show_ui' => true,
        );

        register_post_type('portfolio', $args);
    }

    add_action('init', 'portfolio_cpt');


    function custom_categories(){

        $args = array(

            'labels' => array(

                'name' => 'Categories',
                'singular_name' => 'Category'
            ),
            'public' => true,
            'hierarchical' => true,
        );
        register_taxonomy('categorii', array('portfolio'), $args);
    }
    add_action('init', 'custom_categories');  

    function dd($data, $die = false) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        if ($die) {
            die();
        }
    }