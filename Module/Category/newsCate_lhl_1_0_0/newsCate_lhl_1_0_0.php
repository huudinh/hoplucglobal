<div class="newsCate_lhl_1_0_0">
	<h1 class="site__title">
		<?php single_cat_title(); ?>
	</h1>
	<div class="newsCate_lhl_1_0_0__box">
		<?php 
			if ( have_posts() ) :
				$key = 0;
				while ( have_posts() ) : the_post();
					global $post; 
					$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');            
					$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
					$date = get_the_date();
					$excerpt = wp_trim_words( get_the_excerpt($post->ID), 120 );
					echo '
						<div class="newsCate_lhl_1_0_0__item">
							<div class="newsCate_lhl_1_0_0__pic">
								<a href="'.get_permalink($post->ID).'">
									<img width="360" height="225" src="'.$img.'" alt="'.get_the_title($post->ID).'">
								</a>
							</div>
							<div class="newsCate_lhl_1_0_0__content">
								<h3 class="newsCate_lhl_1_0_0__contentTitle">
									<a href="'.get_permalink($post->ID).'">
										'.get_the_title($post->ID).'
									</a>
								</h3>
								<span>'.$date.'</span>
								<p>'.$excerpt.'</p>
								<p class="newsCate_lhl_1_0_0__contentMore"><a href="'.get_permalink($post->ID).'">Read more »</a></p>
							</div>
						</div>
					';
				endwhile;
			endif;
		?>  
	</div>
</div>
