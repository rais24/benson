<?php get_template_part("footer", $GLOBALS['rt_layout'] ); ?>

<?php wp_footer(); ?>
</body>
</html>

<script>
/* $(document).ready(function(){
       $('#loader').hide();
}); */
</script>
<style>
.shop-btn{background-image: url("http://localhost/benson/wp-content/uploads/2015/06/shopbutton1.png");
    background-repeat: no-repeat;
    width: 120px;}
	.shop-btn:hover{background-image: url("http://localhost/benson/wp-content/uploads/2015/06/shopbuttonhover.png");
    background-repeat: no-repeat;
	background-color:none;
	
    width: 120px;}
</style>
<script type="text/javascript">

jQuery(document).ready(function(e) {
    
	jQuery('.shop-left-block').mouseover(function(){		
	jQuery('.hover-container-left',this).show();	
	jQuery(this).css('cursor','pointer');	
	});
	
	jQuery('.shop-left-block').mouseout(function(){		 
	jQuery('.hover-container-left',this).hide();		
	});
	
	jQuery('.inner-top-1').mouseover(function(){		
	jQuery('.hover-container',this).show();	
	jQuery(this).css('cursor','pointer');	
	});
	
	jQuery('.inner-top-1').mouseout(function(){		 
	jQuery('.hover-container',this).hide();		
	});
	
	jQuery('.inner-top-2').mouseover(function(){		
	jQuery('.hover-container',this).show();	
	jQuery(this).css('cursor','pointer');	
	});
	
	jQuery('.inner-top-2').mouseout(function(){		 
	jQuery('.hover-container',this).hide();	
		
	});
	
	jQuery('.inner-bottom').mouseover(function(){		
	jQuery('.hover-container',this).show();	
	jQuery(this).css('cursor','pointer');	
	});
	
	jQuery('.inner-bottom').mouseout(function(){		 
	jQuery('.hover-container',this).hide();		
	});
	imageUrl = '<?php echo get_bloginfo('url');?>/wp-content/uploads/2015/06/shopbutton1.png';
	//jQuery('#menu-item-2871 a').css('background-image', 'url(' + imageUrl + ')');
	jQuery('#menu-item-2871 a').addClass('shop-btn');		
});
</script>

