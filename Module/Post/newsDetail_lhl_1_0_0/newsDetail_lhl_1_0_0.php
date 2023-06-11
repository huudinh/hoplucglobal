<?php 
    include(locate_template('Module/api/api_about.php'));
?>
<section class="newsDetail_lhl_1_0_0">
    <h1 class="newsDetail_lhl_1_0_0__title">
        <?php echo the_title();  ?>
    </h1>
    <div class="newsDetail_lhl_1_0_0__content">
        <div class="newsDetail_lhl_1_0_0__contentNormal newsDetail_lhl_1_0_0__contentProcedure">
            <?php
                while ( have_posts() ) : 
                    the_post(); 
                    the_content();  
                endwhile; 
            ?>
        </div>
        <div class="newsDetail_lhl_1_0_0__contentTraining newsDetail_lhl_1_0_0__contentNews">  
            <?php 
                if ($field['video']){
                    foreach($field['video'] as $key => $value):
                        $training = $value['trainingBox'];
                        $vision = $value['visionBox'];
                        
                        if($training){
                            foreach($training as $row):
                                $link = $row['trainingLink'];
                                $content = $row['trainingContent'];
                                echo '
                                    <div class="newsDetail_lhl_1_0_0__contentTrainingItem">
                                        <div class="newsDetail_lhl_1_0_0__contentTrainingItem__pic">
                                            <img width="243" height="243" src="'.$link.'" alt="photo" />
                                        </div>
                                        <div class="newsDetail_lhl_1_0_0__contentTrainingItem__text">
                                            <h3>'.$content.'</h3>
                                        </div>
                                    </div>
                                ';
                            endforeach;
                        }

                        if($vision){
                            foreach($vision as $row):
                                $link = $row['visionLink'];
                                $content = $row['visionContent'];
                                echo '
                                    <div class="newsDetail_lhl_1_0_0__contentNewsItem">
                                        <div class="newsDetail_lhl_1_0_0__contentNewsItem__pic">
                                            <img width="243" height="243" src="'.$link.'" alt="photo" />
                                        </div>
                                        <div class="newsDetail_lhl_1_0_0__contentNewsItem__text">
                                            '.$content.'
                                        </div>
                                    </div>
                                ';
                            endforeach;
                        }
                    endforeach;
                }
            ?>
        </div>
    </div>
</section>                 