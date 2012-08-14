<!--FOOTER SECTION-->

<div class="footer-wrapper">
    <div class="footer-inner">
    	<div class="footer-left">
        	<div class="footer-logo"> <img src="<?php bloginfo( 'template_url' );?>/assets/images/main/logo-footer.png" /> </div>
        </div>
        <div class="footer-middle">
        	<div class="footer-social">
                <span class='st_facebook_large' displayText='Facebook'></span>
                <span class='st_twitter_large' displayText='Tweet'></span>
                <span class='st_linkedin_large' displayText='LinkedIn'></span>
                <span class='st_plusone_large' displayText='Google +1'></span>
            </div>
        </div>
        <div class="footer-right">
        	<div class="footer-tagline"> The Unbiased Authority for Online Higher Education </div>
        </div>
        <div class="footer-nav">
        	<!--<ul>
            	<li> <a href="#" class="active"> HOME </a> </li>
                <li> <a href="#"> DEGREE SEARCH </a> </li>
                <li> <a href="#"> FIND A CAREER </a> </li>
                <li> <a href="#"> COLLEGE ADVICE </a> </li>
                <li> <a href="#"> SEARCH BY STATE </a> </li>
                <li> <a href="#"> STUDENT TOOLS </a> </li>
            </ul>-->
	    <?php wp_nav_menu();?>
        </div>
        <div class="footer-copyright" align="center">
        	<a href="#">Privacy Policy</a> | 
            101 West Station Square Drive, Pittsburgh, PA 15219 | 
            <a href="#">Terms of Use</a>
        </div>
    </div>
</div>



<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-bdd6601-4566-fe1a-77fb-8b332b8fc23d"}); </script>
<script src="<?php bloginfo( 'template_url' );?>/assets/js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo( 'template_url' );?>/assets/js/jquery.tabify.source.js" type="text/javascript" charset="utf-8"></script>
<!--<script src="<?php bloginfo( 'template_url' );?>/assets/js/slider-home.js" type="text/javascript" ></script>-->

<script src="<?php bloginfo( 'template_url' );?>/assets/js/jquery.colorbox.js"></script>
<script src="<?php bloginfo( 'template_url' );?>/assets/js/jquery.carouFredSel-5.6.3.js"></script>

<script type="text/javascript">

 <?php echo get_option('re_ga_code'); ?>
  
  $(document).ready(function () {
	$('#form-menu').tabify();
	$('#popular-menu').tabify();
	
	$("#foo2").carouFredSel({
	circular: false,
	infinite: true,
	auto 	: true,
	pagination	: "#foo2_pag"
});
    
  });
  
    $(function() {	
	$('#st-accordion').accordion({
		oneOpenedItem	: true,
		open: 0
	});		
    });
    
    $(function() {	
	$('#sec-accordion').accordion({
		oneOpenedItem	: true,
		open: 0
	});		
    });
    
    
    // Speed of the automatic slideshow
var slideshowSpeed = 6000;

// Variable to store the images we need to set as background
// which also includes some text and url's.
var photos = [
	      
	      <?php query_posts(array('post_type' => 'slider'));?>
	      <?php if(have_posts()) : while(have_posts()) : the_post();?>
	      <?php
				$dom = simplexml_load_string(get_the_post_thumbnail());
				$src = $dom->attributes()->src;
	       ?>
	      {
		"title" : "<?php the_title(); ?>",
		"image" : "<?php echo $src ?>",
		"url" : "<?php echo the_permalink(); ?>",
		"firstline" : "Or still busy at",
		"secondline" : "work?"
	},
	
	      <?php endwhile; endif; ?>
];



$(document).ready(function() {
		
	// Backwards navigation
	$("#back").click(function() {
		stopAnimation();
		navigate("back");
	});
	
	// Forward navigation
	$("#next").click(function() {
		stopAnimation();
		navigate("next");
	});
	
	var interval;
	$("#control").toggle(function(){
		stopAnimation();
	}, function() {
		// Change the background image to "pause"
		$(this).css({ "background-image" : "url(<?php bloginfo( 'template_url' );?>/assets/images/slider/btn_pause.png)" });
		
		// Show the next image
		navigate("next");
		
		// Start playing the animation
		interval = setInterval(function() {
			navigate("next");
		}, slideshowSpeed);
	});
	
	
	var activeContainer = 1;	
	var currentImg = 0;
	var animating = false;
	var navigate = function(direction) {
		// Check if no animation is running. If it is, prevent the action
		if(animating) {
			return;
		}
		
		// Check which current image we need to show
		if(direction == "next") {
			currentImg++;
			if(currentImg == photos.length + 1) {
				currentImg = 1;
			}
		} else {
			currentImg--;
			if(currentImg == 0) {
				currentImg = photos.length;
			}
		}
		
		// Check which container we need to use
		var currentContainer = activeContainer;
		if(activeContainer == 1) {
			activeContainer = 2;
		} else {
			activeContainer = 1;
		}
		
		showImage(photos[currentImg - 1], currentContainer, activeContainer);
		
	};
	
	var currentZindex = 0;
	var showImage = function(photoObject, currentContainer, activeContainer) {
		animating = true;
		
		// Make sure the new container is always on the background
		
		// Set the background image of the new active container
		$("#headerimg" + activeContainer).css({
			"background-image" : "url(" + photoObject.image + ")",
			"display" : "block",
			"z-index" : currentZindex
		});
		
		// Hide the header text
		$("#headertxt").css({"display" : "none"});
		
		// Set the new header text
		$("#firstline").html(photoObject.firstline);
		$("#secondline")
			.attr("href", photoObject.url)
			.html(photoObject.secondline);
		$("#pictureduri")
			.attr("href", photoObject.url)
			.html(photoObject.title);
		
		
		// Fade out the current container
		// and display the header text when animation is complete
		$("#headerimg" + currentContainer).fadeOut(function() {
			setTimeout(function() {
				$("#headertxt").css({"display" : "block"});
				animating = false;
			}, 500);
		});
	};
	
	var stopAnimation = function() {
		// Change the background image to "play"
		$("#control").css({ "background-image" : "url(<?php bloginfo( 'template_url' );?>/assets/images/slider/btn_play.png)" });
		
		// Clear the interval
		clearInterval(interval);
	};
	
	// We should statically set the first image
	navigate("next");
	
	// Start playing the animation
	interval = setInterval(function() {
		navigate("next");
	}, slideshowSpeed);
	
});

</script>
<?php wp_footer();?>
</body>
</html>