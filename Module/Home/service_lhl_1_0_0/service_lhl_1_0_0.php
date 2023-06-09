<section class="service_lhl_1_0_0 ">
    <div class="service_lhl_1_0_0__bg"></div>
    <div class="container">
        <div class="slide_step" id="slide_step"></div>
        <ul class="service_lhl_1_0_0__control" id="slide_stepControl">
            <li class="prev"></li>
            <li class="next"></li>
        </ul>
    </div>
</section>
<script>
    let service_lhl_1_0_0_data = [
        <?php
            $category_id = $field['service_content'];
            $args = array(
                'post_status' => 'publish',
                'showposts' => 6,
                'cat' => $category_id,
            );
            $getposts = new WP_query($args); 
            global $wp_query; $wp_query->in_the_loop = true; 
            while ($getposts->have_posts()) : $getposts->the_post();     
                echo '
                    {
                        src:`/rs/?w=220&h=144&src='.get_the_post_thumbnail_url($post->ID).'`,
                        link:`'.get_permalink($post->ID).'`,
                        text:`'.get_the_title($post->ID).'`,
                    },
                ';
            endwhile; 
            wp_reset_postdata();
        ?>
    ];
</script>