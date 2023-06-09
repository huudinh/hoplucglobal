<section class="news_lhl_1_0_0 ">
    <div class="container">
        <div class="news_lhl_1_0_0__title"><?php echo $field['news_title'] ?></div>
        <div class="news_lhl_1_0_0__box">
            <?php
                $category = $field['news_content'];
                $category_id = $category->term_id;
                $cate_link = esc_html( $category->slug );

                $args = array(
                    'post_status' => 'publish',
                    'showposts' => 5,
                    'cat' => $category_id,
                );
                $getposts = new WP_query($args); 
                global $wp_query; $wp_query->in_the_loop = true; 
                while ($getposts->have_posts()) : $getposts->the_post();     
                    echo '
                        <a href="'.get_permalink($post->ID).'" title="'.get_the_title($post->ID).'">
                            <img src="/rs/?w=217&h=125&src='.get_the_post_thumbnail_url($post->ID).'" alt="'.get_the_title($post->ID).'">
                            <h3 class="news_lhl_1_0_0__boxTitle">'.get_the_title($post->ID).'</h3>
                        </a>
                    ';
                endwhile; 
                wp_reset_postdata();
            ?>
        </div>
        <div class="news_lhl_1_0_0__more">
            <a href="/<?php echo $cate_link ?>/" title="Read more" class="read-more">Read more »</a>
        </div>
    </div>
</section>