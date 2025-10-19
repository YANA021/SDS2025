<?php
$styles = isset($styles) && is_array($styles)
  ? array_merge($styles, ['/css/dia2.css'])
  : ['/css/dia2.css'];

$workshops = [
  [
    'ponente' => 'MSc. Enrique Cortez',
    'rol' => 'Consultor en analítica empresarial',
    'titulo' => 'Taller #1: Toma de decisiones estratégicas basadas en datos',
    'descripcion' => 'Exploramos métodos para transformar métricas en acciones estratégicas, desde la recolección hasta la visualización para líderes técnicos.',
    'imagenes' => [
      [
        'src' => '/assets/slider/primerap1.jpeg',
      ],
      [
        'src' => '/assets/slider/primerap2.jpeg',
      ],
      [
        'src' => '/assets/slider/primerap3.jpeg',
      ],
      [
        'src' => '/assets/slider/primerap4.jpeg',
      ],
    ],
    'insights' => [
      'Diseñar tableros accionables requiere definir objetivos y audiencias antes de graficar.',
      'La gobernanza de datos es tan importante como la tecnología usada para analizarlos.',
      'Modelar hipótesis permite anticipar escenarios y reducir el riesgo en decisiones ejecutivas.',
    ],
  ],
  [
    'ponente' => 'Ing. Gabriel Castillo',
    'rol' => 'Desarrollador full-stack y mentor de Laravel',
    'titulo' => 'Taller #2.2: Construyendo un CRUD en minutos con Laravel y Filament',
    'descripcion' => 'El laboratorio mostró cómo combinar scaffolding de Laravel con componentes de Filament para acelerar proyectos administrativos.',
    'imagenes' => [
      [
        'src' => '/assets/slider/segunda1.jpeg',
      ],
      [
        'src' => '/assets/slider/segunda2.jpeg',
      ],
      [
        'src' => '/assets/slider/segunda3.jpeg',
      ],
      [
        'src' => '/assets/slider/segunda4.jpeg',
      ],
      [
        'src' => '/assets/slider/segunda5.jpeg',
      ],
      [
        'src' => '/assets/slider/segunda6.jpeg',
      ],
      [
        'src' => '/assets/slider/segunda7.jpeg',
      ],
    ],
    'insights' => [
      'Filament permite generar paneles con recursos CRUD en cuestión de minutos.',
      'El versionamiento correcto de migraciones evita conflictos al escalar módulos.',
      'Vue y Livewire se integran fácilmente para enriquecer componentes interactivos.',
    ],
  ],
  [
    'ponente' => 'MSc. José Salmerón',
    'rol' => 'Especialista en automatización con IA multimodal',
    'titulo' => 'Taller #4: IA MULTIMODAL: creando el futuro visual e inteligente con n8n',
    'descripcion' => 'Descubrimos cómo orquestar flujos que transforman texto en imágenes y automatizan tareas creativas con n8n y servicios generativos.',
    'imagenes' => [
      [
        'src' => '/assets/slider/tercera1.jpeg',
      ],
      [
        'src' => '/assets/slider/tercera2.jpeg',
      ],
      [
        'src' => '/assets/slider/tercera3.jpeg',
      ],
    ],
    'insights' => [
      'Los flujos multimodales requieren definir permisos y límites de uso para cada servicio.',
      'n8n facilita convertir prompts en procesos automatizados sin perder control técnico.',
      'Las aplicaciones generativas se potencian al integrar retroalimentación humana en el ciclo.',
    ],
  ],
];
?>

<section class="dia2">
  <header class="dia2__encabezado">
    <span class="dia2__etiqueta">Día 2</span>
    <h1 class="dia2__titulo">Talleres formativos</h1>
    <p class="dia2__descripcion">
      Expertos compartieron metodologías hands-on para convertir ideas en soluciones ágiles orientadas a datos, desarrollo rápido e inteligencia artificial multimodal.
    </p>
  </header>

  <section class="dia2__agenda">
    <div class="dia2__agenda-introduccion">
      <h2>Agenda de aprendizaje</h2>
      <p>
        Cada bloque combinó teoría aplicada con ejercicios prácticos guiados por mentores. Las galerías recogen los momentos más destacados de la jornada.
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
