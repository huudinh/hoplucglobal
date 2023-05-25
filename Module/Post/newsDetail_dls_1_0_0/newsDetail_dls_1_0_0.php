<?php
    $path = get_template_directory_uri();
    $path = $path.'/Module/Post/newsDetail_dls_1_0_0/';

    if($check == 0){
        include(locate_template("Module/Post/newsDetail_dls_1_0_0/newsDetail_dls_1_0_0_css.php")); 
    }

    $kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');            
	$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
?>      

<?php
    $pageview = get_post_meta(get_the_ID(),'pageview',true);
    if($pageview =="") $pageview ="0";
    $pageview = (int)$pageview +1;
    update_post_meta( get_the_ID(), 'pageview', $pageview );
?>

<section class="newsDetail_dls_1_0_0 " id="newsDetail_dls_1_0_0">
    <div class="container">
        <div class="newsDetail_dls_1_0_0__box">
            <div class="newsDetail_dls_1_0_0__title">
                <?php echo the_title();  ?>
            </div>
            <div class="newsDetail_dls_1_0_0__tool">
                <i class="newsDetail_dls_1_0_0__tool--author"></i> <span><?php echo get_the_author() ?></span>
                <i class="newsDetail_dls_1_0_0__tool--date"></i> <span><?php echo get_the_time('d/m/Y') ?></span>
                <i class="newsDetail_dls_1_0_0__tool--view"></i> <span><?php echo $pageview ?></span>
            </div>
            <div class="newsDetail_dls_1_0_0__thumb">
                <img src="<?php echo $img ?>" alt="<?php echo the_title();  ?>">
            </div>
            <div class="newsDetail_dls_1_0_0__content">
                <?php
                    while ( have_posts() ) : 
                        the_post(); 
                        the_content();  
                    endwhile; 
                ?>
            </div>
        </div>
    </div>
</section>