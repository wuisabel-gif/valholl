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
            'First Plunder' => [
                ['Thunder Wings', '13', 'Fire-charred wings, mead-honey-chili glaze, toasted sesame.', 'assets/thunder-wings.jpg'],
                ['Shieldmaiden Meatballs', '12', 'Beef &amp; pork, brown-ale gravy, a spoon of lingonberry.', 'assets/shieldmaiden-meatballs.jpg'],
                ['Berserker Skewers', '14', 'Grilled marinated lamb, charred onion, garlic yogurt.', 'assets/berserker-skewers.jpg'],
                ['Raven&rsquo;s Catch', '13', 'Cured salmon on dark rye, soft egg, dill &amp; capers.', 'assets/ravens-catch.jpg'],
                ['Roasted Bone Marrow', '14', 'Marrow bones, charred sourdough, parsley gremolata.', 'assets/roasted-bone-marrow.jpg'],
                ['Honey-Fire Lamb Ribs', '15', 'Sticky honey-glazed lamb ribs, charred edges, toasted sesame.', 'assets/honey-fire-lamb-ribs.jpg'],
            ],
            'Meads &amp; Ales' => [
                ['The Jarl&rsquo;s Mead', '12', 'Wildflower honey aged in oak. Sweet, golden, dangerous.', 'assets/the-jarls-mead.jpg'],
                ['Ragnar&ouml;k Stout', '9', 'Pitch-black imperial stout. The end of all things, in a glass.', 'assets/ragnarok-stout.jpg'],
                ['Frostgate Cider', '8', 'Dry pressed apple, served ice-cold.', 'assets/frostgate-cider.jpg'],
                ['Berserker Brown Ale', '8', 'Malty, nutty, deceptively easy to drink before battle.', 'assets/berserker-brown-ale.jpg'],
                ['Midgard Pilsner', '7', 'Crisp, clean, brewed for the warm Pacific evenings.', 'assets/midgard-pilsner.jpg'],
                ['Fenrir&rsquo;s Bite IPA', '8', 'Hazy, hoppy, fierce. A golden bite with a long finish.', 'assets/fenrirs-bite-ipa.jpg'],
            ],
            'Signature Horns &amp; Cocktails' => [
                ['Bloodaxe Old Fashioned', '15', 'Rye, charred orange, smoked maple bitters, one great iceberg.', 'assets/bloodaxe-old-fashioned.jpg'],
                ['Valkyrie&rsquo;s Kiss', '14', 'Lingonberry, gin, sparkling wine, a whisper of juniper smoke.', 'assets/valkyries-kiss.jpg'],
                ['Odin&rsquo;s Eye', '16', 'Mezcal, blackberry, lime, a single smoking ember on top.', 'assets/odins-eye.jpg'],
                ['Frost Giant', '15', 'Icy blue gin, frost &amp; fog, a single frozen blueberry.', 'assets/frost-giant.jpg'],
                ['Hel&rsquo;s Embrace', '16', 'Deep violet fading to black, ember-lit blackberry, rolling fog.', 'assets/hels-embrace.jpg'],
                ['Loki&rsquo;s Trick', '13', 'Looks innocent. It is not. Ask the bartender. Or don&rsquo;t.', 'assets/lokis-trick.jpg'],
            ],
            'Feasts &amp; Shared Plates' => [
                ['Whole Roast Boar', '28', 'Slow-fired over applewood, crackling skin, charred root mash. Serves 2&ndash;3.', 'assets/whole-roast-boar.jpg'],
                ['Odin&rsquo;s Goose', '34', 'Whole roast goose, crisp lacquered skin, roasted apples &amp; onions.', 'assets/odins-goose.jpg'],
                ['Longship Platter', '34', 'Smoked meats, cured fish, hard cheese, dark bread, pickles. For the table.', 'assets/longship-platter.jpg'],
                ['Fire-Charred Salmon', '22', 'Cedar-planked, honey-glazed, dill &amp; sea salt.', 'assets/fire-charred-salmon.jpg'],
                ['Cauldron of Mussels', '19', 'Ale-steamed mussels, golden broth, charred bread. For the table.', 'assets/cauldron-of-mussels.jpg'],
                ['Shieldmaiden&rsquo;s Stew', '16', 'Slow-braised beef, ale, root vegetables, served in a bread bowl.', 'assets/shieldmaidens-stew.jpg'],
            ],
            'Sweet Plunder' => [
                ['Freyja&rsquo;s Honey Cake', '11', 'Honey &amp; walnut layer cake, golden glaze.', 'assets/freyjas-honey-cake.jpg'],
                ['Skyr of the Gods', '9', 'Icelandic skyr, lingonberry, honeycomb, toasted oats.', 'assets/skyr-of-the-gods.jpg'],
                ['Idunn&rsquo;s Mead-Poached Pears', '10', 'Spiced-mead pears, star anise, a spoon of cream.', 'assets/idunns-mead-poached-pears.jpg'],
                ['Burnt Honey Custard', '9', 'Torched caramel top, golden custard beneath.', 'assets/burnt-honey-custard.jpg'],
                ['Ragnar&ouml;k Chocolate Cake', '12', 'Molten dark chocolate, cocoa dust, a single ember berry.', 'assets/ragnarok-chocolate-cake.jpg'],
                ['Bifr&ouml;st Cheesecake', '11', 'Smooth cheesecake, rainbow swirl, berry sauce.', 'assets/bifrost-cheesecake.jpg'],
            ],
            'For the Smaller Raiders' => [
                ['Goblin&rsquo;s Mac &amp; Cheese', '7', 'Cauldron mac with a golden toasted breadcrumb top.', 'assets/goblins-mac-and-cheese.jpg'],
                ['Honey Butter Flatbread', '7', 'Warm, torn, dangerously shareable.', 'assets/honey-butter-flatbread.jpg'],
                ['Yule Spiced Flatbread', '7', 'Cinnamon-sugar &amp; honey, warm from the fire.', 'assets/yule-spiced-flatbread.jpg'],
                ['Troll Knots', '6', 'Warm cinnamon-sugar bread knots, icing to dip.', 'assets/troll-knots.jpg'],
                ['Spiced Apple Mead (no alcohol)', '6', 'All the warmth, none of the regret.', 'assets/spiced-apple-mead.jpg'],
                ['Troll&rsquo;s Fries', '7', 'Duck-fat fries, smoked salt, garlic aioli.', 'assets/trolls-fries.jpg'],
            ],
        ];

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
