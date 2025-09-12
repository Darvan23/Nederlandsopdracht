<header class="site-header">
  <div class="container nav">
    <a class="brand" href="/?page=home"><?= htmlspecialchars($t['site_title']) ?></a>
    <nav>
      <a href="/?page=home"><?= htmlspecialchars($t['nav_home']) ?></a>
      <a href="/?page=offer"><?= htmlspecialchars($t['nav_offer']) ?></a>
      <a href="/?page=contact"><?= htmlspecialchars($t['nav_contact']) ?></a>
      <a class="lang" href="/?page=<?= urlencode($page) ?>&lang=<?= $lang === 'nl' ? 'en' : 'nl' ?>">
        <?= htmlspecialchars($t['switch_to']) ?>
      </a>
    </nav>
  </div>
</header>
<section class="hero">
  <div class="hero-text container">
    <h1><?= htmlspecialchars($t['hero_title']) ?></h1>
    <p><?= htmlspecialchars($t['hero_sub']) ?></p>
    <a class="btn" href="/?page=offer"><?= htmlspecialchars($t['cta_view_offer']) ?></a>
  </div>
</section>
<main class="container">
