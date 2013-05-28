<?php get_header(); ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <?php if ( have_posts() ) : ?>
                <?php if ( ! function_exists( 'wp_pagenavi' ) ) : ?>
                   <?php MyTheme_content_nav( 'nav-above' ); ?>
                <?php endif; ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
                <hr> <!-- 콘텐츠 사이의 구분선 넣기 -->
                <?php endwhile; ?>
                
                <?php if ( ! function_exists( 'wp_pagenavi' ) ) : ?>
                    <?php MyTheme_content_nav( 'nav-below' ); ?>
                <?php endif; ?>
                <?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
            <?php else : ?> 
                <?php get_template_part( 'no-results', 'index' ); ?>
            <?php endif; ?>
            </div> <!-- #content -->
        </div> <!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
