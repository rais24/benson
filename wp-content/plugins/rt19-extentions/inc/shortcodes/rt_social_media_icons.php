<?php
if( ! function_exists("rt_social_media") ){
	/**
	 * Social Media Icons Shortcode
	 * 
	 * @global class $rttheme 
	 * 
	 * @param  array $atts
	 * @param  string $content
	 * @return string $output
	 */
	function rt_social_media( $atts=array(), $content = null ) {
 
		global $rttheme,$rt_social_media_icons;

		$social_media_output ='';			
		$target = "";					
		foreach ($rt_social_media_icons as $key => $value){			

			$link       = rt_wpml_t(RT_THEMESLUG, RT_THEMESLUG.'_'.$value, get_theme_mod( RT_THEMESLUG.'_'.$value ));
			$followText = rt_wpml_t(RT_THEMESLUG, RT_THEMESLUG.'_'.$value.'_text', get_theme_mod( RT_THEMESLUG.'_'.$value.'_text' ));
			$target     = get_theme_mod( RT_THEMESLUG.'_'.$value.'_target' );
			$target     = empty( $target ) ? "_self" : $target;

			if($value=="mail"){//e-mail icon link   
				if(strpos($link, "@")){
					$link = 'mailto:'.str_replace("mailto:", "", $link);  
				}else{
					$link = str_replace("mailto:", "", $link);				
				}  

			}else{
				$link = $link; 
			} 


			//all icons
			if($link){
				$social_media_output .= '<li class="'.$value.'">';
				$social_media_output .= '<a class="icon-'.$value.'" target="'.$target.'" href="'. $link .'" title="'. esc_attr( $key ) .'">';
				
				! empty( $followText )
				and	$social_media_output .= '<span>'. esc_attr( $followText ) .'</span>';

				empty( $followText )
				and	$social_media_output .= '<span>'. esc_attr( $key ) .'</span>';

				$social_media_output .= '</a>';
				$social_media_output .= '</li>';
			}
		}

		if($social_media_output){
			return  '<ul class="social_media">'.$social_media_output.'</ul>';
		}
		
	}
}

add_shortcode('rt_social_media_icons', 'rt_social_media');