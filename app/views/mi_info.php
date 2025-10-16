<?php
$styles = isset($styles) && is_array($styles)
  ? array_merge($styles, ['/css/mi_info.css'])
  : ['/css/mi_info.css'];
?>

<section class="perfil">
  <header class="perfil__encabezado">
    <div class="perfil__foto" role="img" aria-label="Fotografía de yahir">
      <img src="/assets/slider/yahir.jpeg" alt="Foto de perfil de yahir">
    </div>
    <div class="perfil__presentacion">
      <span class="perfil__etiqueta">Mi información</span>
      <h1 class="perfil__nombre">Yahir Ariel Nieto Amaya</h1>
    </div>
  </header>

  <div class="perfil__datos">
    <article class="perfil__dato">
      <h2>Información personal</h2>
      <dl>
        <div>
          <dt>Edad</dt>
          <dd>22 años</dd>
        </div>
        <div>
          <dt>Correo electrónico</dt>
          <dd>na21011@ues.edu.sv</dd>
        </div>
        <div>
          <dt>Teléfono</dt>
          <dd><a href="tel:+50378901234">+503 60138080</a></dd>
        </div>
        <div>
          <dt>Carrera</dt>
          <dd>Ing. en Sistemas Informáticos</dd>
        </div>
        <div>
          <dt>Dirección</dt>
          <dd>San Miguel, El Salvador</dd>
        </div>
      </dl>
    </article>

    <article class="perfil__dato">
      <h2>Mis gustos y hobbies</h2>
      <ul>
        <li>Networking</li>
        <li>Video Games</li>
        <li>Fotografía urbana</li>
        <li>Senderismo y running</li>
        <li>Geopolitica</li>
      </ul>
    </article>

    <article class="perfil__dato">
      <h2>Objetivos personales</h2>
      <p>
        Actualmente trabajo en un proyecto llamado Carwash Berríos que es un sistema web integral para administrar un autolavado, enfocado en automatizar citas, servicios, pagos, empleados y clientes, con reportes y estadísticas para apoyar la toma de decisiones del negocio.
      </p>
      <p>
        Mi meta profesional es especializarme en arquitectura de software y liderar soluciones que impacten positivamente en comunidades educativas de la región oriental.
      </p>
    </article>

    <article class="perfil__dato perfil__dato--destacado">
      <h2>Frase motivadora</h2>
      <blockquote>
        "El precio de la Libertad es su eterna vigilancia"
      </blockquote>
    </article>
  </div>
</section>
