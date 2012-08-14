<?php
/**
 * Widget admin template
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');
?>
<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'post_interest'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr(strip_tags($instance['title'])); ?>"/></p>

<p><label for="<?php echo $this->get_field_id('image'); ?>"><?php _e('Image:', 'post_interest'); ?></label>
<?php
	$media_upload_iframe_src = "media-upload.php?type=image&post_id=0&widget_id=".$this->id; //NOTE #1: the widget id is added here to allow uploader to only return array if this is used with image widget so that all other uploads are not harmed.
	$image_upload_iframe_src = apply_filters('image_upload_iframe_src', "$media_upload_iframe_src");
	$image_title = __(($instance['image'] ? 'Change Image' : 'Add Image'), 'post_interest');
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
<input id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('image'); ?>" type="hidden" />
</p>


<p><label for="<?php echo $this->get_field_id('cont_heading'); ?>"><?php _e('Tag Line:', 'post_interest'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('cont_heading'); ?>" name="<?php echo $this->get_field_name('cont_heading'); ?>" type="text" value="<?php echo esc_attr(strip_tags($instance['cont_heading'])); ?>" /></p>

<p><label for="<?php echo $this->get_field_id('description'); ?>"><?php _e('Content:', 'post_interest'); ?></label>
<textarea rows="8" class="widefat" value="<?php echo esc_attr(strip_tags($instance['description'])); ?>" id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>"><?php echo format_to_edit($instance['description']); ?></textarea></p>

<!--<p><label for="<?php echo $this->get_field_id('cust_url'); ?>"><?php _e('Custom Url:', 'post_interest'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('cust_url'); ?>" name="<?php echo $this->get_field_name('cust_url'); ?>" type="text" value="<?php echo esc_attr(strip_tags($instance['cust_url'])); ?>" /></p>-->
<!--<p>
<label for="<?php echo $this->get_field_id( 'cust_url' ); ?>"> <?php echo __( 'Link To Post:', 'post_interest' ) ?>
				<select class="widefat" id="<?php echo $this->get_field_id( 'cust_url' ); ?>" name="<?php echo $this->get_field_name( 'cust_url' ); ?>">
				<?php query_posts('orderby=ID&order=ASC&showposts=-1');
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					$currentID = get_the_ID();
					if( $currentID == $custom_post_id )
						$extra = 'selected' and
						$widgetExtraTitle = get_the_title();
					else
						$extra = '';
						echo '<option value="'.$currentID.'" '.$extra.'>'.get_the_title().'</option>';
					endwhile; else:
					echo '<option value="empty">' . __( 'No content blocks available', 'post_interest' ) . '</option>';
				endif; ?>
				</select>
			</label>
</p>-->

<p>
        <label for="<?php echo $this->get_field_id('cust_url'); ?>"><?php _e('Read More Link:', 'post_interest'); ?></label>
        <?php wp_dropdown_pages(array('id' => $this->get_field_id('cust_url'),'name' => $this->get_field_name('cust_url'), 'selected' => $instance['cust_url'])); ?>
    </p>

			
<p><label for="<?php echo $this->get_field_id('width'); ?>"><?php _e('Width:', 'post_interest'); ?></label>
<input id="<?php echo $this->get_field_id('width'); ?>" name="<?php echo $this->get_field_name('width'); ?>" type="text" value="<?php echo esc_attr(strip_tags($instance['width'])); ?>" onchange="imageWidget.changeImgWidth('<?php echo $this->id; ?>')" /></p>

<p><label for="<?php echo $this->get_field_id('height'); ?>"><?php _e('Height:', 'post_interest'); ?></label>
<input id="<?php echo $this->get_field_id('height'); ?>" name="<?php echo $this->get_field_name('height'); ?>" type="text" value="<?php echo esc_attr(strip_tags($instance['height'])); ?>" onchange="imageWidget.changeImgHeight('<?php echo $this->id; ?>')" /></p>

<p><label for="<?php echo $this->get_field_id('alt'); ?>"><?php _e('Alternate Text:', 'post_interest'); ?></label>
<input id="<?php echo $this->get_field_id('alt'); ?>" name="<?php echo $this->get_field_name('alt'); ?>" type="text" value="<?php echo esc_attr(strip_tags($instance['alt'])); ?>" /></p>