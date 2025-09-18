<?php
$prices = [
  ['key'=>'standard','label'=>$t['room_standard'],'price'=>120],
  ['key'=>'comfort','label'=>$t['room_comfort'],'price'=>130],
  ['key'=>'deluxe','label'=>$t['room_deluxe'],'price'=>160],
];
$perNight = $lang==='nl' ? 'per nacht' : 'per night';
?>
<section class="offer">
  <h2><?= htmlspecialchars($t['offer_title']) ?></h2>
  <p><?= htmlspecialchars($t['offer_intro']) ?></p>

  <div class="price-cards">
    <?php foreach ($prices as $p): ?>
    <article class="price-card">
      <img src="assets/images/<?= htmlspecialchars($p['key']) ?>-room.jpg" alt="<?= htmlspecialchars($p['label']) ?> Room" class="room-image">
      <h3><?= htmlspecialchars($p['label']) ?></h3>
      <div class="price-tag">
        <span class="euro">€</span><span class="amount"><?= (int)$p['price'] ?></span>
        <small><?= $perNight ?></small>
      </div>
      <a class="btn primary" target="_blank" href="https://example.com/booking"><?= htmlspecialchars($t['book_now']) ?></a>
    </article>
    <?php endforeach; ?>
  </div>

  <div class="note">
    <strong>Note:</strong> <?= htmlspecialchars($t['cost_note']) ?>
  </div>

  <p class="fine"><?= htmlspecialchars($t['fine_print']) ?></p>
</section>
