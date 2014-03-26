<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" type="text/css" media="(max-width: 1430px)" href="<?php bloginfo( 'template_url' ); ?>/style-1430.css" />
    <link rel="stylesheet" type="text/css" media="(max-width: 680px)" href="<?php bloginfo( 'template_url' ); ?>/style-680.css" />
    <link rel="stylesheet" type="text/css" media="(max-width: 580px)" href="<?php bloginfo( 'template_url' ); ?>/style-580.css" />
	<title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>

</head>
<body>
	<?php
if ( is_user_logged_in() ) {
    ?>
    <header class="head-logged-in"><?php
} else {
    ?>
    <header><?php }?>
        <div id="menue">
            <div id="w-title">
                <a class="title" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                <p><?php bloginfo('description'); ?></p>
            </div>
            <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
        </div>
        <div class="flt-r"><?php get_search_form(); ?></div>
        <div style="clear:both;"></div>
	</header>