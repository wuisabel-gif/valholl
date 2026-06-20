<?php require_once('includes/head.php') ?>
<?php require_once('includes/header.php') ?>
<main>
    <!-- Hero -->
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center hero-valhalla hero-photo">
        <div class="col-md-7 p-lg-5 mx-auto my-5 position-relative">
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
                 'img'  => 'https://images.unsplash.com/photo-1514361892635-6b07e31e75f9?auto=format&fit=crop&w=800&q=80'],
                ['name' => 'Bloodaxe Old Fashioned', 'price' => '15', 'tag' => 'Signature',
                 'desc' => 'Rye, charred orange, smoked maple bitters over a single iceberg.',
                 'img'  => 'https://images.unsplash.com/photo-1551024709-8f23befc6f87?auto=format&fit=crop&w=800&q=80'],
            ];
            require('includes/products.php');

            $menu_pair = [
                ['name' => 'Valkyrie&rsquo;s Kiss', 'price' => '14', 'tag' => 'Crowd Slayer',
                 'desc' => 'Lingonberry, gin, sparkling wine, a whisper of juniper smoke.',
                 'img'  => 'https://images.unsplash.com/photo-1536935338788-846bb9981813?auto=format&fit=crop&w=800&q=80'],
                ['name' => 'Ragnar&ouml;k Stout', 'price' => '9', 'tag' => 'On Tap',
                 'desc' => 'Pitch-black imperial stout. The end of all things, in a glass.',
                 'img'  => 'https://images.unsplash.com/photo-1608270586620-248524c67de9?auto=format&fit=crop&w=800&q=80'],
            ];
            require('includes/products.php');

            $menu_pair = [
                ['name' => 'Whole Roast Boar', 'price' => '28', 'tag' => 'The Feast',
                 'desc' => 'Slow-fired over applewood, crackling skin, served with charred root mash.',
                 'img'  => 'https://images.unsplash.com/photo-1432139555190-58524dae6a55?auto=format&fit=crop&w=800&q=80'],
                ['name' => 'Frostgate Cider', 'price' => '8', 'tag' => 'No Mead',
                 'desc' => 'Dry pressed apple, served ice-cold. For the kinder raider.',
                 'img'  => 'https://images.unsplash.com/photo-1606767041004-6b918024daf5?auto=format&fit=crop&w=800&q=80'],
            ];
            require('includes/products.php');
        ?>

        <div class="text-center my-5">
            <a class="btn btn-outline-gold btn-lg" href="menu.php">View the Full Feast Menu</a>
        </div>
    </div>
</main>
<?php require_once('includes/footer.php') ?>
