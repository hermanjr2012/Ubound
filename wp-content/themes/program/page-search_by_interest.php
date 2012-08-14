<?php
/*
 * Template Name: Degree Search by interest Template
*/
?>
<?php get_header('main_head'); ?>
     <!--HOMEPAGE SLIDER SECTION-->
    
    <div class="slider-wrapper pt">
        <div class="slider-container">
            <div class="u-title"><h1 class="black"><?php the_title(); ?></h1></div>
        	<!--COLLEGE SEARCH FORM SECTION-->
            
            <div class="form-container">
            	<div class="form-container-inner">
                	<h1 align="center">COLLEGE SEARCH</h1>
                    
                    <ul id="form-menu" class="form-menu">
          				<li class="active"><a href="#degree">BY DEGREE</a></li>
          				<li><a href="#career">BY CAREER</a></li>
        			</ul>
                    
                    <!--SEARCH BY DEGREE SECTION-->
                    
                    <div id="degree" class="form-content">
                        <form name="occupation_interest" action="/search/career/">  
                                         
                        <div class="form-field">        
                            <select name="career_path">
                                <option value="0">- Select Your Industry -</option>
                                <option value="Arts and Design">Art</option>
                                <option value="Business Administration">Business Administration</option>
                                <option value="Computers and IT">Information Technology</option>
                                <option value="Education">Education</option>
                                <option value="General Education and Social Sciences">Humanities</option>
                                <option value="Healthcare and Medicine">Healthcare Industry</option>
                                <option value="Hospitality and Services">Service Industry</option>
                                <option value="Justice and Law">Criminal Justice</option>
                                <option value="Nursing">Nursing</option>
                                <option value="Politics and Public Services">Public Sector</option>
                                <option value="Psychology">Mental Health Industry</option>
                                <option value="Science and Engineering">Science &amp; Engineering</option>
                            </select> 
                         </div>
                         
                         <div class="form-field">        
                            <select name="occupation">
                                <option value="0">- Select an Occupation -</option>
                                <option value="1">Dynamic Field</option>                          
                            </select> 
                         </div>
                         
                         <div class="form-field">        
                            <select name="degree">
                                <option value="0">- Select Your Desired Degree -</option>
                                <option value="associates">Associate's Degree</option>  
                                <option value="bachelors">Bachelor's Degree</option> 
                                <option value="masters">Master's Degree</option> 
                                <option value="doctorate">Doctorate</option>                      
                            </select> 
                         </div>
                         <div class="button-field" align="center">
                            <a href="#" class="ntd"><div class="search-button">FIND NOW</div></a>
                         </div>
                         </form>
                	</div>
                    
                    <!--SEARCH BY CAREER SECTION-->
                    
                    <div id="career" class="form-content">
                        <form name="career_search" action="/search/interests/">  
                                         
                        <div class="form-field">        
                            <select name="career_interest">
                                <option value="0">- Select Your Career -</option>
                                <option value="Arts and Design">Art</option>
                                <option value="Business Administration">Business Administration</option>
                                <option value="Computers and IT">Computers &amp; IT</option>
                                <option value="Education">Education</option>
                                <option value="General Education and Social Sciences">Humanities</option>
                                <option value="Healthcare and Medicine">Healthcare &amp; Medicine</option>
                                <option value="Hospitality and Services">Hospitality &amp; Services</option>
                                <option value="Justice and Law">Justice &amp; Law</option>
                                <option value="Liberal Arts">Liberal Arts</option>
                                <option value="Nursing">Nursing</option>
                                <option value="Politics and Public Services">Politics &amp; Public Services</option>
                                <option value="Psychology">Mental Health Industry</option>
                                <option value="Science and Engineering">Science &amp; Engineering</option>
                            </select> 
                         </div>
                         
                         <div class="form-field">        
                            <select name="interest">
                                <option value="0">- Select a Focus -</option>
                                <option value="1">Dynamic Field</option>                          
                            </select> 
                         </div>
                         
                         <div class="form-field">        
                            <select name="degree">
                                <option value="0">- Select Your Desired Degree -</option>
                                <option value="associates">Associate's Degree</option>  
                                <option value="bachelors">Bachelor's Degree</option> 
                                <option value="masters">Master's Degree</option> 
                                <option value="doctorate">Doctorate</option>                      
                            </select> 
                         </div>
                         <div class="button-field" align="center">
                            <a href="#" class="ntd"><div class="search-button">FIND NOW</div></a>
                         </div>
                         </form>
                	</div>		
                </div>  
            </div>
        </div>
    </div>    
</div>

<!--MAIN CONTENT SECTION-->

<div class="content-main-wrapper">
    <div class="content-main-left">
    	<div class="content-main-left-inside">
                          
            <!--ACCREDITED SCHOOLS SECTION-->
			<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
			<div class="section-tagline-container">
                <h2 class="black"><?php echo get_post_meta($post->ID,'cmb_tag_line',true); ?></h2>
                <?php while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
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
    </div>
</div>

<?php get_footer('main_foot'); ?>