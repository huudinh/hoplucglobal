<?php
	include(locate_template("Module/Post/projectOther_dls_1_0_0/projectOther_dls_1_0_0_css.php"));
?>
<div class="projectOther_dls_1_0_0">
    <div class="projectOther_dls_1_0_0__title">Other Projects</div>
    <div class="projectOther_dls_1_0_0__line"></div>
	<ul>
		<?php
			$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 6, 'post__not_in' => array($post->ID) ) );
			if( $related ) foreach( $related as $key => $post ) {
				setup_postdata($post); 
				$time = get_the_date('d/m/Y');
				$address = get_field('address');
				echo'
					<li>
						<div class="projectOther_dls_1_0_0__pic">
							<a href="'.get_permalink().'"><img width="360" height="225" src="'.get_the_post_thumbnail_url(get_the_ID(),'medium').'" alt="'.get_the_title().'"></a>
						</div>
						<h3 class="projectOther_dls_1_0_0__tt">
							<a href="'.get_permalink().'">'.get_the_title().'</a>
							<span>'.$address.'</span>
						</h3>
					</li>
				';	
			}
			wp_reset_postdata(); 
		?>
    </ul>
</div>