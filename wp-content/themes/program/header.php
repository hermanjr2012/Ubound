<!DOCTYPE html>

<html>
<head>
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link href="<?php bloginfo('stylesheet_directory');?>/style.css" rel="stylesheet" />
    <?php if(get_post_meta($post->ID, 'cmb_select_theme', true )){
            $meta = get_post_meta($post->ID, 'cmb_select_theme', true );
    ?>
        <link href="<?php bloginfo( 'template_url' );?>/assets/css/<?php echo $meta?>.css" rel="stylesheet" />
    <?php } else{?>
        <?php $the_color=strlen(get_option('re_color_scheme'))>0 ? get_option('re_color_scheme') : 'art' ; ?>
        <link href="<?php bloginfo( 'template_url' );?>/assets/css/<?php echo $the_color?>.css" rel="stylesheet" />
    <?php }?>
    
    <?php if(get_post_meta($post->ID, 'cmb_select_theme', true )){
            $meta = get_post_meta($post->ID, 'cmb_select_theme', true );
            
            $the_color = $meta;
            
            } else{
            
                $the_color=strlen(get_option('re_color_scheme'))>0 ? get_option('re_color_scheme') : 'art' ;
            
            }
    ?>
    
    <?php wp_head(); ?>
    

    <script type="text/javascript">
     $(function() {
            var offset = $("#widget-forms-wrap").offset();
            var topPadding = 200;
            $(window).scroll(function() {
                if ($(window).scrollTop() > offset.top) {
                    $("#widget-forms-wrap").stop().animate({
                        marginTop: $(window).scrollTop() - offset.top + topPadding
                    },50);
                    
                    
                } else {
                    $("#widget-forms-wrap").stop().animate({
                        marginTop: 0
                    });
                };
            });
        });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#widget-forms').corner();
            
            $('#formstep2submit').val('');
            $('.wpcf7').addClass('school-form-widget');
            
           
                    $('.cont-links').fancybox({
                        maxWidth	: 790,
                        maxHeight	: 600,
                        fitToView	: false,
                        width		: '70%',
                        height		: '70%',
                        autoSize	: false,
                        closeClick	: false,
                        openEffect	: 'fade',
                        closeEffect	: 'fade'
                    }).mouseover(function () {
                $(this).click();
            });
                    
            $('#formstep1next').click(function(){
                if( !this.value ) {
                    $(this).parents('p').addClass('warning');
                }
            });
            
        });
    </script>


</head>

<body>
    <!--start header-->
    <div id="header-wrap">
        <div id="header">
            <div id="headline">
                <h1 <?php if(get_post_meta($post->ID, 'cmb_page_headline_color', true )){echo 'style="color:'.get_post_meta($post->ID, 'cmb_page_headline_color', true ).'"';}else{}?> >
                    <?php if(get_post_meta($post->ID, 'cmb_page_headline', true )){echo get_post_meta($post->ID, 'cmb_page_headline', true );}else{echo get_option('re_headline');} ?>
                </h1>
            </div>
            <div id="logo">
                <img src="<?php bloginfo('template_url');?>/assets/images/<?php echo $the_color; ?>/logo.png" alt="Logo">
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div id="head-divider" style="background:<?php echo get_option('re_divider'); ?>"></div>
    <div class="clearfix"></div>
    <!--end header-->