<?php
/**
 * Widget admin template
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');
?>
<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'link_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr(strip_tags($instance['title'])); ?>" /></p>

<!--<p><label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('link:', 'link_widget'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('Link'); ?>" name="<?php echo $this->get_field_name('link'); ?>" type="text" value="<?php echo esc_attr(strip_tags($instance['link'])); ?>" /></p>-->

<p>
        <label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('link:', 'link_widget'); ?></label>
        <?php wp_dropdown_pages(array('id' => $this->get_field_id('link'),'name' => $this->get_field_name('link'), 'selected' => $instance['link'])); ?>
    </p>
