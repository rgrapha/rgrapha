<?php
/**
 * Template Name: Home
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>
	<main id="home" class="home" tabindex="-1" role="main">
		<section class="banner-desktop">
			<article class="margins">			
				<div class="E-fadein">  
					<h1>Lorem Ipsum</h1>
	           		<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
	           		<a href="">Saiba mais</a>
	       		</div>
	         	<div class="E-fadein">
	         		<img  src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.svg" alt="RG Rapha"/>
	         	</div>
         	</article>
        </section> 
        <section class="acesso-rapido">
    		<article class="box">
    			<h2>01</h2>
    			<h3 class="E-descer"><span>Website</span></h3>
    			<p class="E-descer">Desenvolvo websites de alta qualidade, com foco na experiência do usuário e estética visual. Meu trabalho destaca-se pela combinação de design moderno, navegação intuitiva e desempenho sólido, garantindo presenças online impactantes e eficazes.</p>
    			<!-- <span class="veja">Saiba mais</span> -->
    		</article>
    		<article class="box">
    			<h2>02</h2>
    			<h3 class="E-descer"><span>Front-end</span></h3>
    			<p class="E-descer">Desenvolvo interfaces web com código limpo e semântico, seguindo padrões modernos como HTML5 e CSS3, garantindo assim sites e aplicativos rápidos, seguros e otimizados para dispositivos móveis.</p>
    			<!-- <span class="veja">Saiba mais</span> -->
    		</article>
    		<article class="box">
    			<h2>03</h2>
    			<h3 class="E-descer"><span>Wordpress</span></h3>
    			<p class="E-descer">Como especialista em WordPress, crio websites envolventes e funcionais, personalizando temas, implementando plugins e garantindo uma presença online única para cada projeto.</p>
    			<!-- <span class="veja">Saiba mais</span> -->
    		</article>      	
        </section>
        <section class="sobre-home">
        	<article class="margins">
	        		<div class="titulo E-fadein">
	        			<h2>Sobre<span>Quem sou eu</span></h2>
	        		</div>
        			
        			<div class="texto E-direita">
        				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat ex ea commodo.</p>
        				<article id="ativacao"></article>
        				<a href="<?php echo esc_url( home_url( 'sobre' ) ); ?>" class="botao desktop E-direita">Saiba mais</a>
        			</div>
        			<div class="habilidades E-fadein">
        				<article class="box">
	        				<p>HTML5</p>
	        				<div class="progress">        					
							    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
							      	<span>96%</span>
							    </div>
							</div>
						</article>
						<article class="box">
							<p>CSS3</p>
							<div class="progress">							
							    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
							      	<span>85%</span>
							    </div>
							</div>
						</article>
						<article class="box">
							<p>JavaScript</p>
							<div class="progress">							
								<div class="progress-bar" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100">
									<span>52%</span>
								</div>
							</div>
						</article>						
						<article class="box">
							<p>wordPress</p>
							<div class="progress">							
								<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
									<span>70%</span>
								</div>
							</div>
						</article>
						<article class="box">
							<p>Figma</p>
							<div class="progress">							
								<div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
									<span>40%</span>
								</div>
							</div>
						</article>
						<a href="<?php echo esc_url( home_url( 'sobre' ) ); ?>" class="botao mobile">Saiba mais</a>
        			</div>
        			
			  <script>
			    $(document).ready(function() {
					// Função para animar a barra de progresso com um tempo de animação personalizado
					function animateProgressBar(bar, width, animationTime) {
						bar.animate(
							{
								width: width
							},
							animationTime, // Tempo da animação em milissegundos
							function() {
								// Callback opcional após a conclusão da animação
							}
						);
					}

				  // Adicione um manipulador de evento de rolagem
					$(window).scroll(function() {
						// Obtenha a posição do elemento com o ID "ativacao"
						var ativacaoPosition = $("#ativacao").offset().top;

						// Obtenha a posição atual da barra de rolagem
						var scrollPosition = $(window).scrollTop();

						// Verifique se a posição de rolagem ultrapassou a posição do elemento "ativacao"
						if (scrollPosition > ativacaoPosition - $(window).height()) {
							// Se sim, ative a animação da barra de progresso com tempos diferentes
							animateProgressBar($(".progress-bar:eq(0)"), "96%", 1);
							animateProgressBar($(".progress-bar:eq(1)"), "85%", 1);
							animateProgressBar($(".progress-bar:eq(2)"), "52%", 1);
							animateProgressBar($(".progress-bar:eq(3)"), "70%", 1);
							animateProgressBar($(".progress-bar:eq(4)"), "40%", 1);
						}
					});
				});
			  </script>
        	</article>        
        </section>
        <section class="portifolio-home">
        	<div class="titulo E-fadein">
    			<h2>Portfólio<span>últimos trabalhos</span></h2>
    		</div>
        	<?php
				$args = array('post_type' => 'portfolio','posts_per_page' => 8, 'orderby' => 'rand');
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
        </section>
		
	</main><!-- #main -->	
<?php
get_footer();
