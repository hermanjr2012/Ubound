<?php
/**
 * Widget template. This template can be overriden using the "sp_template_image-widget_widget.php" filter.
 * See the readme.txt file for more info.
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');
global $post;
if(get_post_meta($post->ID, 'cmb_link_colors', true )){
	$lst = 'style="color:'. get_post_meta($post->ID, 'cmb_link_colors', true ). '"';
} else{
	$lst = '';
}
echo $before_widget;
echo '<li>';
if ( !empty( $title ) ) { echo '<a '. $lst .'href="#">' . $title . '<span class="st-arrow">Open or Close</span></a>'; }
echo '<div class="st-content">';
	echo '<div class="section-left-main">';
		echo '<div class="image-shadow">';
			echo '<div class="image-background">';
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
			echo '</div>';
		echo '</div>';
	echo '</div>';
	echo '<div class="section-right-main">';
		echo '<div class="padding-bottom">';
			echo '<b><em>'.$cont_heading.'</em></b>';
		echo '</div>';
	if ( !empty( $description ) ) {
		$text = apply_filters( 'widget_text', $description, $args, $instance );
		echo wpautop( $text );
	} ?>
	<div align="right">
                                	<a href="<?php echo get_permalink($cust_url); ?>" class="ntd"><div class="button">LEARN MORE</div></a>
                                </div>
	<?php
	echo '</div>';
echo '</div>';
echo '</li>';
echo $after_widget;
?>