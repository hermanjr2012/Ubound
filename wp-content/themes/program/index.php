<?php get_header('main_head'); ?>
    <!--HOMEPAGE SLIDER SECTION-->
    
    <div class="slider-wrapper pt">
        <div class="slider-container">
        	<div id="headerimgs">
				<div id="headerimg1" class="headerimg"></div>
				<div id="headerimg2" class="headerimg"></div>
			</div>
        	<div id="headernav-outer">
                <div id="headernav">
                    <div id="back" class="btn"></div>
                    <div id="control" class="btn"></div>
                    <div id="next" class="btn"></div>
                </div>
            </div>
            <div id="headertxt">
                <p class="pictured">
                    Learn More About:
                    <a href="#" id="pictureduri"></a>
                </p>
            </div>
            
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
        
        	<!--FIND, COMPARE, CONNECT SECTION-->
        
        	<div class="callout-container">
                <a href="#"><div class="fl"> <img src="<?php bloginfo( 'template_url' );?>/assets/images/main/icon-search.png" /> </div> <div class="callout-find"> <h1 class="black">FIND</h1> </div> </a>              	<a href="#"><div class="fl"> <img src="<?php bloginfo( 'template_url' );?>/assets/images/main/icon-compare.png" /> </div> <div class="callout-compare"> <h1 class="black">COMPARE</h1> </div></a>                <a href="#"><div class="fl"> <img src="<?php bloginfo( 'template_url' );?>/assets/images/main/icon-connect.png" /> </div> <div class="callout-connect"> <h1 class="black">CONNECT</h1> </div></a>            </div>
            
            <!--POPULAR AREAS SECTION--> 
            
            <ul id="popular-menu" class="popular-menu">
          		<li class="active"><a href="#popular-degrees">POPULAR DEGREES</a></li>
          		<li><a href="#top-careers">TOP CAREERS</a></li>
                <li><a href="#best-schools">BEST SCHOOLS</a></li>
                <li><a href="#trending-industries">TRENDING INDUSTRIES</a></li>
        	</ul> 
                     	
            <div id="popular-degrees" class="popular-content">
            	<div class="popular-content-inside">
					<div class="popular-column">
						<table cellpadding="0" cellspacing="0">
							<tr class="even">
								<td><b>1.</b></td><td align="left"> <a href="#">Popular Degree 1</a> </td>								
							</tr>
							<tr>
								<td><b>2.</b></td><td align="left"> <a href="#">Popular Degree 2</a> </td>								
							</tr>
							<tr class="even">
								<td><b>3.</b></td><td align="left"> <a href="#">Popular Degree 3</a> </td>								
							</tr>
							<tr>
								<td><b>4.</b></td><td align="left"> <a href="#">Popular Degree 4</a> </td>								
							</tr>
							<tr class="even">
								<td><b>5.</b></td><td align="left"> <a href="#">Popular Degree 5</a> </td>								
							</tr>
						</table>
					</div>
					<div class="popular-column">
						<div class="image-callout"> <!--ABILITY TO INPUT IMAGE--> </div>
					</div>
                </div>
            </div>
            
            <div id="top-careers" class="popular-content">
            	<div class="popular-content-inside">
					<div class="popular-column">
						<table cellpadding="0" cellspacing="0">
							<tr class="even">
								<td><b>1.</b></td><td align="left"> <a href="#">Popular Career 1</a> </td>								
							</tr>
							<tr>
								<td><b>2.</b></td><td align="left"> <a href="#">Popular Career 2</a> </td>								
							</tr>
							<tr class="even">
								<td><b>3.</b></td><td align="left"> <a href="#">Popular Career 3</a> </td>								
							</tr>
							<tr>
								<td><b>4.</b></td><td align="left"> <a href="#">Popular Career 4</a> </td>								
							</tr>
							<tr class="even">
								<td><b>5.</b></td><td align="left"> <a href="#">Popular Career 5</a> </td>								
							</tr>
						</table>
					</div>
					<div class="popular-column">
						<div class="image-callout"> <!--ABILITY TO INPUT IMAGE--> </div>
					</div>
                </div>
            </div>
            
            <div id="best-schools" class="popular-content">
            	<div class="popular-content-inside">
					<div class="popular-column">
						<table cellpadding="0" cellspacing="0">
							<tr class="even">
								<td><b>1.</b></td><td align="left"> <a href="#">Best School 1</a> </td>								
							</tr>
							<tr>
								<td><b>2.</b></td><td align="left"> <a href="#">Best School 2</a> </td>								
							</tr>
							<tr class="even">
								<td><b>3.</b></td><td align="left"> <a href="#">Best School 3</a> </td>								
							</tr>
							<tr>
								<td><b>4.</b></td><td align="left"> <a href="#">Best School 4</a> </td>								
							</tr>
							<tr class="even">
								<td><b>5.</b></td><td align="left"> <a href="#">Best School 5</a> </td>								
							</tr>
						</table>
					</div>
					<div class="popular-column">
						<div class="image-callout"> <!--ABILITY TO INPUT IMAGE--> </div>
					</div>
                </div>
            </div>
			
			<div id="trending-industries" class="popular-content">
            	<div class="popular-content-inside">
					<div class="popular-column">
						<table cellpadding="0" cellspacing="0">
							<tr class="even">
								<td><b>1.</b></td><td align="left"> <a href="#">Trending Industry 1</a> </td>								
							</tr>
							<tr>
								<td><b>2.</b></td><td align="left"> <a href="#">Trending Industry 2</a> </td>								
							</tr>
							<tr class="even">
								<td><b>3.</b></td><td align="left"> <a href="#">Trending Industry 3</a> </td>								
							</tr>
							<tr>
								<td><b>4.</b></td><td align="left"> <a href="#">Trending Industry 4</a> </td>								
							</tr>
							<tr class="even">
								<td><b>5.</b></td><td align="left"> <a href="#">Trending Industry 5</a> </td>								
							</tr>
						</table>
					</div>
					<div class="popular-column">
						<div class="image-callout"> <!--ABILITY TO INPUT IMAGE--> </div>
					</div>
                </div>
            </div>
            
            <!--ACCREDITED SCHOOLS SECTION-->
			
			<div class="section-title-container">
                <div class="fl"> <img src="<?php bloginfo( 'template_url' );?>/assets/images/main/icon-accredited.png" /> </div>
                <div class="section-title-schools"> <h2 class="black">ACCREDITED SCHOOLS</h2> </div>
			</div>
	    <div class="section-container-full">
            	<div class="section-container-full-inside">
                    <div class="container">            
                        <!--<div class="slides">
                            <div class="slides_container">
                                <div class="slide">
                                    <div class="slide-schools">&nbsp;</div>
				    <div class="slide-schools">&nbsp;</div>
                                    <div class="slide-schools">&nbsp;</div>
                                </div>
                                <div class="slide">
                                    <div class="slide-schools">&nbsp;</div>
				    <div class="slide-schools">&nbsp;</div>
                                    <div class="slide-schools">&nbsp;</div>
                                </div>
                                <div class="slide">
                                    <div class="slide-schools">&nbsp;</div>
				    <div class="slide-schools">&nbsp;</div>
                                    <div class="slide-schools">&nbsp;</div>
                                </div>                               
                            </div>
                        </div>           -->
                        <div id="foo2">
                                <img src="<?php bloginfo( 'template_url' );?>/assets/images/test.jpg" alt="basketball" width="185" height="90" />
                                <img src="<?php bloginfo( 'template_url' );?>/assets/images/test.jpg" alt="basketball" width="185" height="90" />
                                <img src="<?php bloginfo( 'template_url' );?>/assets/images/test.jpg" alt="basketball" width="185" height="90" />
                                <img src="<?php bloginfo( 'template_url' );?>/assets/images/test.jpg" alt="basketball" width="185" height="90" />
                                <img src="<?php bloginfo( 'template_url' );?>/assets/images/test.jpg" alt="basketball" width="185" height="90" />
                                <img src="<?php bloginfo( 'template_url' );?>/assets/images/test.jpg" alt="basketball" width="185" height="90" />
                                <img src="<?php bloginfo( 'template_url' );?>/assets/images/test.jpg" alt="basketball" width="185" height="90" />
                                <img src="<?php bloginfo( 'template_url' );?>/assets/images/test.jpg" alt="basketball" width="185" height="90" />
                                <img src="<?php bloginfo( 'template_url' );?>/assets/images/test.jpg" alt="basketball" width="185" height="90" />
                                <img src="<?php bloginfo( 'template_url' );?>/assets/images/test.jpg" alt="basketball" width="185" height="90" />
                                <img src="<?php bloginfo( 'template_url' );?>/assets/images/test.jpg" alt="basketball" width="185" height="90" />
                                <img src="<?php bloginfo( 'template_url' );?>/assets/images/test.jpg" alt="basketball" width="185" height="90" /> 
                        </div>
                        <div class="clearfix"></div>
                        <div class="pagination" id="foo2_pag"></div>
                    </div>
                </div>
            </div>
            
            <!--SCHOLARSHIPS SECTION-->
            
            <div class="section-container-left">
                <div class="section-title-container">
                    <div class="fl"> <img src="<?php bloginfo( 'template_url' );?>/assets/images/main/icon-scholarship.png" /> </div>
                    <div class="section-title-schools"> <h2 class="black">SCHOLARSHIPS</h2> </div>
                </div>
                <div class="section-content-container">
                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra nunc quis est semper sed consequat mi tristique. 
                    <div align="right">
                    	<a href="#" class="ntd"><div class="button">LEARN MORE</div></a>
                    </div>
                </div>
            </div>
            
            <!--NEWSLETTER SECTION-->
            
            <div class="section-container-right">
                <div class="section-title-container">
                    <div class="fl"> <img src="<?php bloginfo( 'template_url' );?>/assets/images/main/icon-newsletter.png" /> </div>
                    <div class="section-title-schools"> <h2 class="black">NEWSLETTER</h2> </div>
                </div>
                <div class="section-content-container">
                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra nunc quis est semper sed consequat mi tristique. 
                    <div align="right">
                    	<a href="#" class="ntd"><div class="button">SIGN UP</div></a>
                    </div>
                </div>
            </div>
            
            <!--STUDENT TOOLS SECTION-->
			
			<div class="section-title-container">
                <div class="fl"> <img src="<?php bloginfo( 'template_url' );?>/assets/images/main/icon-tools.png" /> </div>
                <div class="section-title-schools"> <h2 class="black">STUDENT TOOLS</h2> </div>
			</div>
			<div class="section-container-full">
            	<div class="section-container-full-inside">
                    <div class="student-tools"> <!--School Comparison Tool--> </div>
                    <div class="student-tools"> <!--Financial Aid Calculator--> </div>
                    <div class="student-tools"> <!--Scholarship Search--> </div>
                </div>
            </div>
            
            <!--ABOUT US SECTION-->
			
			<div class="section-title-container">
                <div class="fl"> <img src="<?php bloginfo( 'template_url' );?>/assets/images/main/icon-about.png" /> </div>
                <div class="section-title-schools"> <h2 class="black">ABOUT US</h2> </div>
			</div>
            <div class="section-content-container">
            	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra nunc quis est semper sed consequat mi tristique.
                <div align="right">
                	<a href="#" class="ntd"><div class="button">LEARN MORE</div></a>
                </div>
            </div> 
            
        </div>
    </div>
</div>

<?php get_footer('main_foot'); ?>