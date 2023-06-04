<?php
	include(locate_template("Module/Category/newsCate_lhl_1_0_0/newsCate_lhl_1_0_0_css.php"));
?>
<div class="newsCate_lhl_1_0_0">
    <div class="newsCate_lhl_1_0_0__title">NEWS</div>
    <div class="newsCate_lhl_1_0_0__line"></div>
    <ul>
		<?php 
			if ( have_posts() ) :
				$key = 0;
				while ( have_posts() ) : the_post();
					global $post; 
					$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');            
					$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
					$date = get_the_date();
					$excerpt = wp_trim_words( get_the_excerpt($post->ID), 120 );
					if ($key == 0) {
						echo '
							<li class="newsCate_lhl_1_0_0__hot">
								<div class="newsCate_lhl_1_0_0__pic">
									<a href="'.get_permalink($post->ID).'"><img width="360" height="225" src="'.$img.'" alt="'.get_the_title($post->ID).'"></a>
								</div>
								<h3 class="newsCate_lhl_1_0_0__hotContent">
									<span>'.$date.'</span>
									<a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a>
									<p>'.$excerpt.'</p>
								</h3>
							</li>
						';
					} else {
						echo '
							<li class="newsCate_lhl_1_0_0__item">
								<div class="newsCate_lhl_1_0_0__pic">
									<a href="'.get_permalink($post->ID).'"><img width="360" height="225" src="'.$img.'" alt="'.get_the_title($post->ID).'"></a>
								</div>
								<h3 class="newsCate_lhl_1_0_0__tt">
									<span>'.$date.'</span>
									<a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a>
								</h3>
							</li>
						';
					}
					$key++;
				endwhile;
			endif;
		?>             
    </ul>
</div>