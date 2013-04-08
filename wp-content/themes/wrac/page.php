<?php

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();

?>

		<div id="container">
		
			<?php thematic_abovecontent(); ?>
		
			<div id="page_content">
	            
				<div id="post-<?php the_ID();
					echo '" ';
					if (!(THEMATIC_COMPATIBLE_POST_CLASS)) {
						post_class();
						echo '>';
					} else {
						echo 'class="';
						thematic_post_class();
						echo '">';
					}
	                
	                // creating the post header
	                thematic_postheader();
	              	
	              	
	                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	                	echo "<div id='page_thumb'>";
						the_post_thumbnail('large');
						echo "</div>";
					}
?>
	                
					<div class="entry-content">
	
	                    <?php
	                    
	                    the_content();
	                    
	                    wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'thematic'), "</div>\n", 'number');
	                    
	                    edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>') ?>
	
					</div><!-- .entry-content -->
				</div><!-- #post -->
    			
            <?php
        	    $children = get_pages('child_of='.$post->ID);
				if( count( $children ) != 0 ) {
					$children = wp_list_pages("title_li=&child_of=".$post->ID."&exclude=609,".$post->ID."&echo=0");
					$title = get_the_title();
				}
				if($post->post_parent) {
					$children2 = wp_list_pages("title_li=&child_of=".$post->post_parent."&exclude=".$post->ID."&echo=0");
					$parent_link = get_permalink($post->post_parent);
					$title2 = "<a href='".$parent_link."'>".get_the_title($post->post_parent)."</a>";
				}
			?>
            <?php if ($children) {?>
            	<div class="sb_header"><div><?php echo $title ?></div></div>
	        	<div class="sidebar">
					<?php echo $children; ?>
	        	</div>
	        <?php } if ($children2) {?>
            	<div class="sb_header"><div><?php echo $title2 ?></div></div>
	        	<div class="sidebar">
					<?php echo $children2; ?>
	        	</div>
            <?php } ?>
	        
			<?php include 'sidebar.php';?>
    	        
    	    <div style="clear:both;"></div>
	
	        <?php
	        
	        thematic_belowpost();
	        
	        ?>
	
			</div><!-- #content -->
			
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();

    // calling the standard sidebar 
    //thematic_sidebar();
    
    // calling footer.php
    get_footer();

?>