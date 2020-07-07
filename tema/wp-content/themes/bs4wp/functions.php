<?php 

if(!function_exists('bs4wp_carrega_scripts')){

    function bs4wp_carrega_scripts()
    {
        wp_enqueue_style('style',
            get_stylesheet_uri() );
    
        wp_enqueue_style('bootstrap',
            get_template_directory_uri() . '/assets/css/bootstrap.css');
    
        wp_enqueue_style('meu_estilo',
            get_template_directory_uri() . '/assets/css/style.css');
    
        wp_enqueue_script('popper', 
            get_template_directory_uri() . '/assets/js/popper.js', array('jquery'),
            false,
            true);
        
        wp_enqueue_script('bootstrap', 
            get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'),
            false,
            true);
    }
    add_action('wp_enqueue_scripts', 'bs4wp_carrega_scripts');
}


if(!function_exists('bs4wp_chama_titulo')){
    function bs4wp_chama_titulo()
    {
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'bs4wp_chama_titulo');
}

if ( ! function_exists( '_wp_render_title_tag' ) ){
    function bs4wp_exibe_titulo()
    {?>
        <title><?= wp_title('|', true, 'right'); ?></title>
    <?php
    }

    add_action('wp_head', 'bs4wp_exibe_titulo');
}

if(!function_exists('bs4wp_registra_navwalker')){
    function bs4wp_registra_navwalker()
    {
        if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
            return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php não encontrado', 'wp-bootstrap-navwalker' ) );
        } else {
            require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
        }
    }

    add_action('after_setup_theme', 'bs4wp_registra_navwalker');
}

if( !function_exists('bs4wp_registra_menu') ){
    function bs4wp_registra_menu()
    {
        register_nav_menus( array(
            'Principal' => __( 'Menu Principal', 'bs4wp' ),
        ) );
    }
    add_action('after_setup_theme', 'bs4wp_registra_menu');
}

?>