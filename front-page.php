<?php get_header(); ?>

<!-- Banner -->
<section id="banner">
	<div class="content">
		<h2>Bienvenido a una nueva forma de cambiar el mundo</h2>
		<p>Esto es lo que el mundo necesita</p>
		<a href="#main" class="button scrolly">Baja y te explicamos por qué.</a>
	</div>
</section>

<!-- Main -->
<section id="main">
	<div class="container">
		<div class="row gtr-200">
			<div class="col-12">

				<!-- Highlight -->
				<section class="box highlight">
					<div class="col-12">
						<ul class="actions">
							<li><a href="<?php echo esc_url(home_url('/registro')); ?>" class="button large">Regístrate</a></li>
							<li><a href="<?php echo esc_url(home_url('/sesion')); ?>" class="button alt large">Inicia Sesión</a></li>
						</ul>
						<br>
					</div>
					<header>
						<h2>Ayuda a cambiar el mundo pintándolo de verde</h2>
						<p>Tu ayuda es importante y contra más mejor</p>
					</header>
					<p>
						¡Cuidemos nuestro hogar, el planeta! Cada pequeño gesto cuenta: reciclar, reducir el uso de plásticos, ahorrar agua y energía. <br />
						Juntos podemos combatir el cambio climático, proteger la biodiversidad y asegurar un futuro sostenible. El planeta nos da vida, ¡devuélvele el favor!
					</p>
				</section>

			</div>

			<div class="col-12">

				<!-- Features -->
				<section class="box features">
					<h2 class="major"><span>Menú</span></h2>
					<div>
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<section class="box feature">
									<a href="#" class="image featured">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/images/pic01.jpg'); ?>" alt="Apadrinar un árbol" />
									</a>
									<h3><a href="#">Apadrinar un árbol</a></h3>
								</section>

							</div>

							<div class="col-3 col-6-medium col-12-small">

								<section class="box feature">
									<a href="<?php echo esc_url(home_url('/huella-carbono')); ?>" class="image featured">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/images/pic02.jpg'); ?>" alt="Huella de carbono" />
									</a>
									<h3><a href="<?php echo esc_url(home_url('/huella-carbono')); ?>">Huella de carbono</a></h3>
								</section>

							</div>

							<div class="col-3 col-6-medium col-12-small">

								<section class="box feature">
									<a href="<?php echo esc_url(home_url('/cursos')); ?>" class="image featured">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/images/pic03.jpg'); ?>" alt="Cursos" />
									</a>
									<h3><a href="<?php echo esc_url(home_url('/cursos')); ?>">Cursos</a></h3>
								</section>

							</div>

							<div class="col-3 col-6-medium col-12-small">

								<section class="box feature">
									<a href="<?php echo esc_url(home_url('/educacion-ambiental')); ?>" class="image featured">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/images/pic04.jpg'); ?>" alt="Educación ambiental" />
									</a>
									<h3><a href="<?php echo esc_url(home_url('/educacion-ambiental')); ?>">Educación ambiental</a></h3>
								</section>

							</div>
						</div>
					</div>
				</section>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>