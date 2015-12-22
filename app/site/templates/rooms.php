<?php snippet('head') ?>

	<?php snippet('header') ?>

	<div id="content" class="villas">

		<div class="landing">
			<img src="<?php echo $page->image('landing.jpg')->url() ?>" alt="Korokia Pensione" />
			<div class="half">
				<a href="<?php echo $pages->find('villas/mediterranean')->url() ?>">
					<span class="wrapper">
						<h2>Mediterranean <br/>Villas</h2>
						<p class="counter">12 rooms</p>
					</span>
					<img src="<?php echo $page->image('asset-blur-left.jpg')->url() ?>" alt="php" />
				</a>
			</div>
			<div class="half">
				<a href="<?php echo $pages->find('villas/moroccan')->url() ?>">
					<span class="wrapper">
						<h2>Moroccan <br/>Villas</h2>
						<p class="counter">16 rooms</p>
					</span>
					<img src="<?php echo $page->image('asset-blur-right.jpg')->url() ?>" alt="php" />
				</a>
			</div>
    </div>

		<div class="main container">
				<?php error_reporting(E_ALL); ini_set('display_errors', '1'); ?>
	      <?php $rooms = $page->children()->visible() ?>
	      <?php foreach($rooms as $room): ?>
					<article class="room">
						<div class="six images">
							<ul class="slider-for">
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
						<div class="six infos">
							<h2><?php echo $room->title() ?></h2>
							<?php echo $room->text()->kirbytext() ?>
							<div class="price-range">
								<?php echo $room->priceRange() ?>
							</div>
							<ul class="slider-nav">
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
