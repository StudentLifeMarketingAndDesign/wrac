
    </div><!-- #main -->
    
    <?php
    
    // action hook for placing content above the footer
    thematic_abovefooter();
    
    ?>    
	<div id="footwrap">
	<div style="clear:both;"></div>
	<div id="footer">
        <div id="find-us">
        <h3>Find Us</h3>
        <h4>
        Women's Resource and Action Center<br />
        130 N. Madison St.<br />
        Iowa City, IA 52245<br />
		</h4>
		<p>
		P: (319) 335-1486<br />
		F: (319) 353-1985<br />
		E: <a class="email" href="mailto:wrac@uiowa.edu">wrac@uiowa.edu</a>
		</p>
        </div>
        <div id="house"></div>
        <div id="services">
        <h3><a href="services/">Services</a></h3>
            	<?php wp_nav_menu( array('menu' => 'Services')); ?>
        </div>
        <div id="events">
        <h3><a href="events/">Events</a></h3>
            	<?php wp_nav_menu( array('menu' => 'Events',  'walker' => new description_walker() )); ?>
        </div>
        <div id="get-involved">
        <h3><a href="get-involved/">Get Involved</a></h3>
            	<?php wp_nav_menu( array('menu' => 'Get Involved',  'walker' => new description_walker() )); ?>
        </div>
        <div id="get-informed">
        <h3><a href="topics/">Topics</a></h3>
            	<?php wp_nav_menu( array('menu' => 'Resources',  'walker' => new description_walker() )); ?>
        </div>
        
        <div id="soc_med">
        <a href="http://www.flickr.com/photos/uiowawrac/" target="_blank"><div id="flickr"></div></a>
        <a href="https://www.facebook.com/pages/Womens-Resource-and-Action-Center-WRAC/270704436274625" target="_blank"><div id="facebook"></div></a> 
        <a href="http://twitter.com/#!/wracatuiowa" target="_blank"><div id="twitter"></div></a>
        </div>
        <div id="dosl"></div>
        
        <div id="disabilities">Individuals with disabilities are encouraged to attend all University of Iowa sponsored events. If you are a person with a disability who requires a reasonable accommodation in order to participate in this program, please contact the Center for Student Leadership and Involvement in advance at 319-335-3059.</div>
        
	</div><!-- #footer -->
	</div>
	
    <?php
    
    // action hook for placing content below the footer
    thematic_belowfooter();
    
    if (apply_filters('thematic_close_wrapper', true)) {
    	echo '</div><!-- #wrapper .hfeed -->';
    }
    
    ?>  

<?php 

// calling WordPress' footer action hook
wp_footer();

// action hook for placing content before closing the BODY tag
thematic_after(); 

?>


<!-- Camera calls -->    
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/camera/scripts/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/camera/scripts/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/camera/scripts/camera.js'></script> 
</body>
</html>