<?php
if( ! function_exists("rt_portfolio_carousel") ){
	/**
	 * Portfolio Carousel	
	 * returns html ouput of portfolio custom post type for carousel
	 * 
	 * @param  array   $atts   
	 * @return output 
	 */
	function rt_portfolio_carousel( $atts = array() ) { 
		global $rt_portfolio_post_values, $rt_portfolio_list_atts;   

		//sanitize fields
		$atts["id"] = isset( $atts["id"] ) ? sanitize_html_class( $atts["id"] ) : 'portfolio-dynamicID-'.rand(100000, 1000000);

		//defaults
		$rt_portfolio_list_atts = shortcode_atts( array(  
			"id"  => 'portfolio-dynamicID-'.rand(100000, 1000000), 
			"list_layout" => "1/3",
			"nav" => "true",
			"dots" => "false",
			"featured_image_resize" => "true",
			"featured_image_max_width" => 0,			
			"featured_image_max_height" => 0,
			"featured_image_crop" => "false",		
			"item_style" => "style-1",
			"list_orderby" => "date",
			"list_order" => "DESC",
			"max_item"=> 10,
			"categories" => "",
			"ids" => "",
			"autoplay" => "false",
			"timeout" => 5000,					
		), $atts);

		extract($rt_portfolio_list_atts); 

		//counter
		$counter = 1;

		//create a post status array
		$post_status = is_user_logged_in() ? array( 'private', 'publish' ) : "publish";

		//general query
		$args = array( 
			'post_status'    =>	$post_status,
			'post_type'      =>	'portfolio',
			'orderby'        =>	$list_orderby,
			'order'          =>	$list_order,
			'showposts' 	 =>	$max_item,					
		);

		if( ! empty ( $ids ) ){				
			$ids = ! empty( $ids ) ? explode(",", trim( $ids ) ) : array();							
			$args = array_merge( $args, array( 'post__in' => $ids ) );
		}

		if( ! empty ( $categories ) ){
			
			$categories = is_array( $categories ) ? $categories : explode(",", rt_wpml_lang_object_ids( $categories, "portfolio_categories",$wpml_lang ) ); 	

			$args = array_merge($args, array( 

				'tax_query' => array(
						array(
							'taxonomy' =>	'portfolio_categories',
							'field'    =>	'id',
							'terms'    =>	$categories,
							'operator' => 	"IN"
						)
					),
			) );
		} 

		$wp_query  = new WP_Query($args); 

		//column count
		$item_width = rt_column_count( $list_layout );
 
 		//column class
 		$add_column_class = "item portfolio"; 

		if ( $wp_query->have_posts() ){ 
			
			$output = array();

			//the loop
			while ( $wp_query->have_posts() ) : $wp_query->the_post();

				//get post values
				$rt_portfolio_post_values = rt_get_portfolio_loop_post_values( $wp_query->post, $rt_portfolio_list_atts, "carousel" );

				//selected term list of each post
				$term_list = get_the_terms($wp_query->post->ID, 'portfolio_categories');
				
				//add terms as class name
				$addTermsClass = "";
				if($term_list){
					if(is_array($term_list)){
						foreach ($term_list as $termSlug) {
							$addTermsClass .= " ". $termSlug->slug;
						}
					}
				}

				ob_start();

				echo '<div class="'.$add_column_class.' '.$addTermsClass.'">'."\n";

					get_template_part( 'portfolio-contents/carousel','content');

				echo '</div>'."\n";

				$output[] .=  ob_get_contents();
				ob_end_clean();
						 
			$counter++;
			endwhile;  
 
			//reset post data for the new query
			wp_reset_postdata(); 	
			
			//carousel atts
			$atts = array(  
				"id"         => sanitize_html_class($id), 
				"item_width" => $item_width, 
				"class"      => "portfolio-carousel",
				"nav"        => $nav,
				"dots"       => $dots,
				"autoplay"   => $autoplay,
				"timeout"    => $timeout						
			);

			//create carousel 
			return rt_create_carousel( $output, $atts );

		}

	}
}
add_shortcode('portfolio_carousel', 'rt_portfolio_carousel'); 
?>