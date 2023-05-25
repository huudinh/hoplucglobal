<?php
	include(locate_template("Module/Post/newsOther_dls_1_1_0/newsOther_dls_1_1_0_css.php"));
?>
<div class="newsOther_dls_1_1_0">
	<div class="newsOther_dls_1_1_0__title">Other News</div>
	<div class="newsOther_dls_1_1_0__line"></div>
	<ul>
		<?php
			$related = get_posts( 
				array( 
					'category__in' => wp_get_post_categories($post->ID), 
					'numberposts' => 3, 
					'post__not_in' => array($post->ID), 
					'orderby' => 'rand' 
					) 
				);
			if( $related ) {
				foreach( $related as $key => $post ) {
					setup_postdata($post); 
					$time = get_the_date('d/m/Y');
					$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');            
					$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
					echo'
						<li>
							<div class="newsOther_dls_1_1_0__pic">
								<a href="'.get_permalink().'"><img width="80" height="80" src="'.$img.'" alt="'.get_the_title().'"></a>
							</div>
							<h3 class="newsOther_dls_1_1_0__tt">
								<span>Ngày '.$time.'</span>
								<a href="'.get_permalink().'">'.get_the_title().'</a>
							</h3>
						</li>
					';	
				}
			}
			wp_reset_postdata(); 
		?>
	</ul>
</div>