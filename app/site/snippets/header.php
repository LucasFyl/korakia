<div class="isMobile"></div>


<header class="desktop">
  <div class="container">
    <a href="<?php echo $site->url() ?>" class="logo">Korakia Pensione</a>

    <?php snippet('menu'); ?>
  </div>
</header>

<header class="mobile">
  <div class="menu-bar">
    <a href="<?php echo $site->url() ?>" class="logo">Korakia Pensione</a>
    <a href="#" class="hamburger"></a>
  </div>

</header>
<div class="menu mobile">
  <div class="wrap">
    <?php snippet('menu'); ?>
    <a href="#" class="close">Close</a>
  </div>
</div>
