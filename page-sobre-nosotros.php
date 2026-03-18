<?php
/*
Template Name: Sobre Nosotros
*/
get_header();
?>

<main id="main">
  <div class="container">

    <article class="box page-content">
      <header>
        <h2>Sobre Nosotros</h2>
        <h3>Bienvenido a ReWild Projects</h3>
        <ul class="meta">
          <li class="icon fa-clock">Jerez de la Frontera</li>
        </ul>
      </header>

      <section>
        <span class="image featured">
          <img src="<?php echo get_template_directory_uri(); ?>/images/arboles-rentables-en-espana-2.jpg" alt="Árboles" />
        </span>

        <h3>¡Juntos por un Futuro Sostenible!</h3>
        <p>
          Somos un pequeño grupo de entusiastas comprometidos con el planeta, unidos por una gran pasión: el medio ambiente. 
          Vivimos en una época crucial donde las decisiones que tomemos hoy impactarán directamente en el mañana.
        </p>

        <h3>Pasión por nuestro sector</h3>
        <p>
          Creemos firmemente que cada pequeña acción cuenta. Desde reciclar correctamente hasta apoyar iniciativas sostenibles, 
          todos podemos ser agentes de cambio.
        </p>

        <h3>Nuestro Objetivo</h3>
        <p>
          Inspirar, educar y movilizar. Queremos compartir información, desmontar mitos y proponer soluciones prácticas 
          para vivir en armonía con la naturaleza.
        </p>

        <h4>
          <strong>
            Únete a nosotros en este viaje. Aprende, comparte, y sé parte de la solución.
          </strong>
        </h4>
      </section>
    </article>

    <section class="box features">
      <h2 class="major"><span>Nuestros Proyectos</span></h2>
      <div class="row">

        <div class="col-3 col-6-medium col-12-small">
          <section class="box feature">
            <a href="#" class="image featured">
              <img src="<?php echo get_template_directory_uri(); ?>/images/pic01.jpg" alt="Proyecto 1" />
            </a>
            <h3><a href="#">Proyecto 1</a></h3>
            <p>Descripción breve del proyecto en curso relacionado con la reforestación.</p>
          </section>
        </div>

        <div class="col-3 col-6-medium col-12-small">
          <section class="box feature">
            <a href="#" class="image featured">
              <img src="<?php echo get_template_directory_uri(); ?>/images/pic02.jpg" alt="Proyecto 2" />
            </a>
            <h3><a href="#">Proyecto 2</a></h3>
            <p>Acción comunitaria de reciclaje en zonas urbanas.</p>
          </section>
        </div>

        <div class="col-3 col-6-medium col-12-small">
          <section class="box feature">
            <a href="#" class="image featured">
              <img src="<?php echo get_template_directory_uri(); ?>/images/pic03.jpg" alt="Proyecto 3" />
            </a>
            <h3><a href="#">Proyecto 3</a></h3>
            <p>Protección de especies autóctonas en peligro de extinción.</p>
          </section>
        </div>

        <div class="col-3 col-6-medium col-12-small">
          <section class="box feature">
            <a href="#" class="image featured">
              <img src="<?php echo get_template_directory_uri(); ?>/images/pic04.jpg" alt="Proyecto 4" />
            </a>
            <h3><a href="#">Proyecto 4</a></h3>
            <p>Campañas educativas para escuelas.</p>
          </section>
        </div>

      </div>
    </section>

  </div>
</main>

<?php get_footer(); ?>