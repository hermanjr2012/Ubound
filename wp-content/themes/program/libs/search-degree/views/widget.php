<?php
/**
 * Widget template. This template can be overriden using the "sp_template_image-widget_widget.php" filter.
 * See the readme.txt file for more info.
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');

echo $before_widget;
global $post;
if(get_post_meta($post->ID, 'cmb_post_title_color', true )){
	$tst = 'style="color:'. get_post_meta($post->ID, 'cmb_post_title_color', true ). '"';
} else{
	$tst = '';
}
echo '<div id="search-degree-link">';


?>
<span <?php echo $tst; ?> > <a href="<?php echo get_permalink($link); ?>"> <?php echo $title; ?> </a></span> 
</div>
<?php
echo $after_widget;
?>