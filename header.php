<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PROINCOB</title>
        <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory');?>/img/favicon2.png">
		<?php wp_head(); ?>
	</head>
    <body style="overflow-x:hidden;">
<header id="header" class="menuprincipal" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav ',
									'walker' => new Bootstrap_Walker_Nav_Menu()
									)
								);
							?>
                </div>
            </div>
        </div>
    </header><!--/#header-->