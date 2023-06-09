<section id="photo_lhl_1_0_0__root"></section>
<?php 
    include(locate_template('Module/api/api_photo.php'));
?>
<script>
    const photo_lhl_1_0_0_url = '<?php echo $path ?>';
    const photo_lhl_1_0_0_menu = [
        <?php 
            $rows = $field["photo"];
            foreach($rows as $row):
                $title = explode(" | ", $row['photoService']);
                echo '
                    {
                        name: "'.$title[0].'",
                        link: "#'.$title[1].'",
                        img: [
                ';
                // Get Photo
                $content = $row['photoAlbum'];
                foreach( $content as $image ):
                    echo '
                        {
                            small: "'.$image['url'].'",
                            large: "'.$image['url'].'",
                        },
                    ';
                endforeach;
                echo ']},';
            endforeach;
        ?>
    ];
</script>