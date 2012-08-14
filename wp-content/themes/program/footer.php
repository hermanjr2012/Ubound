    <div class="clearfix"></div>
    <!--start footer-->
    <div id="footer" style="background:<?php echo get_option('re_footer_solid_background'); ?>">
        <!--start center footer-->
        <div id="footer-wrap">
            <div id="center-footer">
		<p class="disclaimer"><?php echo get_option('re_footer_disclaimer'); ?></p>
                <p class="copyright"><?php echo get_option('re_footer_text'); ?></p> 
                <ul id="footer-nav"><?php
$links = get_pages('include=31,34,36');

foreach($links as $i => $page)
	$links[$i] = '<li>|</li><li class="page-' . (is_page($page->ID) ? 'active' : 'item') . '"><a class="cont-links fancybox.ajax" href="' . get_page_link($page->ID) . '" title="' . attribute_escape(apply_filters('the_title', $page->post_title)) . '">' . apply_filters('the_title', $page->post_title) . '</a></li>';

echo implode($links);
?></ul>
            </div>
        </div>
        <!--end center footer-->
    </div>
    <!--end footer-->
    <?php wp_footer();?>
    <script type="text/javascript">
	$(function() {	
	$('#st-accordion').accordion({
		oneOpenedItem	: true
	});		
});
    </script>
    <script type="text/javascript">
	<?php echo get_option('re_ga_code'); ?>
    </script>
     
</body>
</html>