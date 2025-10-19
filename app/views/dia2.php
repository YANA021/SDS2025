<?php
$styles = isset($styles) && is_array($styles)
  ? array_merge($styles, ['/css/dia2.css'])
  : ['/css/dia2.css'];

$workshops = [
  [
    'ponente' => 'MSc. Enrique Cortez',
    'rol' => 'Consultor en analitica empresarial',
    'titulo' => 'Taller #1: Toma de decisiones estrategicas basadas en datos',
    'descripcion' => 'Vimos metodos para transformar metricas en acciones estrategicas, desde la recoleccion hasta la visualizacion para lideres tecnicos.',
    'imagenes' => [
      ['src' => '/assets/slider/primerap1.jpeg'],
      ['src' => '/assets/slider/primerap2.jpeg'],
      ['src' => '/assets/slider/primerap3.jpeg'],
      ['src' => '/assets/slider/primerap4.jpeg'],
    ],
    'insights' => [
      'Un tablero util parte de objetivos claros, indicadores clave y un publico definido.',
      'La gobernanza de datos pesa tanto como la herramienta analitica utilizada.',
      'Probar hipotesis ayuda a anticipar escenarios y reducir la incertidumbre ejecutiva.',
    ],
  ],
  [
    'ponente' => 'Ing. Gabriel Castillo',
    'rol' => 'Desarrollador full-stack y mentor de Laravel',
    'titulo' => 'Taller #2.2: Construyendo un CRUD en minutos con Laravel y Filament',
    'descripcion' => 'El laboratorio mostro como combinar scaffolding de Laravel con componentes de Filament para acelerar proyectos administrativos.',
    'imagenes' => [
      ['src' => '/assets/slider/segunda1.jpeg'],
      ['src' => '/assets/slider/segunda2.jpeg'],
      ['src' => '/assets/slider/segunda3.jpeg'],
      ['src' => '/assets/slider/segunda4.jpeg'],
      ['src' => '/assets/slider/segunda5.jpeg'],
      ['src' => '/assets/slider/segunda6.jpeg'],
      ['src' => '/assets/slider/segunda7.jpeg'],
    ],
    'insights' => [
      'Filament permite tener recursos CRUD operativos en cuestion de minutos.',
      'Mantener migraciones versionadas evita choques cuando el sistema crece.',
      'Vue y Livewire se integran sin friccion para enriquecer el panel administrativo.',
    ],
  ],
  [
    'ponente' => 'MSc. Jose Salmeron',
    'rol' => 'Especialista en automatizacion con IA multimodal',
    'titulo' => 'Taller #4: IA multimodal creando el futuro visual e inteligente con nos',
    'descripcion' => 'Descubrimos como orquestar flujos que transforman texto en imagenes y automatizan tareas creativas con nos y servicios generativos.',
    'imagenes' => [
      ['src' => '/assets/slider/tercera1.jpeg'],
      ['src' => '/assets/slider/tercera2.jpeg'],
      ['src' => '/assets/slider/tercera3.jpeg'],
    ],
    'insights' => [
      'Los flujos multimodales requieren definir limites y permisos por servicio.',
      'nos convierte prompts en procesos automatizados sin perder control tecnico.',
      'Las soluciones generativas mejoran al sumar retroalimentacion humana continua.',
    ],
  ],
];
?>

<section class="dia2">
  <header class="dia2__encabezado">
    <span class="dia2__etiqueta">Dia 2</span>
    <h1 class="dia2__titulo">Talleres formativos</h1>
    <p class="dia2__descripcion">
      Mentores compartieron practicas hands-on para convertir ideas en soluciones orientadas a datos, desarrollo rapido e inteligencia artificial multimodal.
    </p>
  </header>

  <section class="dia2__agenda">
    <div class="dia2__agenda-introduccion">
      <h2>Agenda de aprendizaje</h2>
      <p>
        Cada bloque combino teoria aplicada con ejercicios guiados. Las galerias documentan los momentos mas representativos del dia.
      </p>
    </div>

    <div class="dia2__talleres">
      <?php foreach ($workshops as $index => $taller): ?>
        <article class="dia2__taller">
          <header class="dia2__taller-encabezado">
            <span class="dia2__taller-numero">0<?php echo $index + 1; ?></span>
            <div class="dia2__taller-meta">
              <h3><?php echo $taller['titulo']; ?></h3>
              <p class="dia2__taller-ponente">
                <?php echo $taller['ponente']; ?> &middot; <?php echo $taller['rol']; ?>
              </p>
              <p class="dia2__taller-descripcion">
                <?php echo $taller['descripcion']; ?>
              </p>
            </div>
          </header>

          <div class="dia2__taller-galeria">
            <?php foreach ($taller['imagenes'] as $imagen): ?>
              <figure class="dia2__taller-imagen">
                <img src="<?php echo $imagen['src']; ?>">
              </figure>
            <?php endforeach; ?>
          </div>

          <div class="dia2__taller-insights">
            <h4>Ideas clave</h4>
            <ul>
              <?php foreach ($taller['insights'] as $insight): ?>
                <li><?php echo $insight; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
</section>
