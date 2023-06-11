<?php 
	/* Template Name: Page Video
	* Template Post Type: page
    */       

    //set headers to NOT cache a page
    header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
    header("Pragma: no-cache"); //HTTP 1.0
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

    //or, if you DO want a file to cache, use:
    header("Cache-Control: max-age=31557600"); //30days (60sec  60min  24hours * 30days)

?>
<!DOCTYPE html>
<html lang="en">

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
	<link type="image/x-icon" rel="shortcut icon" href="/wp-content/themes/SCI_Theme/Module/assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title() ?></title>
    <?php wp_head(); ?>
    <style>
        <?php
            include(locate_template('Module/assets/sass/lib.min.css')); 
            include(locate_template('Module/assets/sass/custom.min.css')); 
            include(locate_template("Module/Header/header_lhl_1_0_0/sass/header_lhl_1_0_0.min.css"));
            include(locate_template("Module/Footer/footer_lhl_1_0_0/sass/footer_lhl_1_0_0.min.css"));
            include(locate_template("Module/Home/video_lhl_1_0_0/sass/video_lhl_1_0_0.min.css"));
            include(locate_template("Module/Home/slider_lhl_1_1_0/sass/slider_lhl_1_1_0.min.css"));
        ?>
    </style>
</head>

<body>
    <div class="page">
        <?php 
            get_template_part('Module/control/module_header'); 
            get_template_part('Module/control/module');	
            get_template_part('Module/control/module_footer');    
        ?>
    </div>
    <div id="loading"></div>
    <script>
        <?php
            include(locate_template('Module/assets/js/lib.min.js')); 
            include(locate_template('Module/assets/js/module.min.js')); 
            include(locate_template('Module/Header/header_lhl_1_0_0/js/header_lhl_1_0_0.min.js')); 
            include(locate_template('Module/Home/video_lhl_1_0_0/js/video_lhl_1_0_0.min.js')); 
        ?>
    </script>
</body>