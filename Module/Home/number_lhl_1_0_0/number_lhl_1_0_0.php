<section class="number_lhl_1_0_0">
    <div class="number_lhl_1_0_0__title"><?php echo $field["title"] ?></div>
    <div class="number_lhl_1_0_0__box">
        <div class="container">
            <?php 
                $rows = $field["number"];
                foreach($rows as $key => $row):
                    $count = $key + 1;
                    echo '
                        <div class="number_lhl_1_0_0__boxItem">
                            <div class="number_lhl_1_0_0__boxNumber" id="next-count-'.$count.'">'.$row['numberText'].'</div>
                            <div class="number_lhl_1_0_0__boxTitle">'.$row['numberContent'].'</div>
                        </div>
                    ';
                endforeach;
            ?>
        </div>
    </div>
</section>
    