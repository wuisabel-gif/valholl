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
        $menu = [
            'Meads &amp; Ales' => [
                ['The Jarl&rsquo;s Mead', '12', 'Wildflower honey aged in oak. Sweet, golden, dangerous.'],
                ['Ragnar&ouml;k Stout', '9', 'Pitch-black imperial stout. The end of all things, in a glass.'],
                ['Frostgate Cider', '8', 'Dry pressed apple, served ice-cold.'],
                ['Berserker Brown Ale', '8', 'Malty, nutty, deceptively easy to drink before battle.'],
                ['Midgard Pilsner', '7', 'Crisp, clean, brewed for the warm Pacific evenings.'],
            ],
            'Signature Horns &amp; Cocktails' => [
                ['Bloodaxe Old Fashioned', '15', 'Rye, charred orange, smoked maple bitters, one great iceberg.'],
                ['Valkyrie&rsquo;s Kiss', '14', 'Lingonberry, gin, sparkling wine, a whisper of juniper smoke.'],
                ['Odin&rsquo;s Eye', '16', 'Mezcal, blackberry, lime, a single smoking ember on top.'],
                ['Loki&rsquo;s Trick', '13', 'Looks innocent. It is not. Ask the bartender. Or don&rsquo;t.'],
            ],
            'Feasts &amp; Shared Plates' => [
                ['Whole Roast Boar', '28', 'Slow-fired over applewood, crackling skin, charred root mash. Serves 2&ndash;3.'],
                ['Longship Platter', '34', 'Smoked meats, cured fish, hard cheese, dark bread, pickles. For the table.'],
                ['Fire-Charred Salmon', '22', 'Cedar-planked, honey-glazed, dill &amp; sea salt.'],
                ['Shieldmaiden&rsquo;s Stew', '16', 'Slow-braised beef, ale, root vegetables, served in a bread bowl.'],
            ],
            'For the Smaller Raiders' => [
                ['Honey Butter Flatbread', '7', 'Warm, torn, dangerously shareable.'],
                ['Spiced Apple Mead (no alcohol)', '6', 'All the warmth, none of the regret.'],
                ['Troll&rsquo;s Fries', '7', 'Duck-fat fries, smoked salt, garlic aioli.'],
            ],
        ];

        foreach ($menu as $section => $items): ?>
            <div class="menu-section mb-5">
                <h2 class="section-title menu-section-title"><?php echo $section; ?></h2>
                <div class="menu-list">
                    <?php foreach ($items as $row): ?>
                        <div class="menu-row">
                            <div class="menu-row-head">
                                <span class="menu-row-name"><?php echo $row[0]; ?></span>
                                <span class="menu-row-dots"></span>
                                <span class="menu-row-price"><?php echo $row[1]; ?></span>
                            </div>
                            <p class="menu-row-desc"><?php echo $row[2]; ?></p>
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
