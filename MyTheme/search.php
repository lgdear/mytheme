<?php get_header(); ?>

<section id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title">
				    <?php $search = get_search_query(); ?>
				    <?php printf( __( 'Search Results for: %s', 'MyTheme' ), 
				           '<span class="search-word">' . $search . '</span>' ); ?>
				</h1>
			</header> <!-- .page-header -->
                
            <?php if ( ! function_exists( 'wp_pagenavi' ) ) : ?>
    			<?php MyTheme_content_nav( 'nav-above' ); ?>
            <?php endif; ?>
				
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'search' ); ?>
                <hr> <!-- 콘텐츠 사이의 구분선 넣기 -->
			<?php endwhile; ?>
				
            <?php if ( ! function_exists( 'wp_pagenavi' ) ) : ?>
    			<?php MyTheme_content_nav( 'nav-below' ); ?>
            <?php endif; ?>

            <?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
				
		<?php else : ?>
			<?php get_template_part( 'no-results', 'search' ); ?>
		<?php endif; ?>
	</div> <!-- #content -->
</section> <!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>