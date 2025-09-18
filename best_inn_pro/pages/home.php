<section class="home">
  <!-- Hero Banner Image with Overlay -->
  <div class="hero-banner">
    <img src="assets/images/hero-banner.jpg" alt="Best-Inn Hotels - Comfortable and Modern Accommodations" class="hero-image">
    <div class="hero-overlay">
      <h1>Welcome to Best-Inn Hotels</h1>
      <p>Experience luxury and comfort in nature and city locations</p>
      <a href="?page=offer" class="btn primary">View Our Offers</a>
    </div>
  </div>

  <div class="grid">
    <div>
      <h2><?= htmlspecialchars($t['home_title']) ?></h2>
      <p><?= nl2br(htmlspecialchars($t['home_body'])) ?></p>

      <div class="cards">
        <article class="card">
          <img src="assets/images/Business-travelers.jpg" alt="Business Travel Accommodations" class="card-image">
          <h3><?= htmlspecialchars($t['cards_business_title']) ?></h3>
          <p><?= htmlspecialchars($t['cards_business_text']) ?></p>
        </article>
        <article class="card">
          <img src="assets/images/leisure-travel.jpg" alt="Leisure Travel Accommodations" class="card-image">
          <h3><?= htmlspecialchars($t['cards_leisure_title']) ?></h3>
          <p><?= htmlspecialchars($t['cards_leisure_text']) ?></p>
        </article>
      </div>
    </div>

    <aside class="facts card">
      <h3>Fast facts</h3>
      <ul>
        <li>€120 / €130 / €160 <?= $lang==='nl' ? 'per nacht' : 'per night' ?></li>
        <li><?= $lang==='nl' ? 'Late check‑out tot 13:00' : 'Late checkout until 13:00' ?></li>
        <li><?= $lang==='nl' ? '6 natuurhotels & 8 stadshotels' : '6 nature hotels & 8 city hotels' ?></li>
      </ul>
      <a class="btn ghost" href="?page=offer"><?= htmlspecialchars($t['cta_view_offer']) ?></a>
    </aside>
  </div>
</section>
