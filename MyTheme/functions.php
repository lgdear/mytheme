<?php

if ( ! isset( $content_width ) )
    $content_width = 640; /* pixels */

//----------------------------
// 테마 셋업
//----------------------------
if ( ! function_exists( 'MyTheme_setup' ) ):                
function MyTheme_setup() {
    
    require( get_template_directory() . '/inc/template-tags.php' );
    require( get_template_directory() . '/inc/extras.php' );
    require( get_template_directory() . '/inc/customizer.php' );
    
    load_theme_textdomain( 'MyTheme', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
    
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'MyTheme' ),
        'secondary' => __( 'Secondary Menu', 'MyTheme' ),
    ) );
}
endif; // MyTheme_setup
add_action( 'after_setup_theme', 'MyTheme_setup' );

//----------------------------
// 위젯 영역 초기화
//----------------------------
function MyTheme_widgets_init() {
    register_sidebar( array(
        // 'name' => __( 'Primary Widget Area', 'MyTheme' ),
        'name' => '기본 위젯',
        'id' => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    register_sidebar( array(
        // 'name' => __( 'Secondary Widget Area', 'MyTheme' ),
        'name' => '보조 위젯',
        'id' => 'sidebar-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    
    register_sidebar(array(
        // 'name' => __( 'Footer Widget Area', 'MyTheme' ),
        'name' => 'Footer 위젯',
        'id' => 'footer-1',
        'before_widget' => '<footer id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</footer>',
        'before_title' => '<h3 class="footer-widget-title">',
        'after_title' => '</h3>',
    ));     
    
}
add_action( 'widgets_init', 'MyTheme_widgets_init' );

//----------------------------
// 테마 스크립트
//----------------------------
function MyTheme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
    }
}
add_action( 'wp_enqueue_scripts', 'MyTheme_scripts' );

//----------------------------
// 사용자 정의 배경
//----------------------------
function MyTheme_register_custom_background() {
    $args = array(
        'default-color' => 'e9e0d1',
    );
 
    $args = apply_filters( 'MyTheme_custom_background_args', $args );
 
    if ( function_exists( 'wp_get_theme' ) ) {
        add_theme_support( 'custom-background', $args );
    } else {
        define( 'BACKGROUND_COLOR', $args['default-color'] );
        define( 'BACKGROUND_IMAGE', $args['default-image'] );
        add_theme_support( 'custom-background', $args );
    }
}
add_action( 'after_setup_theme', 'MyTheme_register_custom_background' );

require( get_template_directory() . '/inc/custom-header.php' );
?>

