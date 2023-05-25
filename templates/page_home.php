<?php 
	/* Template Name: Page Home
	* Template Post Type: page
    */       
// Custom thông báo bảo trì
// if (!is_user_logged_in()){
// 	echo '<div style="text-align:center; padding: 50px 0; min-height: 500px;">Website đang trong quá trình bảo trì, vui lòng quay lại sau !
// 		Rất xin lỗi vì sự bất tiện này !</div>
// 	';
// 	exit();
// } 
//set headers to NOT cache a page
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

//or, if you DO want a file to cache, use:
header("Cache-Control: max-age=31557600"); //30days (60sec  60min  24hours * 30days)

?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <?php 
        if (current_user_can('administrator') || current_user_can('editor')) {
        wp_admin_bar_render();
        echo '
            <meta name="robots" content="noindex,follow"/>
            <link id="pagestyle" rel="stylesheet" type="text/css" href="/wp-includes/css/admin-bar.min.css?ver=4.9.10" />
            <link id="pagestyle" rel="stylesheet" type="text/css" href="/wp-includes/css/dashicons.min.css?ver=4.9.10" />
        ';
        }
    ?>
    <meta charset="UTF-8">
	<link type="image/x-icon" rel="shortcut icon" href="css/lib/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title() ?></title>
    <?php wp_head(); ?>

    <?php
        include(locate_template('Module/assets/sass/lib_css.php')); 
        include(locate_template('Module/assets/sass/custom_css.php')); 
    ?>
    <style>
        .page {
            display: none;
        }
        #loading {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 100;
            width: 100vw;
            height: 100vh;
            background-color: rgba(192, 192, 192, 1);
            background-image: url("/wp-content/themes/SCI_Theme/Module/Header/header_dls_1_0_0/images/logo.png");
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <script>
        function onReady(callback) {
            var intervalId = window.setInterval(function () {
                if (document.getElementsByTagName('body')[0] !== undefined) {
                    window.clearInterval(intervalId);
                    callback.call(this);
                }
            }, 2000);
        }

        function setVisible(selector, visible) {
            document.querySelector(selector).style.display = visible ? 'block' : 'none';
        }

        onReady(function () {
            setVisible('.page', true);
            setVisible('#loading', false);
        });
    </script>
</head>

<body>
    <div class="page">
        <?php get_template_part('Module/module_header'); ?>
        <main class="main_dls_1_0_0">
            <div class="main_dls_1_0_0__item main_dls_1_0_0__item--row"></div>
            <div class="main_dls_1_0_0__item main_dls_1_0_0__item--col main_dls_1_0_0__item--left"></div>
            <div class="main_dls_1_0_0__item main_dls_1_0_0__item--col main_dls_1_0_0__item--right"></div>
            <?php 
                get_template_part('Module/module');	
            ?>
        </main>
        <?php 
            get_template_part('Module/module_footer');    
        ?>
    </div>
    <div id="loading"></div>
</body>