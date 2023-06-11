<?php 
    if(is_category() || is_single()){
        $cat = get_the_category($post->ID);
        $title = $cat[0]->name;
    } else {
        $title = get_the_title();
    }
?>
<section class="slider_lhl_1_1_0">
    <div class="slider_lhl_1_1_0__slide">
        <img src="<?php echo $field['data'] ?>" alt="<?php echo $title ?>" />
    </div>
    <div class="slider_lhl_1_1_0__text">
        <div class="container">
            <div class="slider_lhl_1_1_0__textContent">
                <?php echo $title ?>
            </div>
        </div>
    </div>
</section>