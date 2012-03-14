<?php

    @header("HTTP/1.1 404 Not found", true, 404);

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();

?>

		<div id="container">
		
			<?php thematic_abovecontent(); ?>
		
			<div id="page-content">
			
				<?php thematic_abovepost(); ?>
		
				<div id="post-0" class="post error404">
				
				<?php
		
    	            // action hook for the 404 content
    	            thematic_404()
		
    	        ?>
				
				</div><!-- .post -->
				
				<?php
				include 'sidebar.php'
				?>
		
			</div><!-- #page-content -->
			
		</div><!-- #container -->
    
<?php

    // action hook for placing content below #container
    thematic_belowcontainer();

    // calling footer.php
    get_footer();

?>