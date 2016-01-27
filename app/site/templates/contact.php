<?php snippet('head') ?>

	<?php snippet('header') ?>

	<div id="content" class="contact">
    <!-- <div class="container"> -->
      <div class="block">
        <h3><?php echo $page->title() ?></h3>
        <?php echo $page->text()->kirbytext() ?>
        <div class="contact-info">
          <a href="https://goo.gl/maps/9AU5yn6LYcJ2" target="_blank"><?php echo $page->contactInfos()->kirbytext() ?></a>
          <p class="phone">Phone: <a href="phone:7608646411">760.864.6411</a>   /   Fax: <a href="phone:7608644147">760.864.4147</a></p>
        </div>
        <a href="mailto:info@korakia.com" class="btn golden cta"><span>Email us</span></a>
        <a href="mailto:pr@korakia.com" class="btn golden cta"><span>Media inquiries</span></a>
      </div>
			<img src="<?php echo $page->image('asset-image.jpg')->url() ?>" alt="Korakia Pensione" class="hide-mobile" />
    <!-- </div> -->
  </div> <!-- / #content  -->

<?php snippet('footer') ?>
