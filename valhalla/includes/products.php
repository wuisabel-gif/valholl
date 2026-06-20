<?php
if (!isset($menu_pair) || !is_array($menu_pair)) {
    $menu_pair = [
        [
            'name'  => 'The Jarl&rsquo;s Mead',
            'price' => '12',
            'desc'  => 'Wildflower honey, aged in oak. Sweet, golden, and dangerous.',
            'tag'   => 'House Pour',
            'img'   => 'assets/the-jarls-mead.jpg',
        ],
        [
            'name'  => 'Bloodaxe Old Fashioned',
            'price' => '15',
            'desc'  => 'Rye, charred orange, smoked maple bitters. Served over a single iceberg.',
            'tag'   => 'Signature',
            'img'   => 'assets/bloodaxe-old-fashioned.jpg',
        ],
    ];
}
?>
<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
<?php foreach ($menu_pair as $item): ?>
    <div class="menu-card me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <span class="menu-tag"><?php echo $item['tag']; ?></span>
        <h2 class="display-6 menu-name"><?php echo $item['name']; ?></h2>
        <p class="menu-desc"><?php echo $item['desc']; ?></p>
        <p class="menu-price"><?php echo $item['price']; ?> <span class="menu-coin">silver</span></p>
      </div>
      <div class="menu-art mx-auto">
        <?php if (!empty($item['img'])): ?>
          <img src="<?php echo $item['img']; ?>" alt="<?php echo strip_tags($item['name']); ?>" loading="lazy"
               onerror="this.style.display='none';">
        <?php endif; ?>
      </div>
    </div>
<?php endforeach; ?>
</div>
