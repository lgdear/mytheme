<?php if ( post_password_required() ) return; ?>

<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                $count = get_comments_number();
                $title = "<span class='post-title'>" . get_the_title() . "</span>";
                printf( '%1$s에 %2$s개의 댓글이 있습니다.', $title, $count);
            ?>
        </h2>
        <ol class="commentlist">
            <?php wp_list_comments( array( 'callback' => 'MyTheme_comment' ) ); ?>
        </ol> <!-- .commentlist -->
    <?php endif; // have_comments() ?>

    <?php comment_form(); ?>
</div> <!-- #comments -->
