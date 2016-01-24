<?php snippet('head') ?>
  <?php snippet('header') ?>

  <div id="content" class="news">

		<div class="landing">
      <div class="wrapper">
        <h1 class="img-in"><?php echo $page->title() ?></h1>
      </div>

			<div class="scrolldown"> scroll down </div>
    </div>

    <div class="main container">

      <section class="photoshoots">
        <div class="image">
          <div class="img-wrap">
            <?php foreach ($pages->find('press/photoshoots')->images() as $image): ?>
  					<img src="<?php echo $image->url() ?>" alt="Korakia Pensione - Photoshoot" draggable="false" />
    				<?php endforeach; ?>
          </div>
        </div>
        <div class="infos">
          <h2><?php echo $page->photosTitle() ?></h2>
          <?php echo $page->photosText()->kirbytext() ?>
        </div>
      </section>

      <?php $articles = $page->children()->visible()->paginate(4); ?>
      <?php foreach($articles as $article): ?>
      <article class="press img-in">
        <div class="image">
          <img src="<?php echo $article->images()->first()->url() ?>" alt="<?php echo $article->title() ?>" />
        </div>
        <div class="infos">
          <h4><?php echo html($article->title()) ?></h4>
          <div class="date">
            <time datetime="<?php echo $article->date('c') ?>">
              <?php echo $article->date('d/m/Y') ?>
            </time>
          </div>
          <?php echo $article->text()->kirbytext() ?>
        </div>
      </article>
      <?php endforeach ?>

      <?php if( $articles->pagination()->hasPages() ): ?>
      <nav class="pagination">

        <?php if( $articles->pagination()->hasNextPage() ): ?>
        <a class="prev" href="<?php echo $articles->pagination()->nextPageURL() ?>">older news&nbsp;&nbsp;&rsaquo;</a>
        <?php endif ?>

        <?php if( $articles->pagination()->hasPrevPage() ): ?>
        <a class="next" href="<?php echo $articles->pagination()->prevPageURL() ?>">&lsaquo;&nbsp;&nbsp;newer news</a>
        <?php endif ?>

      </nav>
      <?php endif ?>

    </div>

  </div> <!-- / #content  -->

<?php snippet('footer') ?>
