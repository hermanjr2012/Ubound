<?php
/**
 * Widget admin template
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');
?>

<p><label for="<?php echo $this->get_field_id('image'); ?>"><?php _e('', 'image_widget'); ?></label>
<?php
	$media_upload_iframe_src = "media-upload.php?type=image&post_id=0&widget_id=".$this->id; //NOTE #1: the widget id is added here to allow uploader to only return array if this is used with image widget so that all other uploads are not harmed.
	$image_upload_iframe_src = apply_filters('image_upload_iframe_src', "$media_upload_iframe_src");
	$image_title = __(($instance['image'] ? 'Change Image' : 'Add Image'), 'image_widget');
?><br />
<a href="<?php echo $image_upload_iframe_src; ?>&TB_iframe=true" id="add_image-<?php echo $this->get_field_id('image'); ?>" class="thickbox-image-widget" title='<?php echo $image_title; ?>' onClick="imageWidget.setActiveWidget('<?php echo $this->id; ?>');return false;" style="text-decoration:none"><img src='images/media-button-image.gif' alt='<?php echo $image_title; ?>' align="absmiddle" /> <?php echo $image_title; ?></a>
<div id="display-<?php echo $this->get_field_id('image'); ?>"><?php
if ($instance['imageurl']) {
	echo "<img src=\"{$instance['imageurl']}\" alt=\"{$instance['title']}\" style=\"";
		if ($instance['width'] && is_numeric($instance['width'])) {
			echo "max-width: {$instance['width']}px;";
		}
		if ($instance['height'] && is_numeric($instance['height'])) {
			echo "max-height: {$instance['height']}px;";
		}
		echo "\"";
		if (!empty($instance['align']) && $instance['align'] != 'none') {
			echo " class=\"align{$instance['align']}\"";
		}
		echo " />";
}
?></div>
<br clear="all" />
<input id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('image'); ?>" type="hidden" value="<?php echo $instance['image']; ?>" />
</p>

<p><label for="<?php echo $this->get_field_id('width'); ?>"><?php _e('Width:', 'image_widget'); ?></label>
<input id="<?php echo $this->get_field_id('width'); ?>" name="<?php echo $this->get_field_name('width'); ?>" type="text" value="<?php echo esc_attr(strip_tags($instance['width'])); ?>" onchange="imageWidget.changeImgWidth('<?php echo $this->id; ?>')" /></p>

<p><label for="<?php echo $this->get_field_id('height'); ?>"><?php _e('Height:', 'image_widget'); ?></label>
<input id="<?php echo $this->get_field_id('height'); ?>" name="<?php echo $this->get_field_name('height'); ?>" type="text" value="<?php echo esc_attr(strip_tags($instance['height'])); ?>" onchange="imageWidget.changeImgHeight('<?php echo $this->id; ?>')" /></p>


<p><label for="<?php echo $this->get_field_id('alt'); ?>"><?php _e('Alternate Text:', 'image_widget'); ?></label>
<input id="<?php echo $this->get_field_id('alt'); ?>" name="<?php echo $this->get_field_name('alt'); ?>" type="text" value="<?php echo esc_attr(strip_tags($instance['alt'])); ?>" /></p>