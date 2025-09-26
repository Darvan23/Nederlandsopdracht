<?php
$prices = [
  ['key'=>'standard','label'=>$t['room_standard'],'old_price'=>150,'price'=>139],
  ['key'=>'comfort','label'=>$t['room_comfort'],'old_price'=>170,'price'=>149],
  ['key'=>'deluxe','label'=>$t['room_deluxe'],'old_price'=>200,'price'=>179],
];
$perNight = $lang==='nl' ? 'per nacht' : 'per night';
?>
<section class="offer">
  <h2><?= htmlspecialchars($t['offer_title']) ?></h2>
  <p><?= htmlspecialchars($t['offer_intro']) ?></p>

  <div class="price-cards">
    <?php foreach ($prices as $p): ?>
    <article class="price-card" id="<?= htmlspecialchars($p['key']) ?>"> <!-- ← added id -->
      <img src="assets/images/<?= htmlspecialchars($p['key']) ?>-room.jpg" alt="<?= htmlspecialchars($p['label']) ?> Room" class="room-image">
      <h3><?= htmlspecialchars($p['label']) ?></h3>
      <div class="price-tag">
        <span class="old-price"><del>€<?= (int)$p['old_price'] ?></del></span>
        <span class="new-price">
          <span class="euro">€</span><span class="amount"><?= (int)$p['price'] ?></span>
        </span>
        <small><?= $perNight ?></small>
      </div>
      <a class="btn primary" href="/?page=booking&room=<?= urlencode($p['key']) ?>"><?= htmlspecialchars($t['book_now']) ?></a>
    </article>
    <?php endforeach; ?>
  </div>

  <div class="note">
    <strong>Note:</strong> <?= htmlspecialchars($t['cost_note']) ?>
  </div>

  <p class="fine"><?= htmlspecialchars($t['fine_print']) ?></p>
</section>
