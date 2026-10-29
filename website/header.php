<!-- ============ HEADER ============ -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Permanent+Marker&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/header.css">

<header class="topbar" id="site-header">
  <a href="#top" class="brand" aria-label="Naar boven">
    BERLIN<span>/</span>368
  </a>

  <!-- Hamburger menu knop (mobiel) -->
  <button class="hamburger" id="hamburger-btn" aria-label="Open menu" aria-expanded="false" aria-controls="main-nav">
    <span class="hamburger-line"></span>
    <span class="hamburger-line"></span>
    <span class="hamburger-line"></span>
  </button>

  <nav id="main-nav" aria-label="Hoofdnavigatie">
    <a href="#waarom">Waarom</a>
    <a href="#info">Info</a>
    <a href="#route">Route</a>
  </nav>

  <a class="nav-ticket" href="#info">Plan bezoek</a>
</header>

<!-- Overlay voor mobiel menu -->
<div class="nav-overlay" id="nav-overlay"></div>

<script src="js/header.js"></script>
