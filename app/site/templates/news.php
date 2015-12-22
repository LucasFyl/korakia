<?php snippet('head') ?>
  <?php snippet('header') ?>

  <div id="content" class="news">

		<div class="landing">
      <div class="wrapper">
        <h1><?php echo $page->title() ?></h1>
      </div>
      <img src="<?php echo $page->image('landing.jpg')->url() ?>" alt="<?php echo $page->landingTitle1() ?> <?php echo $page->landingTitle2() ?>" />

			<div class="scrolldown"> scroll down </div>
    </div>

    <div class="main container">
      <?php $articles = $page->children()->visible()->paginate(4); ?>

      <?php foreach($articles as $article): ?>
      <article class="press">
        <div class="five image">
          <img src="<?php echo $article->images()->first()->url() ?>" alt="<?php echo $article->title() ?>" />
        </div>
        <div class="seven infos">
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
