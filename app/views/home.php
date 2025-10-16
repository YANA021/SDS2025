<?php
$styles = isset($styles) && is_array($styles)
  ? array_merge($styles, ['/css/home.css'])
  : ['/css/home.css'];

$scripts = isset($scripts) && is_array($scripts)
  ? array_merge($scripts, ['/js/home.js'])
  : ['/js/home.js'];
?>

<section class="home-slider" aria-label="Galería de momentos de la Semana de Sistemas">
  <div class="home-slider__window">
    <ul class="home-slider__track">
      <li class="home-slider__item is-active">
        <img src="/assets/slider/image1.jpeg" alt="Escenario principal del evento Semana de Sistemas con decoración SDS25">
      </li>
      <li class="home-slider__item">
        <img src="/assets/slider/image2.jpeg" alt="Ponentes presentando en conferencia durante la Semana de Sistemas">
      </li>
      <li class="home-slider__item">
        <img src="/assets/slider/image3.jpeg" alt="Participantes colaborando en actividades tecnológicas">
      </li>
    </ul>
    <div class="home-slider__indicators" role="tablist">
      <button class="is-active" type="button" aria-label="Mostrar imagen 1" data-slide="0"></button>
      <button type="button" aria-label="Mostrar imagen 2" data-slide="1"></button>
      <button type="button" aria-label="Mostrar imagen 3" data-slide="2"></button>
    </div>
  </div>
</section>

<section class="seccion-home seccion-introduccion" aria-labelledby="home-intro-title">
  <div class="seccion-home__contenedor">
    <div class="seccion-home__encabezado">
      <span class="etiqueta-seccion">¿Qué es la Semana de Sistemas?</span>
      <h2 id="home-intro-title">Evento académico, tecnológico y cultural de la UES-FMO</h2>
    </div>
    <div class="seccion-home__cuerpo">
      <p>
        La Semana de Sistemas es un evento académico, tecnológico y cultural organizado por la carrera de Ingeniería de Sistemas Informáticos de la Universidad de El Salvador, Facultad Multidisciplinaria Oriental, en San Miguel.
      </p>
      <p>
        Busca promover el aprendizaje, la innovación y la integración entre estudiantes, docentes, egresados y profesionales del área tecnológica, generando un espacio donde la comunidad comparte experiencias y celebra los logros de la carrera.
      </p>
      <p>
        A lo largo de la semana se desarrollan ponencias, talleres, competiciones, actividades recreativas y proyectos estudiantiles que fortalecen las habilidades técnicas, sociales y profesionales de quienes participan.
      </p>
    </div>
  </div>
</section>

<section class="seccion-home seccion-objetivos" aria-labelledby="home-goals-title">
  <div class="seccion-home__contenedor">
    <div class="seccion-home__encabezado">
      <span class="etiqueta-seccion">&#x1F3AF; Propósito del evento</span>
      <h2 id="home-goals-title">Metas de la Semana de Sistemas</h2>
    </div>
    <ul class="objetivos-home__lista" role="list">
      <li class="objetivos-home__item">
        <span class="objetivos-home__icono" aria-hidden="true"></span>
        <div>
          <h3>Impulsar el conocimiento tecnológico</h3>
          <p>Actualizamos a la comunidad con tendencias en informática, desarrollo de software, redes, IA, ciberseguridad y más.</p>
        </div>
      </li>
      <li class="objetivos-home__item">
        <span class="objetivos-home__icono" aria-hidden="true"></span>
        <div>
          <h3>Compartir experiencias con profesionales</h3>
          <p>Invitados de la industria comparten casos reales, buenas prácticas y oportunidades para proyectar la carrera.</p>
        </div>
      </li>
      <li class="objetivos-home__item">
        <span class="objetivos-home__icono" aria-hidden="true"></span>
        <div>
          <h3>Fomentar el trabajo colaborativo</h3>
          <p>Las actividades fortalecen el trabajo en equipo, la creatividad y la innovación entre estudiantes de diferentes ciclos.</p>
        </div>
      </li>
      <li class="objetivos-home__item">
        <span class="objetivos-home__icono" aria-hidden="true"></span>
        <div>
          <h3>Motivar el desarrollo de proyectos reales</h3>
          <p>Los equipos presentan soluciones tecnológicas a problemas reales, impulsando la aplicación práctica de lo aprendido.</p>
        </div>
      </li>
      <li class="objetivos-home__item">
        <span class="objetivos-home__icono" aria-hidden="true"></span>
        <div>
          <h3>Fortalecer la identidad de la carrera</h3>
          <p>Generamos convivencia, sentido de pertenencia y orgullo por ser parte de Ingeniería de Sistemas Informáticos.</p>
        </div>
      </li>
    </ul>
  </div>
</section>

<section class="seccion-home seccion-actividades" aria-labelledby="home-activities-title">
  <div class="seccion-home__contenedor">
    <div class="seccion-home__encabezado">
      <span class="etiqueta-seccion">&#x1F50D; Actividades destacadas</span>
      <h2 id="home-activities-title">¿Qué sucede durante la semana?</h2>
      <p>
        Cada edición combina formación, creatividad y convivencia con actividades diseñadas para todos los perfiles de la carrera.
      </p>
    </div>
    <div class="actividades-home__cuadricula">
      <article class="actividades-home__tarjeta">
        <h3>Conferencias especializadas</h3>
        <p>Ponencias técnicas sobre ciberseguridad, inteligencia artificial, bases de datos, redes, desarrollo de software y tendencias emergentes.</p>
      </article>
      <article class="actividades-home__tarjeta">
        <h3>Talleres prácticos</h3>
        <p>Sesiones guiadas para aplicar tecnologías y metodologías actuales con acompañamiento de docentes, egresados y profesionales.</p>
      </article>
      <article class="actividades-home__tarjeta">
        <h3>Hackathons y competencias</h3>
        <p>Retos de programación, innovación y resolución de problemas que ponen a prueba el ingenio y la colaboración de los equipos.</p>
      </article>
      <article class="actividades-home__tarjeta">
        <h3>Expo de proyectos estudiantiles</h3>
        <p>Presentaciones de prototipos y propuestas desarrolladas por estudiantes para atender necesidades reales de la comunidad.</p>
      </article>
      <article class="actividades-home__tarjeta">
        <h3>Concursos y torneos</h3>
        <p>Competencias de videojuegos, deportes y retos tecnológicos que integran habilidades técnicas con entretenimiento.</p>
      </article>
      <article class="actividades-home__tarjeta">
        <h3>Experiencias con invitados</h3>
        <p>Espacios de networking con empresas y profesionales que comparten oportunidades de empleo, prácticas y colaboración.</p>
      </article>
      <article class="actividades-home__tarjeta">
        <h3>Actividades culturales</h3>
        <p>Eventos artísticos, recreativos y sociales que fortalecen la amistad y la convivencia de toda la comunidad universitaria.</p>
      </article>
      <article class="actividades-home__tarjeta">
        <h3>Cierre con integración</h3>
        <p>Un día final para celebrar resultados, reconocer el esfuerzo y proyectar los próximos pasos de la carrera.</p>
      </article>
    </div>
  </div>
</section>
