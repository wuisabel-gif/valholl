<?php require_once('includes/head.php') ?>
<?php require_once('includes/header.php') ?>
<main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center page-banner banner-gallery">
        <div class="col-md-7 p-lg-5 mx-auto my-5">
            <span class="hero-eyebrow">The Hall, Any Night</span>
            <h1 class="display-4 fw-bold page-title">Gather Your Crew</h1>
            <p class="lead page-lead">Birthdays, game days, wrap parties, book clubs, and the occasional proposal. Every reason is a good reason to raise a horn.</p>
        </div>
    </div>

    <div class="container my-5">
        <?php
        $gallery = [
            ['birthday.jpg',            'Name-Day Feasts'],
            ['football.jpg',            'Game Day'],
            ['fantasy-football.jpg',    'Draft Night'],
            ['couple.jpg',              'Date Night'],
            ['proposal.jpg',            'The Big Question'],
            ['family.jpg',              'Bring the Clan'],
            ['friends.jpg',             'Round the Long Table'],
            ['college-fans.jpg',        'Rally the Crew'],
            ['girls-night.jpg',         'Shieldmaidens&rsquo; Night'],
            ['afterwork.jpg',           'After the Shift'],
            ['film-industry-party.jpg', 'Wrap Parties'],
            ['dj-night.jpg',            'DJ Nights'],
            ['board-game-night.jpg',    'Tabletop &amp; Tankards'],
            ['bookclub.jpg',            'The Saga Circle'],
            ['halloween.jpg',           'All Hallows&rsquo; Eve'],
            ['yule-celebration.jpg',    'Yule Feasts'],
        ];
        ?>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3">
            <?php foreach ($gallery as $g): ?>
                <div class="col">
                    <figure class="occasion">
                        <img src="assets/promo_album/<?php echo $g[0]; ?>" alt="<?php echo strip_tags($g[1]); ?> at Valh&ouml;ll" loading="lazy">
                        <figcaption><?php echo $g[1]; ?></figcaption>
                    </figure>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center my-5">
            <p class="section-sub">Planning something? The long table is yours.</p>
            <a class="btn btn-gold btn-lg" href="contact.php">Book Your Night</a>
        </div>
    </div>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-hidden="true">
        <button class="lightbox-close" type="button" aria-label="Close">&times;</button>
        <img class="lightbox-img" id="lightbox-img" src="" alt="">
        <div class="lightbox-caption" id="lightbox-caption"></div>
    </div>
    <script>
    (function () {
        var lb = document.getElementById('lightbox');
        var lbImg = document.getElementById('lightbox-img');
        var lbCap = document.getElementById('lightbox-caption');

        function open(fig) {
            var img = fig.querySelector('img');
            var cap = fig.querySelector('figcaption');
            lbImg.src = img.src;
            lbImg.alt = img.alt;
            lbCap.innerHTML = cap ? cap.innerHTML : '';
            lb.classList.add('open');
            lb.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }
        function close() {
            lb.classList.remove('open');
            lb.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        document.querySelectorAll('.occasion').forEach(function (fig) {
            fig.addEventListener('click', function () { open(fig); });
        });
        lb.addEventListener('click', function (e) {
            if (e.target === lb || e.target.classList.contains('lightbox-close')) close();
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') close();
        });
    })();
    </script>
</main>
<?php require_once('includes/footer.php') ?>
