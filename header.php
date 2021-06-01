<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
    </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Google Fonts (Roboto & Archivo Black) -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto:ital,wght@0,300;0,400;0,900;1,700&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <?php wp_head(); ?> <!—very important that this is added-->
</head>

<body>
    <header class="container-fluid indexheaderbg"<?php if ( get_field(' headerlargebackgroundimage ') ) { echo 'style="background: url(' . get_field(' headerlargebackgroundimage ') . ')"'; } ?>>
        <nav class="navbar content-width">
            <div class="container-fluid remove-padding">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html"><img alt="Flipside Tours Logo" src="http://206.189.45.97/~mesh22/sub4/wp-content/themes/flipside_tours_website/graphics/logo/logotype-img.svg"></a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php wp_nav_menu(array(
                            'menu' => 'flipside-menu',
                            'items_wrap'=>'%3$s',
                            'container' => false,
                            'list_item_class' => "nav-item",
                            'link_class' => "nav-link",
                        )); ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container remove-padding content-width">
            <div class="row tagline-header content-align">
                <div class="col-md-6 remove-padding">
                    <h1><?php the_field('headerlargemaintagline'); ?></h1>
                    <!--Main Tag Line-->

                    <p><?php the_field('headerlargetext'); ?></p>

                    <a href="<?php the_field('headerlargebutton'); ?>"><button type="button" class="btn">View Now</button></a>
                </div>
                <!--Column Medium 6-->

                <div class="col-md-6">

                </div>
                <!--Column Medium 6 (Empty)-->
            </div>
            <!--Row-->
        </div>
    </header>
