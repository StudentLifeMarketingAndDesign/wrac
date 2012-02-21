<?php

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();

?>

		<div id="container">
	
			<?php thematic_abovecontent(); ?>
            
            <div id="slider">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-thumb="<?php echo get_template_directory_uri(); ?>/camera/images/slides/thumbs/bridge.jpg" data-src="<?php echo get_template_directory_uri(); ?>/camera/images/slides/bridge.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                </div>
            </div>
            <div data-thumb="<?php echo get_template_directory_uri(); ?>/camera/images/slides/thumbs/leaf.jpg" data-src="<?php echo get_template_directory_uri(); ?>/camera/images/slides/leaf.jpg">
                <div class="camera_caption fadeFromBottom">
                    It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
                </div>
            </div>
            <div data-thumb="<?php echo get_template_directory_uri(); ?>/camera/images/slides/thumbs/road.jpg" data-src="<?php echo get_template_directory_uri(); ?>/camera/images/slides/road.jpg">
                <div class="camera_caption fadeFromBottom">
                    <em>It's completely free</em> (even if a donation is appreciated)
                </div>
            </div>
            <div data-thumb="<?php echo get_template_directory_uri(); ?>/camera/images/slides/thumbs/sea.jpg" data-src="<?php echo get_template_directory_uri(); ?>/camera/images/slides/sea.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera slideshow provides many options <em>to customize your project</em> as more as possible
                </div>
            </div>
            <div data-thumb="<?php echo get_template_directory_uri(); ?>/camera/images/slides/thumbs/shelter.jpg" data-src="<?php echo get_template_directory_uri(); ?>/camera/images/slides/shelter.jpg">
                <div class="camera_caption fadeFromBottom">
                    It supports captions, HTML elements and videos and <em>it's validated in HTML5</em> (<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.pixedelic.com%2Fplugins%2Fcamera%2F&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0&amp;user-agent=W3C_Validator%2F1.2" target="_blank">have a look</a>)
                </div>
            </div>
            <div data-thumb="<?php echo get_template_directory_uri(); ?>/camera/images/slides/thumbs/tree.jpg" data-src="<?php echo get_template_directory_uri(); ?>/camera/images/slides/tree.jpg">
                <div class="camera_caption fadeFromBottom">
                    Different color skins and layouts available, <em>fullscreen ready too</em>
                </div>
            </div>
        </div><!-- #camera_wrap_1 -->
            </div>
	
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
				
				while ( have_posts() ) : the_post();
		
				thematic_abovepost(); ?>

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
     				thematic_postheader(); ?>
					<div class="entry-content">
<?php the_excerpt(); ?>

					<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'thematic') . '&after=</div>') ?>
					</div><!-- .entry-content -->
					<?php //thematic_postfooter(); ?>
				</div><!-- #post -->

			<?php 
				
				thematic_belowpost();

				if ($count==$thm_insert_position) {
						get_sidebar('index-insert');
				}
				$count = $count + 1;
		endwhile;
            	?>
				</div>
				<div id="col2">
            	<?php wp_nav_menu( array('menu' => 'Initiatives', 'walker' => new description_walker() ) ); ?>
				</div>
				<div id="col3">
				<?php
				wp_reset_query();
				query_posts( array ( 'category_name' => 'events', 'posts_per_page' => 1 ) );
				
				while ( have_posts() ) : the_post();
		
				thematic_abovepost(); ?>

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
     				thematic_postheader(); ?>
					<div class="entry-content">
<?php the_excerpt(); ?>

					<?php wp_link_pages('before=<div class="page-link">' .__('Pages:', 'thematic') . '&after=</div>') ?>
					</div><!-- .entry-content -->
					<?php //thematic_postfooter(); ?>
				</div><!-- #post -->

			<?php 
				
				thematic_belowpost();

				if ($count==$thm_insert_position) {
						get_sidebar('index-insert');
				}
				$count = $count + 1;
		endwhile;
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
            	<div id="featured-thumb">
            	<?php
            	the_post_thumbnail('medium');
            	?>
            	</div>
            	<div id="more-topics"><span>more topics</span>
            	<?php wp_nav_menu( array('menu' => 'more topics' )); ?>
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