<?php
// pages/booking.php
// Booking form for rooms

$room = $_GET['room'] ?? '';
$submitted = false;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $checkin = trim($_POST['checkin'] ?? '');
  $checkout = trim($_POST['checkout'] ?? '');
  $room_post = trim($_POST['room'] ?? '');

  if (empty($name)) $errors[] = 'Name is required.';
  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required.';
  if (empty($checkin)) $errors[] = 'Check-in date is required.';
  if (empty($checkout)) $errors[] = 'Check-out date is required.';
  if (empty($room_post)) $errors[] = 'Room is required.';

  if (empty($errors)) {
    $submitted = true;
    // Simulate booking
  }
}
?>

<section class="section">
  <div class="wrap">
    <header class="section-head">
      <h2>Book Your Room</h2>
      <p class="lead">Fill in the details to complete your booking.</p>
    </header>

    <?php if ($submitted): ?>
      <div class="confirmation">
        <h3>Booking Confirmed!</h3>
        <p>Thank you, <?= htmlspecialchars($_POST['name']) ?>. Your booking for <?= htmlspecialchars($_POST['room']) ?> from <?= htmlspecialchars($_POST['checkin']) ?> to <?= htmlspecialchars($_POST['checkout']) ?> has been received.</p>
        <p>We will send a confirmation email to <?= htmlspecialchars($_POST['email']) ?>.</p>
      </div>
    <?php else: ?>
      <form method="post" class="form">
        <label>
          Name
          <input type="text" name="name" required>
        </label>
        <label>
          Email
          <input type="email" name="email" required>
        </label>
        <label>
          Check-in Date
          <input type="date" name="checkin" required>
        </label>
        <label>
          Check-out Date
          <input type="date" name="checkout" required>
        </label>
        <label>
          Room Type
          <input type="text" name="room" value="<?= htmlspecialchars($room) ?>" readonly>
        </label>
        <button type="submit" class="btn primary">Book Now</button>
      </form>
      <?php if (!empty($errors)): ?>
        <ul class="errors">
          <?php foreach ($errors as $error): ?>
            <li><?= htmlspecialchars($error) ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    <?php endif; ?>
  </div>
</section>

<style>
/* Booking page styles */
.confirmation { background: var(--card); border: 1px solid var(--ring); border-radius: 14px; padding: 1rem; margin: 1rem 0; }
.errors { color: #f00; list-style: none; padding: 0; }
</style>
