<?php snippet('head') ?>

	<?php snippet('header') ?>

	<div id="content" class="services">

		<div class="landing">
			<div class="wrapper">
				<h1 class="img-in"><?php echo $page->title() ?></h1>
			</div>

			<div class="scrolldown"> scroll down </div>
    </div>
    <div class="main container">
      <?php $articles = $page->children()->visible() ?>
      <?php foreach($articles as $article): ?>
			<article>
				<div class="image">
					<img class="img-in" src="<?php echo $article->images()->first()->url() ?>" alt="<?php echo $article->title() ?>" />
				</div>
				<div class="infos">
					<h3><?php echo $article->title() ?></h3>
					<?php echo $article->text()->kirbytext() ?>
				</div>
			</article>
		<?php endforeach; ?>
		</div>
	</div> <!-- / #content  -->

<?php snippet('footer') ?>
