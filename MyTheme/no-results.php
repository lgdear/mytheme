<article id="post-0" class="post no-results not-found">
	<header class="entry-header">
		<h1 class="entry-title"><?php _e( '웹페이지를 찾을 수 없습니다.', 'MyTheme' ); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p>
			    <?php printf( __( '첫번째 게시물을 작성하시겠습니까? <a href="%1$s">여기에서 작성하십시오</a>.', 'MyTheme' ), 
			         admin_url( 'post-new.php' ) ); ?>
			</p>
		<?php elseif ( is_search() ) : ?>
			<p>
			    <?php _e( '검색 결과가 없습니다. 다른 검색어로 찾아보시기 바랍니다.', 'MyTheme' ); ?>
			</p>
			<?php get_search_form(); ?>
		<?php else : ?>
			<p><?php _e( '지정한 웹페이지가 없습니다. 검색어로 찾아보시기 바랍니다.', 'MyTheme' ); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div><!-- .entry-content -->
</article><!-- #post-0 .post .no-results .not-found -->
