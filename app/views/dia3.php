<?php
$styles = isset($styles) && is_array($styles)
  ? array_merge($styles, ['/css/dia3.css'])
  : ['/css/dia3.css'];
?>

<section class="dia3">
  <header class="dia3__header">
    <div class="dia3__marca">
      <span class="dia3__badge">Noticia pasada</span>
      <h1 class="dia3__titulo">Cancelacion del Torneo de Futbol 11 SDS25</h1>
    </div>
    <p class="dia3__resumen">
      Debido a las fuertes lluvias y al traslado de todas las actividades universitarias a modalidad virtual,
      el torneo de futbol previsto para el miercoles 15 de octubre no se pudo celebrar.
    </p>
  </header>

  <div class="dia3__card">
    <figure class="dia3__media">
      <img src="/assets/slider/torneo.jpeg" alt="Afiche del Torneo de Futbol 11 de la Semana de Sistemas">
      <figcaption>
        Torneo de Futbol 11 SDS25 - actividad cancelada por condiciones climaticas.
      </figcaption>
    </figure>

    <article class="dia3__detalle">
      <h2>Aviso importante</h2>
      <p>
        El comite organizador comunico que, para proteger a los equipos y a la comunidad universitaria,
        la competencia fue suspendida. Las inscripciones se mantienen registradas y se evaluara reprogramar
        el encuentro cuando las condiciones meteorologicas lo permitan.
      </p>
      <ul class="dia3__lista">
        <li>Los capitanes seran notificados por correo sobre futuras decisiones respecto al torneo.</li>
        <li>Se invita a los equipos a participar en las dinamicas en linea y foros tecnicos del evento.</li>
      </ul>
      <p class="dia3__seguimiento">
        Agradecemos la comprension y el entusiasmo de todas las personas inscritas. Sigamos conectados con
        la Semana de Sistemas SDS25.
      </p>
      <div class="dia3__acciones">
        <a class="dia3__boton" href="/dia/2">Resumen del Dia 2</a>
        <a class="dia3__boton" href="/dia/4">Resumen del Dia 4</a>
      </div>
    </article>
  </div>
</section>
