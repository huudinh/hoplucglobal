<?php
    if($check == 0){
        include(locate_template("Module/Home/news_lhl_1_0_0/sass/news_lhl_1_0_0_css.php")); 
    }
?>      

<section class="news_lhl_1_0_0 ">
    <div class="container">
        <div class="main_dls_1_0_0__title fadeInUp load"><?php echo $field['service_title'] ?></div>
        <div class="main_dls_1_0_0__line fadeInUp load"></div>
        <div class="news_lhl_1_0_0__content fadeInUp load">
            <?php 
                $content = $field['data'];
                foreach( $content as $key => $image ):
                    // <a class="news_lhl_1_0_0__item" href="'.$image['caption'].'">
                    // <a class="news_lhl_1_0_0__item" href="/vi/dich-vu/">
                    echo '
                        <a class="news_lhl_1_0_0__item" href="/our-services/">
                            <img src="'.$image['url'].'" alt="'.$image['title'].'" />
                        </a>
                    ';
                endforeach;
            ?>
        </div>
        <div class="news_lhl_1_0_0__content fadeInUp load"><?php echo $field['service_content'] ?></div>

    </div>
</section>