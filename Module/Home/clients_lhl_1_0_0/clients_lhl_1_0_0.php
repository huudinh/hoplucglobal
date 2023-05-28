<?php
    if($check == 0){
        include(locate_template("Module/Home/clients_lhl_1_0_0/sass/clients_lhl_1_0_0_css.php")); 
    }
?>      

<section class="clients_lhl_1_0_0 ">
    <div class="container">
        <div class="main_dls_1_0_0__title fadeInUp load"><?php echo $field['service_title'] ?></div>
        <div class="main_dls_1_0_0__line fadeInUp load"></div>
        <div class="clients_lhl_1_0_0__content fadeInUp load">
            <?php 
                $content = $field['data'];
                foreach( $content as $key => $image ):
                    // <a class="clients_lhl_1_0_0__item" href="'.$image['caption'].'">
                    // <a class="clients_lhl_1_0_0__item" href="/vi/dich-vu/">
                    echo '
                        <a class="clients_lhl_1_0_0__item" href="/our-services/">
                            <img src="'.$image['url'].'" alt="'.$image['title'].'" />
                        </a>
                    ';
                endforeach;
            ?>
        </div>
        <div class="clients_lhl_1_0_0__content fadeInUp load"><?php echo $field['service_content'] ?></div>

    </div>
</section>