<?php
$HALL_INBOX = 'reservations@valholl-la.com';

$reservation_status = null;
$reservation_message = '';
$old = ['name' => '', 'email' => '', 'date' => '', 'time' => '', 'party' => '4', 'notes' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    foreach ($old as $k => $v) {
        $old[$k] = isset($_POST[$k]) ? trim($_POST[$k]) : '';
    }

    $errors = [];
    if ($old['name'] === '')                                   $errors[] = 'a name';
    if (!filter_var($old['email'], FILTER_VALIDATE_EMAIL))     $errors[] = 'a valid email';
    if ($old['date'] === '')                                   $errors[] = 'a date';
    if ($old['time'] === '')                                   $errors[] = 'a time';
    if ((int)$old['party'] < 1)                                $errors[] = 'a party size';

    if ($errors) {
        $reservation_status = 'error';
        $reservation_message = 'The raven returned confused &mdash; please include ' . implode(', ', $errors) . '.';
    } else {
        $to      = $HALL_INBOX;
        $subject = 'New Table Request - ' . $old['name'] . ' (party of ' . (int)$old['party'] . ')';

        $body  = "A new reservation request has arrived at Valholl:\n\n";
        $body .= "Name:    {$old['name']}\n";
        $body .= "Email:   {$old['email']}\n";
        $body .= "Date:    {$old['date']}\n";
        $body .= "Time:    {$old['time']}\n";
        $body .= "Party:   " . (int)$old['party'] . "\n";
        $body .= "Notes:   " . ($old['notes'] !== '' ? $old['notes'] : '(none)') . "\n";

        $safe_name  = preg_replace('/[\r\n]+/', ' ', $old['name']);
        $safe_email = preg_replace('/[\r\n]+/', '', $old['email']);

        $headers  = "From: Valholl Website <no-reply@valholl-la.com>\r\n";
        $headers .= "Reply-To: {$safe_name} <{$safe_email}>\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (@mail($to, $subject, $body, $headers)) {
            $reservation_status = 'success';
            $reservation_message = 'The raven has flown! We&rsquo;ll confirm your table by email shortly. Sk&aring;l.';
            $old = ['name' => '', 'email' => '', 'date' => '', 'time' => '', 'party' => '4', 'notes' => ''];
        } else {
            $reservation_status = 'error';
            $reservation_message = 'The raven could not take flight (mail server unavailable). Call us at (310) 555-MEAD instead.';
        }
    }
}

function e($v) { return htmlspecialchars($v, ENT_QUOTES, 'UTF-8'); }
?>
<?php require_once('includes/head.php') ?>
<?php require_once('includes/header.php') ?>
<main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center page-banner banner-find">
        <div class="col-md-7 p-lg-5 mx-auto my-5">
            <span class="hero-eyebrow">Find Us</span>
            <h1 class="display-4 fw-bold page-title">Sail In, Raider</h1>
            <p class="lead page-lead">Book a table, plan a feast, or send a raven. The hall is always warmest when expected.</p>
        </div>
    </div>

    <div class="container my-5">
        <div class="row gy-5">
            <!-- Reservation form -->
            <div class="col-lg-7">
                <h2 class="section-title">Reserve the Long Table</h2>
                <p class="section-sub">Send word ahead and we&rsquo;ll keep the fire stoked.</p>

                <?php if ($reservation_status === 'success'): ?>
                    <div class="alert alert-skol" role="alert"><?php echo $reservation_message; ?></div>
                <?php elseif ($reservation_status === 'error'): ?>
                    <div class="alert alert-blood" role="alert"><?php echo $reservation_message; ?></div>
                <?php endif; ?>

                <form action="contact.php" method="post" class="reserve-form">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo e($old['name']); ?>" placeholder="Ragnar L." required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Raven Address (email)</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo e($old['email']); ?>" placeholder="you@midgard.com" required>
                        </div>
                        <div class="col-md-4">
                            <label for="date" class="form-label">Date of Feast</label>
                            <input type="date" class="form-control" id="date" name="date" value="<?php echo e($old['date']); ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="time" class="form-label">Hour</label>
                            <input type="time" class="form-control" id="time" name="time" value="<?php echo e($old['time']); ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="party" class="form-label">Warriors in Party</label>
                            <input type="number" class="form-control" id="party" name="party" min="1" max="40" value="<?php echo e($old['party']); ?>" required>
                        </div>
                        <div class="col-12">
                            <label for="notes" class="form-label">Special Requests</label>
                            <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Axe lane? Birthday raid? Mead allergy (we&rsquo;ll pretend to understand)?"><?php echo e($old['notes']); ?></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-gold btn-lg">Send the Raven</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Details -->
            <div class="col-lg-5">
                <h2 class="section-title">The Hall</h2>
                <div class="contact-block">
                    <h5 class="contact-label">Location</h5>
                    <p class="contact-text">662 Longship Row<br>Los Angeles, CA 90291</p>
                </div>
                <div class="contact-block">
                    <h5 class="contact-label">Hours</h5>
                    <p class="contact-text">Tue&ndash;Thu &middot; 4pm &ndash; 1am<br>Fri&ndash;Sat &middot; 4pm &ndash; 2am<br>Sun&ndash;Mon &middot; Closed</p>
                </div>
                <div class="contact-block">
                    <h5 class="contact-label">Send Word</h5>
                    <p class="contact-text">(310) 555-MEAD<br>skol@valholl-la.com</p>
                </div>
                <div class="map-placeholder">
                    <span>&#5798; Map of Midgard &#5798;<br><small>(here be a map embed)</small></span>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once('includes/footer.php') ?>
