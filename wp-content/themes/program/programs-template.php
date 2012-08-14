<?php
/*
 TEMPLATE NAME: Program template
*/
?>

<?php get_header(); ?>
    <!--start main body-->
    <div id="main-wrap">
        <div id="main">
            <div id="top-widget">
                <div id="banner-widget">
                    <?php if ( !function_exists('dynamic_sidebar')
                    || !dynamic_sidebar('Banner Widget') ) : ?>
                    <?php endif; ?>
                </div>
                <div id="widget-forms-wrap">
                    <div id="top-form"><h2 class="form-widget-title">GET STARTED NOW!</h2></div>
                    <div id="widget-forms" data-corner="bottom 0">
                        <?php if ( !function_exists('dynamic_sidebar')
                        || !dynamic_sidebar('Form Widget') ) : ?>
                        <?php endif; ?>
                    </div>  
                </div>
                <div class="clearfix"></div>
                <?php if(get_post_meta($post->ID, 'cmb_template_style', true ) === 'program'){ ?>
                <div id="posts-lists">
                    <div id="content-section">
                        <?php while(have_posts()) : the_post(); ?>
                        <?php the_content();?>
                        <h2>LEARN MORE ABOUT OUR PROGRAM AREAS IN:</h2>
                        <?php endwhile; ?>
                    </div>
                    <div id="st-accordion" class="st-accordion">
                        <ul>
                            <?php if ( !function_exists('dynamic_sidebar')
                            || !dynamic_sidebar('Posts Widgets') ) : ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <?php } else{?>
                    <div id="posts-lists">
                    <?php if ( !function_exists('dynamic_sidebar')
                        || !dynamic_sidebar('Posts Widgets') ) : ?>
                        <?php endif; ?>
                    </div>
                <?php } ?>
                 <div class="clearfix"></div>
            </div>            
        </div>
    </div>
    <!--end main body-->

<?php get_footer(); ?><?php get_footer(); ?>