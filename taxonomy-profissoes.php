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

get_header();?>
<?php
	$marca = wp_get_post_terms( $post->ID, 'competencia');
?>

	<main id="categoria" class="categoria" tabindex="-1" role="main">
		<section id="barra-breadcrumb" class="barra-breadcrumb">
			<title><?php single_cat_title(''); ?></title>
			<article class="margins">
				<h1><?php single_cat_title(''); ?></h1>			
				<ul>
					<li><a href="<?php echo esc_url( home_url( 'home' ) ); ?>">Home</a></li> >					
					<li><?php single_cat_title(''); ?></li>
				</ul>
			</article>	
		</section>
		
		<section class="todos-profissoes margins">
			<div class="lista">				
				<?php
					if(have_posts()):
						while(have_posts()):
							the_post();?>
								<?php		               				
									$sobremim =  get_post_meta( $post->ID,'sobre-mim', true );
								?>
								<article>
									<div class="box">
										<h3 class="nome"><?php the_title();?></h3>
										<div class="texto"><?php echo $sobremim ?></div>
										<div class="todas-competecias">
											<strong>Competêcias:</strong>
											<?php										
												$taxonomy_slug = 'competencia';
												$terms = get_the_terms(get_the_ID(), $taxonomy_slug);
												if ($terms && !is_wp_error($terms)) {
												    foreach ($terms as $term) {
												        echo '<p>' . $term->name . '</p>,';
												    }
												}
											?>
										</div>
										<a href="<?php the_permalink()?>">Saiba Mais</a>
										
									</div>
								</article>	
							<?php
						endwhile;
						wp_reset_postdata();
					endif;
				?>
			</div>
		</section>
		<style>
	        
	    </style>
	</main><!-- #main -->
<?php
get_footer();
