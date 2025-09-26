<?php
// pages/rooms.php
// Shows a large gallery of rooms. Bookings for standard/comfort/deluxe go to offer page anchors.
// Other rooms go to your external booking URL (change to your real link).

$offerKeys = ['standard','comfort','deluxe'];           // those exist in offer.php
$extBooking = 'https://example.com/booking';            // ← replace with your real booking link

$rooms = [
  ['key'=>'standard',     'name'=>$t['room_standard'],     'desc'=>$t['room_standard_desc'],     'img'=>"assets/images/standard-room.jpg",     'alt'=>$t['alt_room_standard']],
  ['key'=>'comfort',      'name'=>$t['room_comfort'],      'desc'=>$t['room_comfort_desc'],      'img'=>"assets/images/comfort-room.jpg",      'alt'=>$t['alt_room_comfort']],
  ['key'=>'deluxe',       'name'=>$t['room_deluxe'],       'desc'=>$t['room_deluxe_desc'],       'img'=>"assets/images/deluxe-room.jpg",       'alt'=>$t['alt_room_deluxe']],
  ['key'=>'family',       'name'=>$t['room_family'],       'desc'=>$t['room_family_desc'],       'img'=>"assets/images/rooms/family.jpg",       'alt'=>$t['alt_room_family']],
  ['key'=>'twin',         'name'=>$t['room_twin'],         'desc'=>$t['room_twin_desc'],         'img'=>"assets/images/rooms/twin.jpg",         'alt'=>$t['alt_room_twin']],
  ['key'=>'single',       'name'=>$t['room_single'],       'desc'=>$t['room_single_desc'],       'img'=>"assets/images/rooms/single.jpg",       'alt'=>$t['alt_room_single']],
  ['key'=>'superior',     'name'=>$t['room_superior'],     'desc'=>$t['room_superior_desc'],     'img'=>"assets/images/rooms/superior.jpg",     'alt'=>$t['alt_room_superior']],
  ['key'=>'junior_suite', 'name'=>$t['room_junior_suite'], 'desc'=>$t['room_junior_suite_desc'], 'img'=>"assets/images/rooms/junior_suite.jpg", 'alt'=>$t['alt_room_junior_suite']],
  ['key'=>'accessible',   'name'=>$t['room_accessible'],   'desc'=>$t['room_accessible_desc'],   'img'=>"assets/images/rooms/accessible.jpg",   'alt'=>$t['alt_room_accessible']],
];
?>

<section class="section">
  <div class="wrap">
    <header class="section-head">
      <h2><?= htmlspecialchars($t['rooms_title']) ?></h2>
      <p class="lead"><?= htmlspecialchars($t['rooms_intro']) ?></p>
    </header>

    <div class="rooms-grid">
      <?php foreach ($rooms as $r): ?>
        <article class="room-card">
          <div class="room-media">
            <img src="<?= htmlspecialchars($r['img']) ?>"
                 alt="<?= htmlspecialchars($r['alt']) ?>"
                 loading="lazy" width="1200" height="800">
          </div>

          <div class="room-body">
            <h3><?= htmlspecialchars($r['name']) ?></h3>
            <p class="room-desc"><?= htmlspecialchars($r['desc']) ?></p>

            <ul class="perks">
              <li>Wi-Fi</li>
              <li><?= htmlspecialchars($t['late_checkout']) ?></li>
              <li><?= htmlspecialchars($t['breakfast_optional']) ?></li>
            </ul>

            <div class="room-actions">
              <?php if (in_array($r['key'], $offerKeys, true)): ?>
                <a class="btn primary" href="?page=offer#<?= urlencode($r['key']) ?>">
                  <?= htmlspecialchars($t['view_deal']) ?>
                </a>
              <?php else: ?>
                <a class="btn primary" target="_blank" href="<?= htmlspecialchars($extBooking) . '?room=' . urlencode($r['key']) ?>">
                  <?= htmlspecialchars($t['book_now']) ?>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <p class="fine-print"><?= htmlspecialchars($t['fine_print']) ?></p>
  </div>
</section>

<style>
/* Rooms page – lightweight, matches your style */
.section { padding: 3rem 0; }
.section-head { text-align: center; max-width: 780px; margin: 0 auto 2rem; }
.section-head .lead { color: #566; }

.rooms-grid {
  display: grid;
  grid-template-columns: repeat(12, 1fr);
  gap: 1.25rem;
}
.room-card {
  grid-column: span 12;
  display: grid;
  grid-template-columns: 1fr;
  background: #fff;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 8px 28px rgba(0,0,0,.08);
}
.room-media img { width: 100%; height: auto; display: block; }

.room-body { padding: 1.25rem 1.25rem 1.5rem; }
.room-desc { color: #3d3d3d; line-height: 1.6; margin: .5rem 0 1rem; }

.perks { list-style: none; padding: 0; margin: 0 0 1.25rem; display: flex; flex-wrap: wrap; gap: .6rem; }
.perks li { background: #f2f5f7; padding: .35rem .6rem; border-radius: 999px; font-size: .9rem; }

.room-actions .btn { display: inline-block; padding: .75rem 1rem; border-radius: 12px; text-decoration: none; }
.btn.primary { background: #0a6; color: #fff; }

@media (min-width: 960px) {
  .room-card { grid-template-columns: 6fr 6fr; }
  .room-card:nth-child(even) .room-media { order: 2; }
}
</style>
