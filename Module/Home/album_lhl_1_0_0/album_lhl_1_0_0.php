<?php 
    $data = explode(" | ",  $field["title"]);
?>
<section class="album_lhl_1_0_0 " id="album_lhl_1_0_0">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="album_lhl_1_0_0__box">
                    <div class="album_lhl_1_0_0__title">
                        <?php echo $data[0] ?>
                    </div>
                    <div data-video="<?php echo $data[2] ?>" class="popupyt_1_0_0" rel="nofollow">
                        <div class="popupyt_1_0_0__icon album_lhl_1_0_0__VideoIcon"></div>
                        <img class="noneImg" src="https://i.ytimg.com/vi/<?php echo $data[2] ?>/maxresdefault.jpg" alt="" width="550" height="307">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="album_lhl_1_0_0__box album_lhl_1_0_0__boxPhoto">
                    <div class="album_lhl_1_0_0__title">
                        <?php echo $data[1] ?>
                    </div>
                    <div class="album_lhl_1_0_0__list" id="album_lhl_1_0_0__list"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    include(locate_template('Module/api/api_photo.php'));
?>
<script>
    let album_lhl_1_0_0_url = '<?php echo $path ?>';
    const dataSlide = [
    <?php 
        $rows = $field["photo"];
        $count = 0;
        foreach($rows as $row):
            // Get Photo
            $content = $row['photoAlbum'];
            foreach( $content as $image ):
                if ($count < 12){
                    echo '
                        {
                            "image": `'.$image['url'].'`,
                            "text": "'.$image['title'].'"
                        },  
                    ';
                    $count++;
                }
            endforeach;
        endforeach;
    ?>
];
</script>
