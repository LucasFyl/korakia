<?php snippet('head') ?>

	<?php snippet('header') ?>

	<div id="content" class="villas">

		<div class="landing">
			<div class="half">
				<a href="<?php echo $pages->find('villas/mediterranean')->url() ?>">
					<span class="wrapper">
						<h2 class="img-in">Mediterranean <br/>Villas</h2>
						<?php $a;foreach($pages->find('villas/mediterranean')->children()->visible() as $child) { $a++; } ?>
						<p class="counter"><?php echo $a ?> rooms</p>
					</span>
				</a>
			</div>
			<div class="half">
				<a href="<?php echo $pages->find('villas/moroccan')->url() ?>">
					<span class="wrapper">
						<h2 class="img-in">Moroccan <br/>Villas</h2>
						<?php $b;foreach($pages->find('villas/moroccan')->children()->visible() as $child) { $b++; } ?>
						<p class="counter"><?php echo $b ?> rooms</p>
					</span>
				</a>
			</div>
    </div>
	</div> <!-- / #content  -->

<?php snippet('footer') ?>
