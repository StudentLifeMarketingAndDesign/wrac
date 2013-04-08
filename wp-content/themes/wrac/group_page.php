<?php
/*
Template Name: Group Page
*/
?>

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
    		include 'sidebar-groups.php';
    		?>
    			
            <?php 
				$children = wp_list_pages("title_li=&child_of=".$post->ID."&exclude=".$post->ID."&echo=0");
				$title = get_the_title();
				if($post->post_parent) {
					$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&exclude=".$post->ID."&echo=0");
					$parent_link = get_permalink($post->post_parent);
					$title = "<a href='".$parent_link."'>".get_the_title($post->post_parent)."</a>";
				}
			?>
            <?php if ($children) {?>
            	<div class="sb_header"><div><?php echo $title ?></div></div>
	        	<div class="sidebar">
					<?php echo $children; ?>
	        	</div>
	        <?php } else { ?>
            	<div class="sb_header"><div><?php echo $title ?></div></div>
            <?php } ?>
    			
    			
    		<?php
    		include 'sidebar.php';
    		?>
    			
    			
		</div><!-- #page-content -->
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();

?>