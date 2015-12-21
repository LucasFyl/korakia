<?php snippet('head') ?>
	<?php snippet('header') ?>

	<div id="content" class="home">
		<!-- TO DO LANDING ROOMS  -->
		<h1><?php echo $page->title() ?></h1>

		<div class="main container">
				<?php error_reporting(E_ALL); ini_set('display_errors', '1'); ?>
	      <?php $rooms = $page->children()->visible() ?>
	      <?php foreach($rooms as $room): ?>
					<article class="room">
						<div class="six">
							<ul>
								<?php $images = $room->images(); ?>
								<?php foreach ($images as $image): ?>
							    <?php  if(substr($image, -7) === '@2x.jpg'): ?>
							      <?php unset($image); ?>
							    <?php else : ?>
										<li><img src="<?php echo $image->url() ?>" alt="<?php echo $room->title() ?>" /></li>
									<?php endif; ?>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="six">
							<h2><?php echo $room->title() ?></h2>
							<?php echo $room->text()->kirbytext() ?>
							<div class="price-range">
								<?php echo $room->priceRange() ?>
							</div>
							<ul>
								<?php $images = $room->images(); ?>
								<?php foreach ($images as $image): ?>
							    <?php  if(substr($image, -7) === '@2x.jpg'): ?>
							      <?php unset($image); ?>
							    <?php else : ?>
									<li><?php echo thumb($image, array('width' => 225, 'height' => 224)) ?></li>
									<?php endif; ?>
								<?php endforeach; ?>
							</ul>
							<a href="#" class="btn golden cta">Book this room</a>
						</div>
					</article>
				<?php endforeach; ?>
		</div>
	</div> <!-- / #content  -->

<?php snippet('footer') ?>
