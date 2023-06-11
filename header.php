<?php
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
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link type="image/x-icon" rel="shortcut icon" href="/wp-content/themes/SCI_Theme/Module/assets/images/favicon.png">
	<?php 
	  if(is_search()){
		echo '<meta name="googlebot" content="noindex">'; } 
	?>
	<title><?php wp_title() ?></title>
	<?php wp_head(); ?>
	<?php 
	// fix duplicate listing add noindex automatically to date, author and tag archives
	// if($paged > 1 || is_author() || is_tag() || is_date() || is_attachment()){
	// 	echo '<meta name="robots" content="noindex,nofollow" />'; } 
	?>
	<style>
		<?php
			include(locate_template('Module/assets/sass/lib.min.css')); 
			include(locate_template('Module/assets/sass/custom.min.css')); 
			include(locate_template("Module/Header/header_lhl_1_0_0/sass/header_lhl_1_0_0.min.css"));
			include(locate_template("Module/Footer/footer_lhl_1_0_0/sass/footer_lhl_1_0_0.min.css"));
            include(locate_template("Module/Home/slider_lhl_1_1_0/sass/slider_lhl_1_1_0.min.css"));
            include(locate_template("Module/Post/newsDetail_lhl_1_0_0/sass/newsDetail_lhl_1_0_0.min.css"));
            include(locate_template("Module/Post/newsOther_lhl_1_0_0/sass/newsOther_lhl_1_0_0.min.css"));
            include(locate_template("Module/Post/tags_lhl_1_0_0/sass/tags_lhl_1_0_0.min.css"));
            include(locate_template("Module/Post/navSidebar_lhl_1_0_0/sass/navSidebar_lhl_1_0_0.min.css"));
            include(locate_template("Module/Category/newsCate_lhl_1_0_0/sass/newsCate_lhl_1_0_0.min.css"));
            include(locate_template("Module/Category/clientsCate_lhl_1_0_0/sass/clientsCate_lhl_1_0_0.min.css"));
            include(locate_template("Module/Category/pagination_lhl_1_0_0/sass/pagination_lhl_1_0_0.min.css"));
		?>
	</style>
</head>
<body class="site">
<div class="page">			
<?php 
	get_template_part('Module/control/module_header'); 
?>