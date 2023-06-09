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
<script>
    let album_lhl_1_0_0_url = '/wp-content/themes/SCI_Theme/Module/Home/album_lhl_1_0_0/';
    const dataSlide = [{
        "image": `${album_lhl_1_0_0_url}images/1.jpg`,
        "text": "1"
    },
    {
        "image": `${album_lhl_1_0_0_url}images/2.jpg`,
        "text": "2"
    },
    {
        "image": `${album_lhl_1_0_0_url}images/3.jpg`,
        "text": "3"
    },
    {
        "image": `${album_lhl_1_0_0_url}images/4.jpg`,
        "text": "4"
    },
    {
        "image": `${album_lhl_1_0_0_url}images/5.jpg`,
        "text": "5"
    },
    {
        "image": `${album_lhl_1_0_0_url}images/6.jpg`,
        "text": "6"
    },
    {
        "image": `${album_lhl_1_0_0_url}images/7.jpg`,
        "text": "7"
    },
    {
        "image": `${album_lhl_1_0_0_url}images/8.jpg`,
        "text": "8"
    },
    {
        "image": `${album_lhl_1_0_0_url}images/9.jpg`,
        "text": "9"
    },
    {
        "image": `${album_lhl_1_0_0_url}images/10.jpg`,
        "text": "10"
    },
    {
        "image": `${album_lhl_1_0_0_url}images/11.jpg`,
        "text": "11"
    },
    {
        "image": `${album_lhl_1_0_0_url}images/12.jpg`,
        "text": "12"
    },
];
</script>