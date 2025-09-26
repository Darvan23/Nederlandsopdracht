</main>

<footer class="footer">
  <div class="wrap">
    <div class="footer-grid">
      <div class="footer-col">
        <h3><?= htmlspecialchars($t['footer_about']) ?></h3>
        <p><?= htmlspecialchars($t['tagline']) ?></p>
        <p>Comfortable stays in beautiful locations across the Netherlands.</p>
        <div class="social-links">
          <a href="#" aria-label="Facebook" title="Facebook">📘</a>
          <a href="#" aria-label="Instagram" title="Instagram">📷</a>
          <a href="#" aria-label="Twitter" title="Twitter">🐦</a>
        </div>
      </div>
      <div class="footer-col">
        <h3><?= htmlspecialchars($t['footer_links']) ?></h3>
        <ul>
          <li><a href="?page=home"><?= htmlspecialchars($t['nav_home']) ?></a></li>
          <li><a href="?page=offer"><?= htmlspecialchars($t['nav_offer']) ?></a></li>
          <li><a href="?page=rooms"><?= htmlspecialchars($t['nav_rooms']) ?></a></li>
          <li><a href="?page=contact"><?= htmlspecialchars($t['nav_contact']) ?></a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3><?= htmlspecialchars($t['footer_contact']) ?></h3>
        <address>
          <p>info@best-inn.com<br>+31 20 123 4567<br>Amsterdam, Netherlands</p>
        </address>
        <ul class="legal-links">
          <li><a href="#"><?= htmlspecialchars($t['footer_privacy']) ?></a></li>
          <li><a href="#"><?= htmlspecialchars($t['footer_terms']) ?></a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <small><?= htmlspecialchars($t['footer_copyright']) ?></small>
    </div>
  </div>
</footer>

</body>
</html>
