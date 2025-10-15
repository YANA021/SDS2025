<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title><?= htmlspecialchars($title ?? 'Semana de Sistemas 2025') ?></title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    :root {
      --primary:#0f766e;
      --secondary:#14b8a6;
      --accent:#f97316;
      --text:#102a43;
      --muted:#5b6478;
      --surface:#ffffff;
      --background:linear-gradient(180deg,#f8fffb 0%,#e5f7f5 100%);
    }

    * {
      box-sizing:border-box;
    }

    body {
      margin:0;
      font-family:"Segoe UI",system-ui,-apple-system,BlinkMacSystemFont,"Helvetica Neue",Arial,sans-serif;
      background:var(--background);
      color:var(--text);
      line-height:1.6;
    }

    a {
      color:inherit;
      text-decoration:none;
    }

    a:hover {
      text-decoration:underline;
    }

    header {
      background:var(--surface);
      border-bottom:1px solid rgba(9,28,74,.08);
      box-shadow:0 4px 18px rgba(15,23,42,.08);
      position:sticky;
      top:0;
      z-index:20;
    }

    .top-bar {
      max-width:1080px;
      margin:0 auto;
      padding:18px 24px;
      display:flex;
      justify-content:space-between;
      align-items:center;
      gap:16px;
    }

    .brand {
      display:flex;
      align-items:center;
      gap:16px;
    }

    .brand-logo {
      width:56px;
      height:56px;
      border-radius:16px;
      overflow:hidden;
      box-shadow:0 10px 24px rgba(15,118,110,.28);
      border:2px solid rgba(255,255,255,.8);
      background:#0f1f33;
    }

    .brand-logo img {
      display:block;
      width:100%;
      height:100%;
      object-fit:cover;
    }

    .brand-text {
      display:flex;
      flex-direction:column;
      gap:4px;
    }

    .brand-text h1 {
      margin:0;
      font-size:1.4rem;
      font-weight:700;
      color:var(--primary);
      letter-spacing:.03em;
      text-transform:uppercase;
    }

    .brand-text span {
      font-size:.85rem;
      color:var(--muted);
      letter-spacing:.08em;
      text-transform:uppercase;
    }

    nav {
      display:flex;
      gap:12px;
      flex-wrap:wrap;
    }

    nav a {
      padding:10px 16px;
      border-radius:999px;
      font-size:.9rem;
      font-weight:600;
      color:#0f3d36;
      background:rgba(20,184,166,.12);
      transition:transform .2s ease,box-shadow .2s ease,background .2s ease,color .2s ease;
    }

    nav a:hover {
      background:rgba(15,118,110,.14);
      color:#0f766e;
      box-shadow:0 8px 24px rgba(15,118,110,.18);
      transform:translateY(-2px);
      text-decoration:none;
    }

    main {
      max-width:1080px;
      margin:48px auto;
      padding:0 24px 64px;
    }

    footer {
      text-align:center;
      padding:32px 16px 40px;
      color:var(--muted);
      font-size:.85rem;
    }

    @media (max-width:768px) {
      .top-bar {
        flex-direction:column;
        align-items:flex-start;
      }

      nav {
        width:100%;
      }

      nav a {
        flex:1 1 auto;
        text-align:center;
      }

      main {
        margin:32px auto;
        padding:0 16px 48px;
      }
    }
  </style>
  <?php if (!empty($styles) && is_array($styles)): ?>
    <?php foreach ($styles as $href): ?>
      <link rel="stylesheet" href="<?= htmlspecialchars($href, ENT_QUOTES) ?>">
    <?php endforeach; ?>
  <?php endif; ?>
</head>
<body>
  <header>
    <div class="top-bar">
      <div class="brand">
        <div class="brand-logo">
          <img src="/assets/logo-sds25.png" alt="Logo Semana de Sistemas 2025">
        </div>
        <div class="brand-text">
          <h1>Semana de Sistemas 2025</h1>
          <span>Evento universitario &middot; Innovaci&oacute;n tecnol&oacute;gica</span>
        </div>
      </div>
      <nav>
        <a href="/inicio">Inicio</a>
        <a href="/mi-info">Mi informaci&oacute;n</a>
        <a href="/dia/1">D&iacute;a 1</a>
        <a href="/dia/2">D&iacute;a 2</a>
        <a href="/dia/3">D&iacute;a 3</a>
        <a href="/dia/4">D&iacute;a 4</a>
        <a href="/dia/5">D&iacute;a 5</a>
        <a href="/visitas">Visitas</a>
      </nav>
    </div>
  </header>
  <main><?= $content ?? '' ?></main>
  <footer>&copy; <?= date('Y') ?> Semana de Sistemas &ndash; Facultad de Ingenier&iacute;a</footer>
  <?php if (!empty($scripts) && is_array($scripts)): ?>
    <?php foreach ($scripts as $src): ?>
      <script src="<?= htmlspecialchars($src, ENT_QUOTES) ?>" defer></script>
    <?php endforeach; ?>
  <?php endif; ?>
</body>
</html>
