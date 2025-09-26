<section class="contact">
  <div class="wrap">
    <header class="section-head">
      <h2><?= htmlspecialchars($t['contact_title']) ?></h2>
      <p class="lead"><?= htmlspecialchars($t['contact_text']) ?></p>
    </header>

    <form class="form" method="post" action="#">
      <label>
        <span><?= htmlspecialchars($t['name_label']) ?></span>
        <input type="text" name="name" required>
      </label>
      <label>
        <span><?= htmlspecialchars($t['email_label']) ?></span>
        <input type="email" name="email" required>
      </label>
      <label class="full">
        <span><?= htmlspecialchars($t['message_label']) ?></span>
        <textarea name="msg" rows="5" required></textarea>
      </label>
      <button class="btn primary" type="submit"><?= htmlspecialchars($t['send_message']) ?></button>
    </form>

    <p class="muted"><?= htmlspecialchars($t['contact_stub']) ?></p>
  </div>

  <style>
  /* Contact page – matches dark theme */
  .contact { padding: 3rem 0; }
  .section-head { text-align: center; max-width: 600px; margin: 0 auto 2rem; }
  .section-head h2 { color: var(--ink); margin-bottom: 0.5rem; }
  .section-head .lead { color: var(--muted); }

  .form { display: grid; gap: 1.25rem; max-width: 500px; margin: 0 auto; }
  .form label { display: grid; gap: 0.5rem; }
  .form label.full { grid-column: 1 / -1; }
  .form span { font-weight: 600; color: var(--ink); }
  .form input, .form textarea { 
    padding: 0.75rem; 
    border: 1px solid var(--ring); 
    border-radius: 8px; 
    background: var(--panel); 
    color: var(--ink); 
    font-size: 1rem; 
    transition: border-color 0.2s ease;
  }
  .form input:focus, .form textarea:focus { 
    outline: none; 
    border-color: var(--brand); 
    box-shadow: 0 0 0 2px rgba(10, 102, 102, 0.1); 
  }
  .form textarea { resize: vertical; min-height: 120px; }
  .form .btn { 
    justify-self: start; 
    padding: 0.75rem 1.5rem; 
    border-radius: 8px; 
    background: linear-gradient(90deg, var(--brand), var(--brand-2)); 
    color: #fff; 
    border: none; 
    font-weight: 600; 
    cursor: pointer; 
    transition: all 0.3s ease; 
  }
  .form .btn:hover { 
    background: linear-gradient(90deg, var(--brand-2), var(--brand)); 
    transform: translateY(-1px); 
    box-shadow: 0 4px 12px rgba(0,0,0,0.15); 
  }

  .muted { text-align: center; color: var(--muted); font-size: 0.9rem; margin-top: 1.5rem; }
  </style>
</section>
