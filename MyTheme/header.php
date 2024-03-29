<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_enqueue_script('mobilemenu', get_stylesheet_directory_uri() .'/js/jquery.mobilemenu.js'); ?> 
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <?php do_action( 'before' ); ?>
    <header id="masthead" class="site-header" role="banner">
        <hgroup>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" 
                rel="home"><?php bloginfo( 'name' ); ?></a>
            </h1>
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        </hgroup>

<!--- 헤더 이미지  -->
    <?php $header_image = get_header_image();
    if ( ! empty( $header_image ) ) { ?>
         <a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" 
                rel="home">
            <img src="<?php header_image(); ?>" 
                width="<?php echo get_custom_header()->width; ?>" 
                height="<?php echo get_custom_header()->height; ?>" alt="" />
         </a>
    <?php } ?>
<!--- 헤더 이미지  끝 -->

        <nav role="navigation" class="site-navigation main-navigation">
            <?php wp_nav_menu( array( 'container_id' => 'subnav', 'theme_location' => 'primary', 'menu_id'=>'web2feel' ,'menu_class'=>'sfmenu','fallback_cb'=> 'fallbackmenu' ) ); ?>
        </nav> <!-- .site-navigation  -->
    </header> <!-- #masthead  -->

    <div id="main" class="site-main">
