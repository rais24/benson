<?php 
global $rt_global_variables;
/* close content container if builder not used */
do_action("rt_content_container",array("action"=>"end","sidebar"=>$rt_global_variables['sidebar_position'],"echo" => ! rt_is_composer_allowed() ));
?>

</div><!-- / end #main_content -->

<!-- footer -->
<footer id="footer" class="clearfix footer" data-footer="<?php echo esc_attr(apply_filters("sticky_footer",get_theme_mod(RT_THEMESLUG."_footer_sticky")));?>">
	<?php 
		#
		# footer output
		# get templates footer content outputs
		# @hooked in /rt-framework/functions/theme_functions.php
		#				
		do_action( 'rt_footer_output' );					
	?>
</footer><!-- / end #footer -->


</div><!-- / end #right_side -->
</div><!-- / end #container --> 

<script>
/* jQuery(document).ready(function($) {
       jQuery('#loader').hide();
jQuery("#menu-item-2871").addClass("btn");
jQuery('#navigation ul li:last').css("background-color", "yellow");
)}; */
</script>
