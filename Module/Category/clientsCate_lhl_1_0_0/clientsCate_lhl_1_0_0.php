<div class="clientsCate_lhl_1_0_0">
	<h1 class="site__title">
		<?php single_cat_title(); ?>
	</h1>
	<ul>
		<?php 
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					global $post; 
					$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');            
					$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
					$date = get_the_date();
					$excerpt = wp_trim_words( get_the_excerpt($post->ID), 120 );
					echo '
						<li>
							<a class="clientsCate_lhl_1_0_0__pic" href="'.get_permalink($post->ID).'">
								<img width="238" height="123" src="'.$img.'" alt="'.get_the_title($post->ID).'">
							</a>
						</li>
					';
				endwhile;
			endif;
		?> 
	</ul>
</div>