
    </div><!-- #main -->
    
    <?php
    
    // action hook for placing content above the footer
    thematic_abovefooter();
    
    ?>    
	
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
		E: wrac@uiowa.edu
		</p>
        </div>
        <ul id="services"></ul>
        <ul id="events"></ul>
        <ul id="get-involved"></ul>
        <ul id="resources"></ul>
        
	</div><!-- #footer -->
	
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

</body>
</html>