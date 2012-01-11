<?php

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();

?>

		<div id="container">
	
			<?php thematic_abovecontent(); ?>
            
            <div id="slider"></div>
	
			<div id="content">

				<?php 
            	
            	// create the navigation above the content
            	thematic_navigation_above();
				
            	// calling the widget area 'index-top'
            	get_sidebar('index-top');
            	?>
            	<div id="col_head1"><h1>Latest Blog Posts</h1></div>
            	<div id="col_head2"><h1>Initiatives</h1></div>
            	<div id="col_head3"><h1>Upcoming Events</h1></div>
				<div id="col1">
				<?php
            	// action hook for placing content above the index loop
            	thematic_above_indexloop();
				
            	// action hook creating the index loop
            	thematic_indexloop();
				
            	// action hook for placing content below the index loop
            	thematic_below_indexloop();
            	?>
				</div>
				<div id="col2">
				<?php
            	// action hook for placing content above the index loop
            	thematic_above_indexloop();
				
            	// action hook creating the index loop
            	thematic_indexloop();
				
            	// action hook for placing content below the index loop
            	thematic_below_indexloop();
            	?>
				</div>
				<div id="col3">
				<?php
            	// action hook for placing content above the index loop
            	thematic_above_indexloop();
				
            	// action hook creating the index loop
            	thematic_indexloop();
				
            	// action hook for placing content below the index loop
            	thematic_below_indexloop();
            	?>
				</div>
				<?php
            	// calling the widget area 'index-bottom'
            	get_sidebar('index-bottom');
				
            	// create the navigation below the content
            	thematic_navigation_below();
            	
            	?>
				
			</div><!-- #content -->
            	<div id="featured">
            	<div id="featured-post">
				<?php
            	// action hook for placing content above the index loop
            	thematic_above_indexloop();
				
            	// action hook creating the index loop
            	thematic_featured_post();
				
            	// action hook for placing content below the index loop
            	thematic_below_indexloop();
            	?>
				</div>
            	<div id="featured-thumb"></div>
            	<div id="more-topics"><span>more topics</span>
            	<ul>
            	<li>Advocacy</li>
            	<li>Legal</li>
            	<li>Mental Health</li>
            	<li>Safety</li>
            	<li>Family</li>
            	</ul>
            	</div>
            	</div>
            <div id="content-butt"></div>
		
			<?php thematic_belowcontent(); ?> 
		
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();

?>