<?php require_once('includes/head.php') ?>
<?php require_once('includes/header.php') ?>
<main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center page-banner banner-menu">
        <div class="col-md-7 p-lg-5 mx-auto my-5">
            <span class="hero-eyebrow">The Feast Menu</span>
            <h1 class="display-4 fw-bold page-title">Mead, Fire &amp; Plunder</h1>
            <p class="lead page-lead">Everything is made in-house, poured generously, and meant to be shared across a long table. Prices in silver (and also dollars).</p>
        </div>
    </div>

    <div class="container my-5">

        <?php
        require('includes/menu-data.php');

        foreach ($menu as $section => $items): ?>
            <div class="menu-section mb-5">
                <h2 class="section-title menu-section-title"><?php echo $section; ?></h2>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                    <?php foreach ($items as $row): ?>
                        <div class="col">
                            <div class="dish-card h-100">
                                <img class="dish-photo" src="<?php echo $row[3]; ?>" alt="<?php echo strip_tags($row[0]); ?>" loading="lazy">
                                <div class="dish-body">
                                    <div class="dish-head">
                                        <h3 class="dish-name"><?php echo $row[0]; ?></h3>
                                        <span class="dish-price"><?php echo $row[1]; ?></span>
                                    </div>
                                    <p class="dish-desc"><?php echo $row[2]; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="text-center my-5">
            <p class="section-sub">Hungry warriors should reserve ahead &mdash; the long table fills fast.</p>
            <a class="btn btn-gold btn-lg" href="contact.php">Reserve the Long Table</a>
        </div>
    </div>
</main>
<?php require_once('includes/footer.php') ?>
