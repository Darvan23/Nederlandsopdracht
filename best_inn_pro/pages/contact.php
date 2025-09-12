<section class="contact">
  <h2><?= htmlspecialchars($t['contact_title']) ?></h2>
  <p><?= htmlspecialchars($t['contact_text']) ?></p>
  <form class="form" method="post" action="#">
    <label>
      <span><?= $lang==='nl' ? 'Naam' : 'Name' ?></span>
      <input type="text" name="name" required>
    </label>
    <label>
      <span>Email</span>
      <input type="email" name="email" required>
    </label>
    <label class="full">
      <span><?= $lang==='nl' ? 'Bericht' : 'Message' ?></span>
      <textarea name="msg" rows="5" required></textarea>
    </label>
    <button class="btn primary" type="submit"><?= $lang==='nl' ? 'Versturen' : 'Send' ?></button>
  </form>
  <p class="muted"><?= htmlspecialchars($t['contact_stub']) ?></p>
</section>
