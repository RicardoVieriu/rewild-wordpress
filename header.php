<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class('homepage is-preload'); ?>>
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header">
			<div class="logo container">
				<div>
					<h1>
						<a href="<?php echo esc_url(home_url('/')); ?>">
							<img 
								src="<?php echo esc_url(get_template_directory_uri() . '/images/REWILD PROJECT PNG logo.png'); ?>" 
								width="75" 
								height="75" 
								alt="Logo ReWild Project" 
							/>
						</a>
					</h1>
				</div>
			</div>
		</header>

		<!-- Nav -->
		<nav id="nav">
			<ul>
				<li>
					<img src="<?php echo esc_url(get_template_directory_uri() . '/images/REWILD PNG letra.png'); ?>" height="25" alt="ReWild" />
				</li>
				<li>
					<img src="<?php echo esc_url(get_template_directory_uri() . '/images/PROJECT PNG letra.png'); ?>" height="25" alt="Project" />
				</li>

				<li class="current"><a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a></li>
				<li><a href="<?php echo esc_url(home_url('/sobre-nosotros')); ?>">¿Quienes somos?</a></li>
				<li>
					<a href="#">Nuestros proyectos</a>
					<ul>
						<li><a href="#">Apadrinar un árbol</a></li>
						<li><a href="<?php echo esc_url(home_url('/huella-carbono')); ?>">Huella de carbono</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Formación ambiental</a>
					<ul>
						<li><a href="<?php echo esc_url(home_url('/cursos')); ?>">Cursos</a></li>
						<li><a href="<?php echo esc_url(home_url('/educacion-ambiental')); ?>">Educación ambiental</a></li>
					</ul>
				</li>
				<li><a href="#">Tienda</a></li>
				<li><a href="<?php echo esc_url(home_url('/contacto')); ?>">Contacto</a></li>
			</ul>
		</nav>