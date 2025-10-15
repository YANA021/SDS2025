<?php
namespace app\controllers;

class DiasController {
  private function render($view, $data = []) {
    extract($data);
    ob_start();
    include "../app/views/{$view}.php";
    $content = ob_get_clean();
    include "../app/views/layout.php";
  }

  public function dia1() {
    return $this->render('dia1', ['title' => 'Día 1']);
  }

  public function dia2() {
    return $this->render('dia2', ['title' => 'Día 2']);
  }

  public function dia3() {
    return $this->render('dia3', ['title' => 'Día 3']);
  }

  public function dia4() {
    return $this->render('dia4', ['title' => 'Día 4']);
  }

  public function dia5() {
    return $this->render('dia5', ['title' => 'Día 5']);
  }
}
