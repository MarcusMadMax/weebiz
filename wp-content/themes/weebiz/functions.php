<?php

    function register_resource() {
        register_nav_menu('main-menu', 'Main Menu' );
    }

    //Register post types Shows a new tab on the left of Wordpress
    $args = array(
        'public'    => true,
        'label'     => 'Home',
        'menu_icon' => 'dashicons-hammer',
    );
    register_post_type( 'home', $args );

        $args = array(
            'public'    => true,
            'label'     => 'Services',
            'menu_icon' => 'dashicons-hammer',
        );
        register_post_type( 'service', $args );

    add_action( 'init', 'register_resource' );


    function add_class_to_li( $classes, $item, $args ) {

        $classes[] = 'nav-item';
        return $classes;
    }
    add_filter( 'nav_menu_css_class' , 'add_class_to_li' , 10, 4 );


    function add_class_to_anchors( $atts ) {
        $atts['class'] = 'nav-link';
        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_class_to_anchors', 10 );


?>