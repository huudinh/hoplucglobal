<?php
	include(locate_template("Module/Category/clients_lhl_1_0_0/clients_lhl_1_0_0_css.php"));
?>
<div class="clients_lhl_1_0_0">
    <div class="clients_lhl_1_0_0__title">PROJECTS</div>
    <div class="clients_lhl_1_0_0__line"></div>
    <ul>
		<?php 
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					global $post; 
					$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');            
					$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
					$date = get_the_date();
					$excerpt = wp_trim_words( get_the_excerpt($post->ID), 120 );
					$address = get_field('address');
					echo '
						<li>
							<div class="clients_lhl_1_0_0__pic">
								<a href="'.get_permalink($post->ID).'"><img width="360" height="225" src="/rs?w=360&h=225&src='.$img.'" alt="'.get_the_title($post->ID).'"></a>
							</div>
							<h3 class="clients_lhl_1_0_0__tt">
								<a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a>
								<span>'.$address.'</span>
							</h3>
						</li>
					';
				endwhile;
			endif;
		?> 
       
    </ul>
</div>