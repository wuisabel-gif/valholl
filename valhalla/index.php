<?php require_once('includes/head.php') ?>
<?php require_once('includes/header.php') ?>
<main>
    <!-- Hero -->
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center hero-valhalla hero-photo">
        <video class="hero-video" autoplay muted loop playsinline poster="assets/hero.jpg">
            <source src="https://res.cloudinary.com/ds2z90h0x/video/upload/q_auto/v1781942762/promo1_ahvvjd.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="col-md-7 p-lg-5 mx-auto my-5 position-relative hero-content">
            <span class="hero-eyebrow">Est. 793 A.D. &middot; Reopened in Los Angeles</span>
            <h1 class="display-2 fw-bold hero-title">VALH&Ouml;LL</h1>
            <p class="lead hero-lead">A Viking bar &amp; mead hall on the edge of the Pacific. Long tables, open flame, horns of honeyed mead, and feasts worthy of the slain. Leave your modern worries at the gate.</p>
            <a class="btn btn-gold btn-lg me-2" href="contact.php">Claim a Table</a>
            <a class="btn btn-outline-gold btn-lg" href="menu.php">See the Feast</a>
        </div>
    </div>

    <!-- Banner strip -->
    <div class="banner-strip text-center py-3">
        <span>&#5798; &nbsp; 30 MEADS ON TAP &nbsp; &#5811; &nbsp; LIVE DRUMS EVERY FREYJA&rsquo;S DAY &nbsp; &#5809; &nbsp; AXE-THROWING LANES &nbsp; &#5798;</span>
    </div>

    <!-- Menu -->
    <div class="container" id="menu">
        <h2 class="section-title text-center mt-5">From the Long Table</h2>
        <p class="section-sub text-center">Brewed for warriors, poured for everyone.</p>

        <?php
            $menu_pair = [
                ['name' => 'The Jarl&rsquo;s Mead', 'price' => '12', 'tag' => 'House Pour',
                 'desc' => 'Wildflower honey aged in oak. Sweet, golden, and dangerous.',
                 'img'  => 'assets/the-jarls-mead.jpg'],
                ['name' => 'Bloodaxe Old Fashioned', 'price' => '15', 'tag' => 'Signature',
                 'desc' => 'Rye, charred orange, smoked maple bitters over a single iceberg.',
                 'img'  => 'assets/bloodaxe-old-fashioned.jpg'],
            ];
            require('includes/products.php');

            $menu_pair = [
                ['name' => 'Valkyrie&rsquo;s Kiss', 'price' => '14', 'tag' => 'Crowd Slayer',
                 'desc' => 'Lingonberry, gin, sparkling wine, a whisper of juniper smoke.',
                 'img'  => 'assets/valkyries-kiss.jpg'],
                ['name' => 'Ragnar&ouml;k Stout', 'price' => '9', 'tag' => 'On Tap',
                 'desc' => 'Pitch-black imperial stout. The end of all things, in a glass.',
                 'img'  => 'assets/ragnarok-stout.jpg'],
            ];
            require('includes/products.php');

            $menu_pair = [
                ['name' => 'Whole Roast Boar', 'price' => '28', 'tag' => 'The Feast',
                 'desc' => 'Slow-fired over applewood, crackling skin, served with charred root mash.',
                 'img'  => 'assets/whole-roast-boar.jpg'],
                ['name' => 'Frostgate Cider', 'price' => '8', 'tag' => 'No Mead',
                 'desc' => 'Dry pressed apple, served ice-cold. For the kinder raider.',
                 'img'  => 'assets/frostgate-cider.jpg'],
            ];
            require('includes/products.php');
        ?>

        <div class="text-center my-5">
            <a class="btn btn-outline-gold btn-lg" href="menu.php">View the Full Feast Menu</a>
        </div>
    </div>

    <!-- Step Inside the Hall -->
    <div class="container my-5 text-center">
        <h2 class="section-title">Step Inside the Hall</h2>
        <p class="section-sub">Turn your sound on &mdash; this is a night at Valh&ouml;ll.</p>
        <div class="hall-video mx-auto">
            <video controls preload="metadata" playsinline poster="assets/hero.jpg">
                <source src="https://res.cloudinary.com/ds2z90h0x/video/upload/q_auto/v1781942763/promo2_o8a03t.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</main>
<?php require_once('includes/footer.php') ?>
