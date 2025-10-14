<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title><?= htmlspecialchars($title ?? 'Semana de Sistemas 2025') ?></title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    body{font-family:system-ui,Segoe UI,Roboto,Helvetica,Arial,sans-serif;margin:0;padding:0}
    header,nav,footer{padding:12px 16px;background:#f4f4f4}
    main{padding:16px}
    a{margin-right:10px}
  </style>
</head>
<body>
  <header><h1>Semana de Sistemas 2025</h1></header>
  <nav>
    <a href="/public/inicio">Inicio</a>
    <a href="/public/dia/1">Día 1</a>
    <a href="/public/dia/2">Día 2</a>
    <a href="/public/dia/3">Día 3</a>
    <a href="/public/dia/4">Día 4</a>
    <a href="/public/dia/5">Día 5</a>
  </nav>
  <main><?= $content ?? '' ?></main>
  <footer><small>© 2025</small></footer>
</body>
</html>

