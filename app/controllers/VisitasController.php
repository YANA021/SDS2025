<?php
namespace app\controllers;

use app\models\Visita;

class VisitasController {
  private function render($view, $data = []) {
    extract($data);
    ob_start();
    include "../app/views/{$view}.php";
    $content = ob_get_clean();
    include "../app/views/layout.php";
  }

  public function index() {
    [$visitas, $dbError] = $this->cargarVisitas();

    return $this->render('visitas', [
      'title' => 'Formulario de visitas',
      'visitas' => $visitas,
      'dbError' => $dbError,
      'formData' => [
        'nombre' => '',
        'email' => '',
        'motivo' => '',
        'fecha_visita' => '',
        'comentarios' => '',
      ],
    ]);
  }

  public function registrar() {
    $formData = [
      'nombre' => trim($_POST['nombre'] ?? ''),
      'email' => trim($_POST['email'] ?? ''),
      'motivo' => trim($_POST['motivo'] ?? ''),
      'fecha_visita' => trim($_POST['fecha_visita'] ?? ''),
      'comentarios' => trim($_POST['comentarios'] ?? ''),
    ];

    $errores = $this->validar($formData);
    $estado = null;
    $mensaje = null;
    $dbError = null;

    if (empty($errores)) {
      try {
        Visita::crear($formData);
        $estado = 'exito';
        $mensaje = '¡Gracias! Tu visita se ha registrado correctamente.';
        $formData = [
          'nombre' => '',
          'email' => '',
          'motivo' => '',
          'fecha_visita' => '',
          'comentarios' => '',
        ];
      } catch (\Throwable $e) {
        $estado = 'error';
        $mensaje = 'No pudimos guardar tu visita. Inténtalo nuevamente más tarde.';
        $dbError = $e->getMessage();
      }
    } else {
      $estado = 'error';
      $mensaje = 'Verifica los campos marcados en el formulario.';
    }

    [$visitas, $dbCargaError] = $this->cargarVisitas();
    $dbError = $dbError ?: $dbCargaError;

    return $this->render('visitas', [
      'title' => 'Formulario de visitas',
      'visitas' => $visitas,
      'dbError' => $dbError,
      'formData' => $formData,
      'errores' => $errores,
      'estado' => $estado,
      'mensaje' => $mensaje,
    ]);
  }

  private function validar(array $datos): array {
    $errores = [];

    if ($datos['nombre'] === '' || mb_strlen($datos['nombre']) < 3) {
      $errores['nombre'] = 'Ingresa tu nombre (al menos 3 caracteres).';
    }

    if ($datos['email'] === '' || !filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
      $errores['email'] = 'Proporciona un correo electrónico válido.';
    }

    if ($datos['motivo'] === '') {
      $errores['motivo'] = 'Selecciona el motivo de tu visita.';
    }

    if ($datos['fecha_visita'] === '') {
      $errores['fecha_visita'] = 'Selecciona la fecha de tu visita.';
    } elseif (!$this->fechaValida($datos['fecha_visita'])) {
      $errores['fecha_visita'] = 'La fecha ingresada no es válida.';
    }

    if ($datos['comentarios'] !== '' && mb_strlen($datos['comentarios']) > 1000) {
      $errores['comentarios'] = 'El comentario es demasiado extenso (máximo 1000 caracteres).';
    }

    return $errores;
  }

  private function fechaValida(string $fecha): bool {
    $dt = \DateTime::createFromFormat('Y-m-d', $fecha);
    return $dt && $dt->format('Y-m-d') === $fecha;
  }

  private function cargarVisitas(int $limite = 8): array {
    try {
      $visitas = Visita::ultimas($limite);
      return [$visitas, null];
    } catch (\Throwable $e) {
      return [[], $e->getMessage()];
    }
  }
}
