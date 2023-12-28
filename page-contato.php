<?php
/**
 * Template Name: Contato
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

	<main id="profissoes" class="profissoes" tabindex="-1" role="main">
		<section id="barra-breadcrumb" class="barra-breadcrumb">
			<article class="margins">
				<h1><?php the_title(); ?></h1>			
				<ul>
					<li><a href="<?php echo esc_url( home_url( 'home' ) ); ?>">Home</a></li> >					
					<li><?php the_title(); ?></li>
				</ul>
			</article>			
		</section>
		<section class="contato">
			<div class="margins">
				<div class="dados">
					<address class="end">
						<strong>Endereço</strong>
						Av. Vereador José Ferreira, 513<br>
						(antigo Batalhão da PM)<br>
						Extrema - Minas Gerais<br>
					</address>
					<address class="tel">
						<strong>Telefone</strong>
						<a href="tel:03534356640"> (35) 3435-6640</a>
					</address>
					<address class="tel">
						<strong>E-mail</strong>
						<a href="mailto:deduc@extrema.mg.gov.br"> deduc@extrema.mg.gov.br</a>
					</address>
					<address>
						<strong>Horário de atendimento:</strong>
						Atendimento ao público de <br>
						segunda a sexta-feira, <br>
						das 8h às 12h e das 13h às 17h.
					</address>		
				</div>
				<div class="imagem">
        			<img  src="<?php echo get_template_directory_uri(); ?>/assets/images/vetor3.svg"/>
        		</div>
			</div>	
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d273.27269718382536!2d-46.31437134362745!3d-22.850419588373896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1695135344502!5m2!1spt-BR!2sbr" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>					
		</section>
	</main><!-- #main -->
 <div class="teste"></div>
<?php
get_footer();
