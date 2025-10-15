<?php
namespace app\controllers;

class VisitasController {
  private function render($view, $data = []) {
    extract($data);
    ob_start();
    include "../app/views/{$view}.php";
    $content = ob_get_clean();
    include "../app/views/layout.php";
  }

  public function index() {
    return $this->render('visitas', ['title' => 'Formulario de visitas']);
  }

  public function registrar() {
    echo "(pendiente)";
  }
}