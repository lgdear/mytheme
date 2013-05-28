    </div> <!-- #main -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div id="footer-widget" class="bottom" >
            <ul>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer-1") ) : ?>  
                <?php endif; ?>
            </ul>
        </div> <!-- #footer-widget -->

        <div class="site-info">
            강남그린아카데미 &nbsp; 서울시 강남구 역삼동 817-18 정해빌딩 3층 &nbsp;
            Tel. 3448-1005 &nbsp;FAX 3482-1040 &nbsp;대표자:박은정 &nbsp; 
            <br>
            Copyright &copy; <?php echo date('Y');?> 
            <a href="<?php bloginfo('siteurl'); ?>" 
            title="<?php bloginfo('name'); ?>">
            <?php bloginfo('name'); ?></a>
            Website Design</a> by 
            <a href="http://foxmann.blog.me/" title="저녁놀">저녁놀</a>.
       </div> <!-- .site-info -->
    </footer> <!-- #colophon -->

    <?php wp_footer(); ?>
</div> <!-- #page -->
</body>
</html>
