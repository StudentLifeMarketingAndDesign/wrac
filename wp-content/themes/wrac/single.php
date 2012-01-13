<?php

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();

?>

		<div id="container">
			
			<?php thematic_abovecontent(); ?>
			
			<div id="page_content">
		
    	        <?php 
    	        
    	        the_post();
    	        
    	        // create the navigation above the content
				thematic_navigation_above();
		
    	        // calling the widget area 'single-top'
    	        get_sidebar('single-top');
		
    	        // action hook creating the single post
    	        thematic_singlepost();
				
    	        // calling the widget area 'single-insert'
    	        //get_sidebar('single-insert');
		
    	        // create the navigation below the content
				//thematic_navigation_below();
		
    	        // calling the comments template
    	        //thematic_comments_template();
		
    	        // calling the widget area 'single-bottom'
    	        //get_sidebar('single-bottom');
    	        
    	        ?> 	        
    			
	        
				<div class="sb_header"><h1>Topics</h1></div>
	        	<div class="sidebar">
	        	<ul>
	        	<li class="large">Advocacy</li>
	        	<li class="large">Legal</li>
	        	<li class="large">Mental Health</li>
	        	<li class="large">Safety</li>
	        	<li class="large">Family</li>
	        	</ul>
	        	</div>
    			
	        
				<div class="sb_header"><h1>Partners</h1></div>
	        	<div class="sidebar">
	        	<ul>
	        	<li>University Counseling Services</li>
	        	<li>United Way of Johnson County</li>
	        	<li>Community Mental Health</li>
	        	<li>Johnson County Crisis Center</li>
	        	<li>Rape Victim Advocacy Program</li>
	        	<li>MECCA Substance Abuse</li>
	        	<li>Domestic Violence Intervention Program</li>
	        	</ul>
	        	</div>
    			
	        
				<div class="sb_header"><h1>Give to WRAC</h1></div>
    			
	        
				<div class="sb_header"><h1>Request Info</h1></div>
	        	<div class="sidebar">
	        	<h2>Want to volunteer with WRAC? Sign up here.</h2>
	        	<h2>Name:</h2>
	        	<h2>E-mail:</h2>
	        	<h2>Phone:</h2>
	        	<p>Please check to indicate need for a disability accommodation to participate.</p>
	        	<h2>Other Comments or Questions:</h2>
	        	</ul>
	        	</div>
    			
	        
				<div class="sb_header"><h1>Resources</h1></div>
	        	<div class="sidebar">
	        	<ul>
	        	<li>Volunteer Application</li>
	        	<li>Volunteer Brochure</li>
	        	<li>Diversity Dialogue Leader Application</li>
	        	<li>Group Facilitator Application</li>
	        	<li>IWIS Application</li>
	        	</ul>
	        	</div>
    	        
    	    <div style="clear:both;"></div>
		
			</div><!-- #page-content -->
			
			<?php thematic_belowcontent(); ?> 
			
		</div><!-- #container -->
		
<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();

?>