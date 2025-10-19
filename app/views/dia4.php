<?php
$styles = isset($styles) && is_array($styles)
  ? array_merge($styles, ['/css/dia4.css'])
  : ['/css/dia4.css'];

$galeria = [
  [
    'src' => '/assets/slider/d1.jpeg',
    'alt' => 'Ambiente general en la Feria de Logros con participantes interactuando',
  ],
  [
    'src' => '/assets/slider/d6.jpg',
    'alt' => 'Visitantes observando prototipos tecnológicos en los stands',
  ],
  [
    'src' => '/assets/slider/d8.jpg',
    'alt' => 'Recorridos guiados por los estands estudiantiles',
  ],
  [
    'src' => '/assets/slider/d9.jpg',
    'alt' => 'Asistentes compartiendo experiencias frente a los proyectos presentados',
  ],
];

$stands = [
  [
    'nombre' => 'El radar de Moises',
    'imagen' => '/assets/slider/moises.jpg',
    'alt' => 'Radar de Moises con sensores y panel de visualización',
    'descripcion' => 'Seguimiento de objetos en tiempo real con microcontroladores.',
  ],
  [
    'nombre' => 'Parqueo automático con Arduino y Aplicación Móvil',
    'imagen' => '/assets/slider/d10.jpg',
    'alt' => 'Maqueta del sistema de parqueo automático controlado por aplicación',
    'descripcion' => 'Control de ingreso vehicular mediante sensores y app móvil.',
  ],
  [
    'nombre' => 'Juego de realidad aumentada',
    'imagen' => '/assets/slider/losbros.jpg',
    'alt' => 'Demostración del juego de realidad aumentada',
    'descripcion' => 'Dinámica lúdica que mezcla entorno con escenarios virtuales.',
  ],
  [
    'nombre' => 'Tienda en línea con ARCore',
    'imagen' => '/assets/slider/arcore.png',
    'alt' => 'Interfaz de tienda en línea con modelos tridimensionales',
    'descripcion' => 'Experiencia de compra inmersiva usando modelado tridimensional.',
  ],
  [
    'nombre' => 'Sistema de comandos en tiempo real',
    'imagen' => '/assets/slider/d5.jpg',
    'alt' => 'Panel del sistema de comandos en tiempo real',
    'descripcion' => 'Coordinación de tareas con tableros de monitoreo inmediato.',
  ],
  [
    'nombre' => 'Sistema de cajero automático',
    'imagen' => '/assets/slider/cajero.jpg',
    'alt' => 'Simulador de cajero automático con interfaz táctil',
    'descripcion' => 'Prototipo funcional de dispensación y gestión de retiros.',
  ],
  [
    'nombre' => 'Sistema de cajero automático C# Bank',
    'imagen' => '/assets/slider/Bank.jpg',
    'alt' => 'Equipo presentando el sistema C# Bank',
    'descripcion' => 'Aplicación de gestión bancaria desarrollada en C#.',
  ],
  [
    'nombre' => 'Innova rent',
    'imagen' => '/assets/slider/standInnovaRent.jpg',
    'alt' => 'Stand del proyecto Innova rent con su equipo',
    'descripcion' => 'Plataforma para administrar inventario y alquiler de equipos.',
  ],
  [
    'nombre' => 'Blog de teoría de sistemas',
    'imagen' => '/assets/slider/d3.jpg',
    'alt' => 'Vista del blog de teoría de sistemas en exhibición',
    'descripcion' => 'Repositorio de artículos y casos sobre teoría de sistemas.',
  ],
  [
    'nombre' => 'Juego de Bingo',
    'imagen' => '/assets/slider/d4.jpg',
    'alt' => 'Participantes jugando al Bingo interactivo',
    'descripcion' => 'Juego social gamificado con seguimiento de puntajes automático.',
  ],
  [
    'nombre' => 'Sistema de gestión de citas y pagos de un CarWash',
    'imagen' => '/assets/slider/yo.jpg',
    'alt' => 'Presentación del sistema de gestión para CarWash',
    'descripcion' => 'Reservas en línea y control de pagos para servicios vehiculares.',
  ],
  [
    'nombre' => 'Biblioteca virtual CUBO',
    'imagen' => '/assets/slider/d2.jpg',
    'alt' => 'Estudiantes mostrando la Biblioteca virtual CUBO',
    'descripcion' => 'Catálogo digital con acceso a recursos académicos.',
  ],
  [
    'nombre' => 'Sistema de gestión de Farmacia',
    'imagen' => '/assets/slider/standFarmacia.jpg',
    'alt' => 'Panel del sistema de gestión de farmacia con inventario en pantalla',
    'descripcion' => 'Control de inventario y ventas para farmacias locales.',
  ],
];
?>

<section class="dia4">
  <header class="dia4__encabezado">
    <span class="dia4__etiqueta">Día 4</span>
    <h1 class="dia4__titulo">Feria de Logros</h1>
    <p class="dia4__descripcion">
      La comunidad académica presentó proyectos que combinan creatividad, tecnología y resolución de problemas reales.
    </p>
  </header>

  <section class="dia4__galeria" id="dia4-galeria">
    <div class="dia4__seccion-encabezado">
      <h2 class="dia4__seccion-titulo">Momentos destacados</h2>
      <p class="dia4__seccion-resumen">
        Recorrido visual por los estands, charlas espontáneas y celebración de logros compartidos.
      </p>
    </div>
    <div class="dia4__galeria-grid">
      <?php foreach ($galeria as $foto): ?>
        <figure class="dia4__galeria-item">
          <img src="<?php echo $foto['src']; ?>" alt="<?php echo $foto['alt']; ?>">
        </figure>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="dia4__stands" id="dia4-stands">
    <div class="dia4__seccion-encabezado dia4__seccion-encabezado--stands">
      <h2 class="dia4__seccion-titulo">Stands de Proyectos</h2>
      <p class="dia4__seccion-resumen">
        Cada equipo presentó soluciones innovadoras enfocadas en automatización, experiencias inmersivas y gestión inteligente.
      </p>
    </div>
    <div class="dia4__stands-grid">
      <?php foreach ($stands as $stand): ?>
        <article class="dia4__stand-card">
          <figure class="dia4__stand-imagen">
            <img src="<?php echo $stand['imagen']; ?>" alt="<?php echo $stand['alt']; ?>">
          </figure>
          <div class="dia4__stand-detalles">
            <h3><?php echo $stand['nombre']; ?></h3>
            <p><?php echo $stand['descripcion']; ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="dia4__premiacion" id="dia4-premiacion">
    <div class="dia4__seccion-encabezado dia4__seccion-encabezado--premios">
      <h2 class="dia4__seccion-titulo">Premiación de los Stands</h2>
      <p class="dia4__seccion-resumen">
        Reconocimos el esfuerzo colectivo y destacamos a los equipos que inspiraron a estudiantes y visitantes.
      </p>
    </div>
    <div class="dia4__premios">
      <article class="dia4__premio-card">
        <h3>Ganadores popularidad</h3>
        <p>Stand de TSI recibió el voto del público por su dinamismo y alcance.</p>
      </article>
      <article class="dia4__premio-card">
        <h3>Ganadores Feria de Logros</h3>
        <p>Radar de Moises y Biblioteca Virtual CUBO destacaron por su impacto académico y social.</p>
      </article>
    </div>
  </section>
</section>

