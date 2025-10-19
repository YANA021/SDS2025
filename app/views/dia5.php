<?php
$styles = isset($styles) && is_array($styles)
  ? array_merge($styles, ['/css/dia5.css'])
  : ['/css/dia5.css'];

$bingoImagenes = [
  '/assets/slider/b1.jpeg',
  '/assets/slider/b2.jpeg',
  '/assets/slider/b3.jpeg',
  '/assets/slider/b4.jpeg',
  '/assets/slider/b5.jpeg',
  '/assets/slider/b6.jpeg',
  '/assets/slider/b7.jpeg',
  '/assets/slider/b8.jpeg',
  '/assets/slider/b9.jpeg',
];

$premiosImagenes = [
  '/assets/slider/medallas.jpeg',
  '/assets/slider/medallas2.jpeg',
  '/assets/slider/medallas3.jpeg',
];

$torneoImagenes = [
  '/assets/slider/royale.jpeg',
  '/assets/slider/royale2.jpeg',
  '/assets/slider/royale3.jpeg',
  '/assets/slider/royale4.jpeg',
  '/assets/slider/royale6.jpeg',
  '/assets/slider/royale7.jpeg',
  '/assets/slider/ganadores.jpg',
  '/assets/slider/ganadores2.jpg',
];
?>

<section class="dia5">
  <header class="dia5__encabezado">
    <span class="dia5__etiqueta">Día 5</span>
    <h1 class="dia5__titulo">Cierre festivo y competencia gamer</h1>
    <p class="dia5__descripcion">
      El último día combinó actividades recreativas, premiaciones y un torneo de videojuegos que reunió a la comunidad SDS25 para celebrar logros y experiencias inolvidables.
    </p>
  </header>

  <section class="dia5__bloque dia5__bloque--bingo" id="dia5-bingo">
    <div class="dia5__bloque-texto">
      <h2>Bingo</h2>
      <p>
        Se llevó a cabo una actividad recreativa utilizando el juego de Bingo. Esta dinámica fue organizada como parte del proyecto de los estudiantes de HDP 25.
        Para participar, se vendían 100 créditos por $1.00, lo que daba derecho a un cartón de juego.
      </p>
    </div>
    <div class="dia5__galeria dia5__galeria--bingo">
      <?php foreach ($bingoImagenes as $imagen): ?>
        <figure class="dia5__galeria-item">
          <img src="<?php echo $imagen; ?>">
        </figure>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="dia5__bloque dia5__bloque--premios" id="dia5-premios">
    <div class="dia5__bloque-texto">
      <h2>Entrega de diplomas y premios de los stands</h2>
      <p>
        Reconocimos la dedicación de los equipos que brillaron durante la Semana de Sistemas. La ceremonia incluyó diplomas, medallas y el agradecimiento a quienes compartieron sus proyectos con la comunidad.
      </p>
    </div>
    <div class="dia5__galeria dia5__galeria--premios">
      <?php foreach ($premiosImagenes as $imagen): ?>
        <figure class="dia5__galeria-item">
          <img src="<?php echo $imagen; ?>">
        </figure>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="dia5__bloque dia5__bloque--torneo" id="dia5-torneo">
    <div class="dia5__bloque-texto">
      <h2>Torneo de Videojuegos</h2>
      <p>
        Además, durante la tarde se desarrolló un torneo del videojuego “Clash Royale”, en el cual se definieron los ganadores obteniendo primero y segundo lugar.
      </p>
    </div>
    <div class="dia5__galeria dia5__galeria--torneo">
      <?php foreach ($torneoImagenes as $imagen): ?>
        <figure class="dia5__galeria-item">
          <img src="<?php echo $imagen; ?>">
        </figure>
      <?php endforeach; ?>
      <figure class="dia5__galeria-item dia5__galeria-item--video">
        <video controls preload="metadata" poster="/assets/slider/royale.jpeg">
          <source src="/assets/slider/royale5.mp4" type="video/mp4">
        </video>
      </figure>
    </div>
  </section>
</section>
