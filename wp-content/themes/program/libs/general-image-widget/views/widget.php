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
if ( !empty( $title ) ) { echo '<h2 '. $tst .'>' . $title . '</h2>'; }
echo '<div class="clearfix"></div>';
echo '<div class="custom-content-wrap">';
echo '<div class="clearfix"></div>';
if ( !empty( $image ) ) {
	if ( $link ) {
		//echo '<a class="'.$this->widget_options['classname'].'-image-link" href="'.esc_url($link).'" target="'.esc_attr($linktarget).'">';
	}
	if ( $imageurl ) {
		echo '<img class="custom-content-img" src="'.esc_url($imageurl).'" style="';
		if ( !empty( $width ) && is_numeric( $width ) ) {
			echo "max-width: {$width}px;";
		}
		if ( !empty( $height ) && is_numeric( $height ) ) {
			echo "max-height: {$height}px;";
		}
		echo "\"";
		if ( !empty( $align ) && $align != 'none' ) {
			$align = esc_attr($align);
			echo " class=\"align{$align}\"";
		}
		if ( !empty( $alt ) ) {
			$alt = esc_attr($alt);
			echo " alt=\"{$alt}\"";
		} else {
			$title = esc_attr($title);
			echo " alt=\"{$title}\"";					
		}
		echo " />";
	}

	if ( $link ) { echo '</a>'; }
}
if ( !empty( $description ) ) {
	$text = apply_filters( 'widget_text', $description, $args, $instance );
	echo '<div class="'.$this->widget_options['classname'].'-description custom-content" >';
	echo wpautop( $text );			
	echo "</div>";
}
echo '<div class="clearfix"></div>';
echo '</div>';
echo $after_widget;
?>