<header class="header">
  <div class="wrap nav">
    <a class="brand" href="?page=home">Best-Inn Hotels</a>
    <input id="nav-toggle" type="checkbox" aria-label="open menu">
    <label for="nav-toggle" class="burger" aria-hidden="true"></label>
    <nav class="menu">
      <a href="?page=home"><?= htmlspecialchars($t['nav_home']) ?></a>
      <a href="?page=offer"><?= htmlspecialchars($t['nav_offer']) ?></a>
      <a href="?page=rooms"><?= htmlspecialchars($t['nav_rooms']) ?></a> <!-- NEW -->
      <a href="?page=contact"><?= htmlspecialchars($t['nav_contact']) ?></a>
      <a class="lang" href="?page=<?= urlencode($page) ?>&lang=<?= $lang==='nl'?'en':'nl' ?>"><?= htmlspecialchars($t['switch_to']) ?></a>
    </nav>
  </div>
</header>

<section class="hero">
  <div class="hero-bg"></div>
  <div class="wrap hero-inner">
    <div class="hero-text">
      <h1><?= htmlspecialchars($t['hero_title']) ?></h1>
      <p><?= htmlspecialchars($t['hero_sub']) ?></p>
      <a class="btn primary" href="?page=offer"><?= htmlspecialchars($t['cta_view_offer']) ?></a>
    </div>
  </div>
</section>

<main class="wrap">
