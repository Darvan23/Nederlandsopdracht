<section>
  <h2><?= htmlspecialchars($t['contact_title']) ?></h2>
  <p><?= htmlspecialchars($t['contact_text']) ?></p>
  <form method="post">
    <input name="name" placeholder="Name">
    <input name="email" placeholder="Email">
    <textarea name="msg"></textarea>
    <button><?= $lang==='nl' ? 'Verstuur' : 'Send' ?></button>
  </form>
  <p><?= htmlspecialchars($t['contact_stub']) ?></p>
</section>
