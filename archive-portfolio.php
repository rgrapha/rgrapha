<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="portifolio" class="portifolio" tabindex="-1" role="main">
		<section id="barra-breadcrumb" class="barra-breadcrumb">
			<title>Portifólio</title>
			<h1>Portifólio</h1>			
			<ul>
				<li><a href="<?php echo esc_url( home_url( 'home' ) ); ?>">Home</a></li>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta.svg"/>				
				<li>Portifólio</li>
			</ul>
		</section>
		
		<section class="todos"> 
			<article class="margins">
	        	<?php
					$args = array('post_type' => 'portfolio','posts_per_page' => -1);
						$var = new WP_Query($args);
						if($var->have_posts()):
							while($var->have_posts()):
								$var->the_post(); ?>												
									<article class="box E-descer">
										<a href="<?php the_permalink()?>">
											<div class="imagem">
												<?php echo odin_thumbnail( 1500, 1500, true,true);?>
											</div>
										</a>	
									</article>
								<?php
						endwhile;
					endif;
				wp_reset_postdata(); ?>      
			</article>    	
        </section>
	</main><!-- #main -->

<?php
get_footer();
