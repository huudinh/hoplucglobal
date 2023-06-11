<div id="video_lhl_1_0_0__root"></div>
<script>
    const video_lhl_1_0_0_url = `<?php echo $path ?>`;

    const video_lhl_1_0_0_menu = [
        <?php
            foreach($field['video'] as $value):
                $cate = explode(' | ', $value['videoContentTitle']);
                echo '
                {
                    name: `'.$cate[0].'`,
                    link: `#'.$cate[1].'`,
                    img: [
                ';
                $rows = $value['videoContentBox'];
                
                foreach($rows as $row):
                    $info = explode(' | ', $row['videoContentBoxInfo']);
                    echo '
                        {
                            desc: `'.$info[0].'`,
                            src: `'.$info[1].'`,
                        }, 
                    ';
                endforeach;
                echo '
                    ]},
                ';
            endforeach;
        ?>
    ];
</script>