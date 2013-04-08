<?php
/*
Template Name: Category Page
*/
?>

<?php

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();

?>
	        
	        <?php
			$parent = array_shift(get_post_ancestors( $post ));
			?>

		<div id="container">
		
		    <?php thematic_abovecontent(); ?>
			
			<div id="page_content">
			<?php
			if ($parent == 384 ){
			?>
			<a class="backarrow" href="<?php echo get_bloginfo('wpurl') ?>/topics"><div id="backarrow"></div><div id="backtoGTF"><span>back to Topics</span></div></a>
			<div style="clear:both;"></div>
			<?php
			}
			?>
			<div class="hentry">
	        
	        <h1 class="entry-title"><?php echo get_the_title(); ?></h1>
	           
	            <div id="cat-content">
	            <?php
	              	
	              	
	                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	                	echo "<div id='page_thumb'>";
						the_post_thumbnail('large');
						echo "</div>";
					}
					
	            echo '<div class="entry-content">';
	            the_content();
	            echo '</div>';
	
	            // create the navigation above the content
	            thematic_navigation_above();
				
	            // action hook for placing content above the category loop
	            thematic_above_categoryloop();
	            
				query_posts( array ( 'category_name' => get_the_title() ) );
	
	            // action hook creating the category loop
	            thematic_categoryloop();
	
	            // action hook for placing content below the category loop
	            thematic_below_categoryloop();			
	
	            // create the navigation below the content
	            thematic_navigation_below();
	            
	            ?>
	            </div>
	        </div>
	        
	        <?php
	        foreach(get_the_category() as $category) {
	        	$thecat = $category->cat_ID;
	        }
	        ?>
    			
    		<?php wp_reset_query(); ?>
    			
            <?php
        	    $children = get_pages('child_of='.$post->ID);
				if( count( $children ) != 0 ) {
					$children = wp_list_pages("title_li=&child_of=".$post->ID."&exclude=".$post->ID."&echo=0");
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
    		
    		<?php
    		if ( $thecat == 5 ){
    			include 'sidebar-events.php';
    		}
    		if ( $thecat == 13 || $parent == 384 ){
    			include 'sidebar-gtf.php';
    		}
    		
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