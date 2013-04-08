<?php
	$parent = array_shift(get_post_ancestors( $post ))
?>
    			
	       <?php 
	       if ($parent == 182 || is_page(182)) {
	     	thematic_belowcontent();
	       } else {
	       ?>
				<div class="sb_header"><div>Volunteer</div></div>
	        	<div class="sidebar">
            	<?php wp_nav_menu( array('menu' => 'Resources-Side',  'walker' => new description_walker() )); ?>
	        	</div>
    	        
    	    <div style="clear:both;"></div>
    	    
			
			<?php thematic_belowcontent(); ?>
    	   <?php } ?>