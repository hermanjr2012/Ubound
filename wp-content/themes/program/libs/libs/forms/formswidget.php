<?php
class SchoolCustomWidgets extends WP_Widget
{
  function SchoolCustomWidgets()
  {
    $widget_ops = array('classname' => 'SchoolCustomWidgets', 'description' => 'Displays contact form' );
    $this->WP_Widget('SchoolCustomWidgets', 'Contact Form', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];
	$the_form = $instance['the_form'];
	
	$the_defaults[0]= '[contact-form-7 id="10" title="Contact form 1"]';
	$the_form = empty($fb_link) ? $the_defaults[0] : $fb_link;

?>
  <p>
  <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label> 
   <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" />
  </p>
  
  <p>
  <label for="<?php echo $this->get_field_id('the_form'); ?>">Contact Form</label> 
  <input class="widefat" id="<?php echo $this->get_field_id('the_form'); ?>" name="<?php echo $this->get_field_name('the_form'); ?>" type="text" value="<?php echo attribute_escape($the_form); ?>" />
  </p>  
    
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    $instance['the_form'] = $new_instance['the_form'];	
		
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
	$the_form = $instance['the_form'];

/* Title of widget (before and after defined by themes). */
     if ( $title )
			echo $before_title . $title . $after_title;
		if ( $the_form )
			echo do_shortcode($the_form);
 
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("SchoolCustomWidgets");') );?>