<?php
require('includes/menu-data.php');

$q = isset($_GET['q']) ? trim($_GET['q']) : '';
$results = [];

if ($q !== '') {
    $needle = mb_strtolower(html_entity_decode($q, ENT_QUOTES, 'UTF-8'));
    foreach ($menu as $section => $items) {
        foreach ($items as $row) {
            $hay = mb_strtolower(html_entity_decode($row[0] . ' ' . $row[2] . ' ' . $section, ENT_QUOTES, 'UTF-8'));
            if (mb_strpos($hay, $needle) !== false) {
                $results[] = ['item' => $row, 'section' => $section];
            }
        }
    }
}
?>
<?php require_once('includes/head.php') ?>
<?php require_once('includes/header.php') ?>
<main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center page-banner banner-menu">
        <div class="col-md-7 p-lg-5 mx-auto my-5">
            <span class="hero-eyebrow">Seek &amp; Ye Shall Find</span>
            <h1 class="display-4 fw-bold page-title">Search the Hall</h1>
            <form class="d-flex justify-content-center mt-4" role="search" action="search.php" method="get">
                <input class="form-control me-2" style="max-width: 360px;" type="search" name="q"
                       placeholder="Seek a brew&hellip;" aria-label="Search"
                       value="<?php echo htmlspecialchars($q, ENT_QUOTES, 'UTF-8'); ?>" autofocus>
                <button class="btn btn-gold" type="submit">Search</button>
            </form>
        </div>
    </div>

    <div class="container my-5">
        <?php if ($q === ''): ?>
            <p class="section-sub text-center">Type a dish, a drink, or a craving &mdash; mead, boar, mussels, chocolate&hellip;</p>

        <?php elseif (count($results) === 0): ?>
            <p class="section-sub text-center">No plunder found for &ldquo;<?php echo htmlspecialchars($q, ENT_QUOTES, 'UTF-8'); ?>&rdquo;. The raven returned empty-taloned.</p>
            <div class="text-center"><a class="btn btn-outline-gold" href="menu.php">Browse the Full Feast</a></div>

        <?php else: ?>
            <h2 class="section-title menu-section-title">
                <?php echo count($results); ?> result<?php echo count($results) === 1 ? '' : 's'; ?>
                for &ldquo;<?php echo htmlspecialchars($q, ENT_QUOTES, 'UTF-8'); ?>&rdquo;
            </h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                <?php foreach ($results as $r): $row = $r['item']; ?>
                    <div class="col">
                        <div class="dish-card h-100">
                            <img class="dish-photo" src="<?php echo $row[3]; ?>" alt="<?php echo strip_tags($row[0]); ?>" loading="lazy">
                            <div class="dish-body">
                                <div class="dish-head">
                                    <h3 class="dish-name"><?php echo $row[0]; ?></h3>
                                    <span class="dish-price"><?php echo $row[1]; ?></span>
                                </div>
                                <p class="dish-desc"><?php echo $row[2]; ?></p>
                                <p class="menu-coin"><?php echo $r['section']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php require_once('includes/footer.php') ?>
