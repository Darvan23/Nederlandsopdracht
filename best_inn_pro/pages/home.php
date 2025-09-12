<section class="home">
  <div class="grid">
    <div>
      <h2><?= htmlspecialchars($t['home_title']) ?></h2>
      <p><?= nl2br(htmlspecialchars($t['home_body'])) ?></p>

      <div class="cards">
        <article class="card">
          <h3><?= htmlspecialchars($t['cards_business_title']) ?></h3>
          <p><?= htmlspecialchars($t['cards_business_text']) ?></p>
        </article>
        <article class="card">
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
