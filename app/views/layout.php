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
      background:linear-gradient(135deg,#061226 0%,#0f4e58 38%,#0f766e 72%,#14b8a6 100%);
      box-shadow:0 12px 32px rgba(6,18,38,.28);
      border-bottom:1px solid rgba(12,64,80,.45);
    }

    .top-bar {
      max-width:1200px;
      margin:0 auto;
      padding:22px 32px 18px;
      display:flex;
      justify-content:space-between;
      align-items:center;
      gap:24px;
    }

    .brand {
      display:flex;
      align-items:center;
      gap:18px;
    }

    .brand-logo {
      width:92px;
      height:80px;
      border-radius:18px;
      overflow:hidden;
      box-shadow:0 12px 26px rgba(15,118,110,.32);
      border:3px solid rgba(255,255,255,.25);
      background:#061226;
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
      gap:6px;
    }

    .brand-text h1 {
      margin:0;
      font-size:1.55rem;
      font-weight:700;
      color:#f4fffd;
      letter-spacing:.035em;
      text-transform:uppercase;
    }

    .brand-text span {
      font-size:.88rem;
      color:rgba(227,245,243,.9);
      letter-spacing:.09em;
      text-transform:uppercase;
    }

    .nav-bar {
      width:100%;
      background:rgba(5,24,35,.58);
      backdrop-filter:blur(14px);
      border-top:1px solid rgba(255,255,255,.08);
      border-bottom:1px solid rgba(255,255,255,.12);
      box-shadow:0 18px 36px rgba(6,18,38,.24);
    }

    nav {
      max-width:1200px;
      margin:0 auto;
      padding:14px 32px 18px;
      display:grid;
      grid-template-columns:repeat(8, minmax(0, 1fr));
      gap:14px;
      align-items:stretch;
    }

    nav a {
      display:flex;
      align-items:center;
      justify-content:center;
      padding:12px 18px;
      border-radius:22px;
      font-size:.95rem;
      font-weight:600;
      letter-spacing:.05em;
      color:#f1fbf8;
      background:rgba(255,255,255,.14);
      border:1px solid rgba(255,255,255,.16);
      white-space:nowrap;
      transition:transform .25s ease,box-shadow .25s ease,background .25s ease,color .25s ease,border-color .25s ease;
    }

    nav a:hover,
    nav a:focus {
      background:rgba(255,255,255,.24);
      color:#041724;
      border-color:rgba(255,255,255,.38);
      box-shadow:0 14px 34px rgba(20,184,166,.45);
      transform:translateY(-3px);
      text-decoration:none;
    }

    main {
      max-width:1200px;
      margin:56px auto;
      padding:56px 48px 72px;
      background:rgba(255,255,255,.94);
      border-radius:36px;
      box-shadow:0 40px 64px rgba(15,23,42,.18);
      backdrop-filter:blur(4px);
    }

    footer {
      text-align:center;
      padding:36px 16px 48px;
      color:rgba(12,64,80,.72);
      font-size:.85rem;
      background:linear-gradient(180deg,rgba(12,64,80,.08) 0%,rgba(12,64,80,.18) 100%);
    }

    @media (max-width:1024px) {
      nav {
        grid-template-columns:repeat(4, minmax(0, 1fr));
      }
    }

    @media (max-width:768px) {
      .top-bar {
        flex-direction:column;
        align-items:flex-start;
        gap:20px;
        padding:20px 24px 16px;
      }

      nav {
        padding:12px 24px 16px;
        grid-template-columns:repeat(2, minmax(0, 1fr));
        gap:12px;
      }

      nav a {
        font-size:.9rem;
        padding:10px 16px;
      }

      main {
        margin:40px auto;
        padding:36px 24px 56px;
      }

      footer {
        padding:32px 12px 40px;
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
          <img src="/assets/slider/SDS1.png" alt="Logo Semana de Sistemas 2025">
        </div>
        <div class="brand-text">
          <h1>Semana de Sistemas 2025</h1>
          <span>Evento universitario &middot; Innovaci&oacute;n tecnol&oacute;gica</span>
        </div>
      </div>
    </div>
    <div class="nav-bar">
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
