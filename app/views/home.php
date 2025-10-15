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
