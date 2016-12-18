<!doctype html>

<!--[if lt IE 9]> <html class="no-js lte9 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if gt IE 9]>  <html> <![endif]-->
<!--[if !IE]><!-->
<html>
	<head>
		<title><?php wp_title("::", "true", "right");?> <?php bloginfo('name'); ?></title>
		  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

		<?php wp_head();?>
	</head>
	<body <?php body_class( 'class-name' ); ?>>
		<div class="wrapper">
		<header class="main-header container">
			<div class="col-md-6 barra-sup logo-wrap">
				<h1 class="logo">Silvana Cerini &gt; Negociación</h1>
			</div>
			<div class="col-md-6 barra-sup der">
				<span class="tel"><span class="fa fa-mobile-phone"></span>0500-34576</span>	
				<span class="mail"><span class="fa fa-envelope"></span>silvanacerini@consultoracerini.com.ar</span>
			</div>
			<div class="row">
				<div class="col-md-10">
					<div class="navbar ">
							<?php wp_nav_menu( array( 'theme_location' => 'home-menu',
							  'depth' => 2,
							  'container' => false,
							  'menu_class' => 'nav',
							  'walker' => new BootstrapNavMenuWalker())); ?>
					</div>
				</div>
				<div class="col-md-2">
					<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
						<input type="search" class="search-field" placeholder="Buscar …" value="" name="s" title="Buscar" />
					  	<button type="submit" class="btn"><span class="fa fa-search"></span>
					  </button>
				  	</form>
				</div>
			</div>
		</header>