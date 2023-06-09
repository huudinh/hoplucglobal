<section class="slider_lhl_1_0_0">
    <div class="slider__content" >
        <div class="slider__control" >
            <div onclick="changeSlide(-1)" class="slider__controlLeft"></div>
            <div onclick="changeSlide(1)" class="slider__controlRight"></div>
        </div>
    </div>
</section>
<script>
    let slides = [
        <?php
            $rows = $field["slider"];
            foreach($rows as  $row):
                echo "
                    {
                        link:'".$row['sliderItemLink']."',
                        text:'".$row['sliderItemText']."',
                        youtube:'".$row['sliderItemId']."',
                    },
                ";
            endforeach;
        ?>
    ];
   
</script>
