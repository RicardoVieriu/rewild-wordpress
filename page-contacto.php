<?php
/*
Template Name: Contacto
*/
get_header();
?>

<main id="main">
	<div class="container">
		<div class="row gtr-200">

			<div class="col-12">
				<section class="box page-content">
					<header>
						<h2>Contacto</h2>
						<h3>Estamos encantados de escucharte</h3>
						<p>
							Si quieres colaborar con ReWild Project, resolver dudas o proponernos una iniciativa,
							puedes escribirnos a través del formulario o contactarnos por nuestras redes.
						</p>
					</header>
				</section>
			</div>

			<div class="col-8 col-12-medium">
				<section class="box page-content">
					<header>
						<h2>Envíanos un mensaje</h2>
					</header>

					<div class="contact-form-wrapper">
						<?php echo do_shortcode('[wpforms id="36"]'); ?>
					</div>
				</section>
			</div>

			<div class="col-4 col-12-medium">
				<section class="box page-content">
					<header>
						<h2>Información</h2>
					</header>

					<section>
						<h3>Email</h3>
						<p>
							<a href="mailto:presidenciarewildproject@gmail.com">
								presidenciarewildproject@gmail.com
							</a>
						</p>

						<h3>Ubicación</h3>
						<p>Jerez de la Frontera, Cádiz</p>
					</section>

					<section>
	<h3>Síguenos</h3>

	<div style="display:grid; grid-template-columns:repeat(2, 120px); justify-content:center; gap:24px 20px; margin-top:1.5em;">

		<a href="https://www.youtube.com/@ReWildProject" target="_blank" rel="noopener noreferrer"
		   style="display:flex; flex-direction:column; align-items:center; justify-content:flex-start; text-decoration:none; color:#333; width:120px; min-height:90px; text-align:center;">
			<img src="<?php echo get_template_directory_uri(); ?>/images/youtube.ico" alt="YouTube"
			     style="display:block; width:40px; height:40px; max-width:40px; margin:0 auto 10px auto; object-fit:contain;">
			<span style="display:block; width:100%; text-align:center; font-size:16px; line-height:1.2; margin:0;">YouTube</span>
		</a>

		<a href="https://x.com/rewild_project_?s=21&t=PpV51uG33N5zV-Us1uulcA" target="_blank" rel="noopener noreferrer"
		   style="display:flex; flex-direction:column; align-items:center; justify-content:flex-start; text-decoration:none; color:#333; width:120px; min-height:90px; text-align:center;">
			<img src="<?php echo get_template_directory_uri(); ?>/images/twitter.ico" alt="X"
			     style="display:block; width:40px; height:40px; max-width:40px; margin:0 auto 10px auto; object-fit:contain;">
			<span style="display:block; width:100%; text-align:center; font-size:16px; line-height:1.2; margin:0;">X</span>
		</a>

		<a href="https://www.instagram.com/rewild_projects/?igsh=bnJpdHRyNWtxb3E3" target="_blank" rel="noopener noreferrer"
		   style="display:flex; flex-direction:column; align-items:center; justify-content:flex-start; text-decoration:none; color:#333; width:120px; min-height:90px; text-align:center;">
			<img src="<?php echo get_template_directory_uri(); ?>/images/instagram.ico" alt="Instagram"
			     style="display:block; width:40px; height:40px; max-width:40px; margin:0 auto 10px auto; object-fit:contain;">
			<span style="display:block; width:100%; text-align:center; font-size:16px; line-height:1.2; margin:0;">Instagram</span>
		</a>

		<a href="mailto:ricardovieriu1913@alumnos.alborfp.com"
		   style="display:flex; flex-direction:column; align-items:center; justify-content:flex-start; text-decoration:none; color:#333; width:120px; min-height:90px; text-align:center;">
			<img src="<?php echo get_template_directory_uri(); ?>/images/gmail.ico" alt="Email"
			     style="display:block; width:40px; height:40px; max-width:40px; margin:0 auto 10px auto; object-fit:contain;">
			<span style="display:block; width:100%; text-align:center; font-size:16px; line-height:1.2; margin:0;">Email</span>
		</a>

	</div>
</section>

			<div class="col-12">
				<section class="box page-content">
					<header>
						<h2>Encuéntranos</h2>
					</header>

					<div class="map-wrapper">
						<iframe
							src="https://www.google.com/maps?q=Jerez%20de%20la%20Frontera&output=embed"
							width="100%"
							height="350"
							style="border:0;"
							loading="lazy">
						</iframe>
					</div>
				</section>
			</div>

		</div>
	</div>
</main>

<?php get_footer(); ?>