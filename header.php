<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
	<!-- <meta name="keywords" content="Extremamente Caipira, Caipira, parque de enventos, extremaMG, Extrema, Mostra teatro, festival-de-inverno, Festival de Inverno, festival cultural de inverno"> -->
    <meta name="robots" content="index, follow"/>
    <meta name="rating" content="general">
	<meta name="distribution" content="global">
	<meta name="language" content="PT">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

	<script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/main-js.js"></script>

	<script src='<?php echo get_template_directory_uri(); ?>/assets/js/fade.js'></script>
</head>

<body <?php body_class(); ?>>
	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>

	<!-- VLibras Acessibilidade -->
  	<div class="V-libras">
  		<div vw class="enabled">
		    <div vw-access-button class="active"></div>
		    <div vw-plugin-wrapper>
		      <div class="vw-plugin-top-wrapper"></div>
		    </div>
	  	</div>
	  	<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
		<script>
		    new window.VLibras.Widget('https://vlibras.gov.br/app');
	  	</script>
  	</div>
  	
	<header id="header" role="banner" class="">		
		<div id="menu-desktop" class="menu-desktop margins">
			<div id="main-navigation" class="navbar navbar-default main-navigation">
				<a class="logo" href="<?php echo esc_url( home_url( 'home' ) ); ?>" alt="RG Rapha" title="RG Rapha"><img  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="RG Rapha"/></a>
				<nav class="navbar-header">		
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>
				</nav>				
			</div>
		</div>
		
		<div id="menu-responsive" class="menu-responsive">			
			<a class="logo" href="<?php echo esc_url( home_url( 'home' ) ); ?>" alt="RG Rapha" title="RG Rapha"><img  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="RG Rapha"/></a>
		
			<div class="menu-trigger" id="menu-trigger">
				<input type="checkbox" id="check">
				<label id="icone" class="icone" for="check"></label>
				<span></span>
			</div>
			
			<div class="conteudo" id="menu-hidde">
				<div class="box-menu">						
					<div id="main-navigation" class="navbar navbar-default main-navigation2">
						<nav class="navbar-header">		
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'main-menu',
										'depth'          => 2,
										'container'      => false,
										'menu_class'     => 'nav navbar-nav',
										'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
										'walker'         => new Odin_Bootstrap_Nav_Walker()
									)
								);
							?>
						</nav>
					</div>				
				</div>
			</div>			
		</div>
	</header><!-- #header -->
