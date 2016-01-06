<?php snippet('head') ?>

	<?php snippet('header') ?>

	<div id="content" class="villas feed">

		<div class="landing">
			<div class="container">
				<div class="six">
					<a href="<?php echo $pages->find('villas/mediterranean')->url() ?>">
						<h2 <?php e($page->id() === 'villas/mediterranean', ' class="active"') ?> >Mediterranean Villas</h2>
						<?php $a;foreach($pages->find('villas/mediterranean')->children()->visible() as $child) { $a++; } ?>
						<p class="counter"><?php echo $a ?> rooms</p>
					</a>
				</div>
				<div class="six">
					<a href="<?php echo $pages->find('villas/moroccan')->url() ?>">
						<h2 <?php e($page->id() === 'villas/moroccan', ' class="active"') ?> >Moroccan Villas</h2>
						<?php $b;foreach($pages->find('villas/moroccan')->children()->visible() as $child) { $b++; } ?>
						<p class="counter"><?php echo $b ?> rooms</p>
					</a>
				</div>
			</div>

			<div class="half">
				<img src="<?php echo $page->image('asset-left.jpg')->url() ?>" <?php e($page->id() === 'villas/mediterranean', ' class="active"') ?> alt="php" />
			</div>
			<div class="half">
				<img src="<?php echo $page->image('asset-right.jpg')->url() ?>" <?php e($page->id() === 'villas/moroccan', ' class="active"') ?> alt="php" />
			</div>

    </div>

		<div class="main container">
				<?php error_reporting(E_ALL); ini_set('display_errors', '1'); ?>
	      <?php $rooms = $page->children()->visible() ?>
	      <?php foreach($rooms as $room): ?>
					<article class="room img-in">
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

		<div class="toTop">
			<p>Back to top</p>
			<img src="<?php echo $page->image('asset-backtotop.jpg')->url() ?>" alt="Back to top" />
		</div>
	</div> <!-- / #content  -->

<?php snippet('footer') ?>
