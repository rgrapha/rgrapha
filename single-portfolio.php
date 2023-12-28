<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="portifolio" class="portifolio" tabindex="-1" role="main">
		<section id="barra-breadcrumb" class="barra-breadcrumb">
			<title>Portifólio</title>
			<h1><?php the_title(); ?></h1>			
			<ul>
				<li><a href="<?php echo esc_url( home_url( 'home' ) ); ?>">Home</a></li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta.svg"/>	
				<li><a href="<?php echo esc_url( home_url( 'portfolio' ) ); ?>">Portifólio</a></li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta.svg"/>				
				<li><?php the_title(); ?></li>
			</ul>
		</section>
		<section class="conteudo margins">
			<?php the_content(); ?>
		</section>
	</main><!-- #main -->
<?php
get_footer();
