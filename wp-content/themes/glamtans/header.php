<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/wp-content/themes/glamtans/images/favicon.png">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body>
	<!-- Wrapper -->
    <div id="wrapper">

        <!--HEADER-->
        <header id="header" class="header-static header-fullwidth">
            <div id="header-wrap">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="index.html" class="logo" data-dark-logo="/wp-content/themes/glamtans/images/glamtans-logo-blank.png">
                            <img src="/wp-content/themes/glamtans/images/glamtans-logo-blank.png" alt="Polo Logo">
                        </a>
                    </div>
                    <!--End: Logo-->

                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <button class="lines-button x"> <span class="lines"></span> </button>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->

                    <!--Navigation-->
                    <div id="mainMenu" class="light">
                        <div class="container">
	                        <nav>
	                            <?php wp_nav_menu( array(
								'menu'              => 'header-menu',
								'theme_location'    => 'header-menu',
								'depth'             => 1,
								'container'         => 'ul',
								'container_class'   => '',
								'container_id'      => '',
								'menu_class'        => '',
								'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								'walker'            => new wp_bootstrap_navwalker())
								);
								?>
							</nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!--END: HEADER-->