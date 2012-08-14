<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="robots" content="index, follow">

<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<link href="" rel="shortcut icon" type="image/x-icon" />
<link href="<?php bloginfo( 'template_url' );?>/assets/css/main.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo( 'template_url' );?>/assets/css/generic.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo( 'template_url' );?>/assets/css/slider-home.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo( 'template_url' );?>/assets/css/accordian.css" rel="stylesheet" type="text/css"  />
<?php wp_head(); ?>
</head>

<body>
<div class="body-background">

	<!--TOP NAV BAR SECTION-->

    <div class="nav-top-wrapper">
        <div class="nav-top-inner">
            <div class="nav-top-links">
                <div class="pr">
                    <a href="#"> SCHOLARSHIPS </a> | <a href="#"> NEWSLETTER </a>
                </div>
            </div>
            <div class="nav-top-social">
                <div class="pt">
                    <span class='st_fblike_hcount' displayText='Facebook Like'></span>
                    <span class='st_twitter_hcount' displayText='Tweet'></span>
                    <span class='st_plusone_hcount' displayText='Google +1'></span>
                </div>
            </div>
        </div>
    </div>
    
    <!--LOGO AND SEARCH SECTION-->
    
    <div class="logo-wrapper">
        <div class="logo">
            <a href="#"> <img src="<?php bloginfo( 'template_url' );?>/assets/images/main/logo-main.png" /> </a>
        </div>
        <div class="tagline">
            FIND. COMPARE. CONNECT. 
        </div>
        <div class="search">
            <div class="connect">
                <a href="#"> GET CONNECTED >> </a>
            </div>
            <input type="text" style="width:250px;"/>
        </div>
    </div>
    
    <!--MAIN NAVIGATION SECTION-->
    
   <!-- <div class="nav-main-wrapper">
    	<ul id="nav-menu">
        	<a href="#" class="active"><li class="active drop"> HOME </li></a>
            <a href="#"><li class="drop"> DEGREE SEARCH </li></a>
            <a href="#"><li class="drop"> FIND A CAREER </li></a>
            <a href="#"><li class="drop"> COLLEGE ADVICE </li></a>
            <a href="#"><li class="drop"> SEARCH BY STATE </li></a>
            <a href="#"><li> STUDENT TOOLS </li></a>
        </ul>
    </div>-->
    <div class="nav-main-wrapper">
    <?php
	wp_nav_menu( array(
	    'container' =>false,
	    'menu_class' => 'nav',
	    'echo' => true,
	    'before' => '',
	    'after' => '',
	    'link_before' => '',
	    'link_after' => '',
	    'menu_id'    => 'nav-menu',
	    'depth' => 0,
	    'walker' => new description_walker())
	);
    ?>
    </div>