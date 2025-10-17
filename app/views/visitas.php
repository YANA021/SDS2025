
<?php
$styles = isset($styles) && is_array($styles)
  ? array_merge($styles, ['/css/visitas.css'])
  : ['/css/visitas.css'];

$formData = $formData ?? [
  'nombre' => '',
  'email' => '',
  'motivo' => '',
  'fecha_visita' => '',
  'comentarios' => '',
];

$errores = $errores ?? [];
$visitas = $visitas ?? [];
$estado = $estado ?? null;
$mensaje = $mensaje ?? null;
$dbError = $dbError ?? null;

$motivos = [
  'Conferencias' => 'Conferencias y charlas',
  'Talleres' => 'Talleres prácticos',
  'Networking' => 'Networking y contactos',
  'Voluntariado' => 'Voluntariado y logística',
  'Otro' => 'Otro interés',
];

$totalVisitas = is_array($visitas) ? count($visitas) : 0;
$ultimoRegistro = $visitas[0]['created_at'] ?? null;
$ultimoRegistroLegible = $ultimoRegistro ? date('d/m/Y H:i', strtotime($ultimoRegistro)) : 'Sin registros';
?>

<section class="visitas">
  <header class="visitas__encabezado">
    <div class="visitas__marca">
      <span class="visitas__etiqueta">Participa en la SDS 2025</span>
      <h1 class="visitas__titulo">Registro de visitas al blog</h1>
    </div>
    <p class="visitas__descripcion">
      Cuéntanos sobre tu visita y ayúdanos a mejorar la experiencia del blog de la Semana de Sistemas.
    </p>
    <div class="visitas__resumen">
      <div class="visitas__resumen-item">
        <span class="visitas__resumen-label">Visitas registradas</span>
        <span class="visitas__resumen-valor"><?= htmlspecialchars((string) $totalVisitas, ENT_QUOTES, 'UTF-8') ?></span>
      </div>
      <div class="visitas__resumen-item">
        <span class="visitas__resumen-label">Último registro</span>
        <span class="visitas__resumen-valor"><?= htmlspecialchars($ultimoRegistroLegible, ENT_QUOTES, 'UTF-8') ?></span>
      </div>
      <div class="visitas__resumen-item">
        <span class="visitas__resumen-label">Tiempo estimado</span>
        <span class="visitas__resumen-valor">1 min</span>
      </div>
    </div>
  </header>

  <?php if ($estado && $mensaje): ?>
    <div class="visitas__alerta visitas__alerta--<?= $estado === 'exito' ? 'exito' : 'error' ?>">
      <p><?= htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8') ?></p>
    </div>
  <?php endif; ?>

  <?php if (!empty($dbError) && $estado !== 'exito'): ?>
    <p class="visitas__mensaje-tecnico">
      Tuvimos un inconveniente al comunicarnos con la base de datos. Intenta de nuevo en unos minutos.
    </p>
  <?php endif; ?>

  <div class="visitas__contenedor">
    <div class="visitas__tarjeta">
      <form class="visitas-formulario" action="/visitas/registrar" method="post" novalidate>
        <div class="visitas-formulario__campo <?= isset($errores['nombre']) ? 'visitas-formulario__campo--error' : '' ?>">
          <label for="nombre">Nombre completo</label>
          <input
            type="text"
            id="nombre"
            name="nombre"
            placeholder="Ej. Ana Pérez"
            value="<?= htmlspecialchars($formData['nombre'], ENT_QUOTES, 'UTF-8') ?>"
            required
            maxlength="120"
          >
          <?php if (isset($errores['nombre'])): ?>
            <p class="visitas-formulario__ayuda"><?= htmlspecialchars($errores['nombre'], ENT_QUOTES, 'UTF-8') ?></p>
          <?php endif; ?>
        </div>

        <div class="visitas-formulario__campo <?= isset($errores['email']) ? 'visitas-formulario__campo--error' : '' ?>">
          <label for="email">Correo electrónico</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="tu-correo@ejemplo.com"
            value="<?= htmlspecialchars($formData['email'], ENT_QUOTES, 'UTF-8') ?>"
            required
            maxlength="160"
          >
          <?php if (isset($errores['email'])): ?>
            <p class="visitas-formulario__ayuda"><?= htmlspecialchars($errores['email'], ENT_QUOTES, 'UTF-8') ?></p>
          <?php endif; ?>
        </div>

        <div class="visitas-formulario__campo visitas-formulario__campo--doble <?= isset($errores['motivo']) ? 'visitas-formulario__campo--error' : '' ?>">
          <label for="motivo">Motivo de tu visita</label>
          <select id="motivo" name="motivo" required>
            <option value="" disabled <?= $formData['motivo'] === '' ? 'selected' : '' ?>>Selecciona una opción</option>
            <?php foreach ($motivos as $valor => $texto): ?>
              <option value="<?= htmlspecialchars($valor, ENT_QUOTES, 'UTF-8') ?>" <?= $formData['motivo'] === $valor ? 'selected' : '' ?>>
                <?= $texto ?>
              </option>
            <?php endforeach; ?>
          </select>
          <?php if (isset($errores['motivo'])): ?>
            <p class="visitas-formulario__ayuda"><?= htmlspecialchars($errores['motivo'], ENT_QUOTES, 'UTF-8') ?></p>
          <?php endif; ?>
        </div>

        <div class="visitas-formulario__campo visitas-formulario__campo--doble <?= isset($errores['fecha_visita']) ? 'visitas-formulario__campo--error' : '' ?>">
          <label for="fecha_visita">Fecha de tu visita</label>
          <input
            type="date"
            id="fecha_visita"
            name="fecha_visita"
            value="<?= htmlspecialchars($formData['fecha_visita'], ENT_QUOTES, 'UTF-8') ?>"
            required
          >
          <?php if (isset($errores['fecha_visita'])): ?>
            <p class="visitas-formulario__ayuda"><?= htmlspecialchars($errores['fecha_visita'], ENT_QUOTES, 'UTF-8') ?></p>
          <?php endif; ?>
        </div>

        <div class="visitas-formulario__campo <?= isset($errores['comentarios']) ? 'visitas-formulario__campo--error' : '' ?>">
          <label for="comentarios">Comentarios o sugerencias</label>
          <textarea
            id="comentarios"
            name="comentarios"
            rows="4"
            placeholder="Comparte tu experiencia o recomendaciones"
            maxlength="1000"
          ><?= htmlspecialchars($formData['comentarios'], ENT_QUOTES, 'UTF-8') ?></textarea>
          <?php if (isset($errores['comentarios'])): ?>
            <p class="visitas-formulario__ayuda"><?= htmlspecialchars($errores['comentarios'], ENT_QUOTES, 'UTF-8') ?></p>
          <?php endif; ?>
        </div>

        <div class="visitas-formulario__acciones">
          <button type="submit" class="visitas-formulario__boton">Registrar visita</button>
        </div>
      </form>
    </div>

    <aside class="visitas__historial">
      <div class="visitas__historial-cabecera">
        <h2 class="visitas__historial-titulo">Visitas recientes</h2>
      </div>
      <?php if (!empty($visitas)): ?>
        <ul class="visitas__lista" role="list">
          <?php foreach ($visitas as $item): ?>
            <?php
              $nombre = htmlspecialchars($item['nombre'] ?? '', ENT_QUOTES, 'UTF-8');
              $motivo = htmlspecialchars($item['motivo'] ?? '', ENT_QUOTES, 'UTF-8');
              $comentarios = trim($item['comentarios'] ?? '');
              $comentariosLimpios = htmlspecialchars($comentarios === '' ? 'Sin comentarios adicionales.' : $comentarios, ENT_QUOTES, 'UTF-8');
              $fechaVisita = $item['fecha_visita'] ?? null;
              $timestampVisita = $fechaVisita ? strtotime($fechaVisita) : false;
              $fechaLegible = $timestampVisita ? date('d/m/Y', $timestampVisita) : '';
              $creada = $item['created_at'] ?? null;
              $timestampCreada = $creada ? strtotime($creada) : false;
              $creadaLegible = $timestampCreada ? date('d/m/Y H:i', $timestampCreada) : '';
              $email = htmlspecialchars($item['email'] ?? '', ENT_QUOTES, 'UTF-8');
            ?>
            <li class="visitas__registro">
              <header>
                <h3><?= $nombre ?></h3>
                <span class="visitas__chip"><?= $motivo ?></span>
              </header>
              <dl class="visitas__detalle">
                <div>
                  <dt>Contacto</dt>
                  <dd>
                    <a href="mailto:<?= $email ?>"><?= $email ?></a>
                  </dd>
                </div>
                <div>
                  <dt>Visitó el</dt>
                  <dd><?= htmlspecialchars($fechaLegible, ENT_QUOTES, 'UTF-8') ?></dd>
                </div>
                <div>
                  <dt>Registrado</dt>
                  <dd><?= htmlspecialchars($creadaLegible, ENT_QUOTES, 'UTF-8') ?></dd>
                </div>
              </dl>
              <p class="visitas__comentario"><?= $comentariosLimpios ?></p>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php else: ?>
        <p class="visitas__sin-datos">Aún no hay visitas registradas. ¡Sé la primera en compartir tu experiencia!</p>
      <?php endif; ?>
    </aside>
  </div>
</section>
