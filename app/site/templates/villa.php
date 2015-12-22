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
	</div> <!-- / #content  -->

<?php snippet('footer') ?>
