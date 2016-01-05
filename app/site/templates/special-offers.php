<?php snippet('head') ?>

	<?php snippet('header') ?>

	<div id="content" class="special-offers">

		<div class="landing">
			<div class="wrapper">
				<h1><?php echo $page->Landingtitle() ?></h1>
			</div>
      <img src="<?php echo $page->image('landing.jpg')->url() ?>" alt="<?php echo $page->title() ?>" />

			<div class="scrolldown">
        scroll down
      </div>
    </div>

    <div class="main container">

      <section class="weddings">
        <h2><?php echo $page->weddingTitle() ?></h2>
        <div class="row">
          <div class="six">
            <?php echo $page->weddingText1st()->kirbytext() ?>
          </div>
          <div class="six">
            <?php echo $page->weddingText2nd()->kirbytext() ?>
          </div>
        </div>
        <!--  TO DO MODAL -->
        <div class="modal-outer">
          <a href="#" class="modal-trigger play-icon"></a>
          <img src="<?php echo $page->image('asset-weddings.jpg')->url() ?>" alt="<?php echo $page->weddingTitle() ?>" />
        </div>

        <section class="engagements">
          <h2><?php echo $page->engagementsTitle() ?></h2>
          <?php echo $page->engagementsText()->kirbytext() ?>
          <div class="row assets">
            <div class="three">
              <img src="<?php echo $page->image('asset-engagements-1.jpg')->url() ?>" alt="<?php echo $page->engagementsTitle() ?>" />
            </div>
            <div class="three">
              <img src="<?php echo $page->image('asset-engagements-2.jpg')->url() ?>" alt="<?php echo $page->engagementsTitle() ?>" />
            </div>
            <div class="three">
              <img src="<?php echo $page->image('asset-engagements-3.jpg')->url() ?>" alt="<?php echo $page->engagementsTitle() ?>" />
            </div>
            <div class="three">
              <img src="<?php echo $page->image('asset-engagements-4.jpg')->url() ?>" alt="<?php echo $page->engagementsTitle() ?>" />
            </div>
          </div>
        </section>
      </section>

      <section class="events-retreat">
        <div class="six">
          <h2><?php echo $page->eventsTitle() ?></h2>
          <?php echo $page->eventsText()->kirbytext() ?>
        </div>

        <div class="six">
          <div class="row">
            <div class="six">
              <img src="<?php echo $page->image('asset-events-1.jpg')->url() ?>" alt="<?php echo $page->eventsTitle() ?>" />
            </div>
            <div class="six">
              <img src="<?php echo $page->image('asset-events-2.jpg')->url() ?>" alt="<?php echo $page->eventsTitle() ?>" />
            </div>
          </div>
          <div class="row">
            <div class="six">
              <img src="<?php echo $page->image('asset-events-3.jpg')->url() ?>" alt="<?php echo $page->eventsTitle() ?>" />
            </div>
            <div class="six">
              <img src="<?php echo $page->image('asset-events-4.jpg')->url() ?>" alt="<?php echo $page->eventsTitle() ?>" />
            </div>
          </div>
        </div>
      </section>

      <section class="photoshoots">
        <div class="six">
          <img src="<?php echo $page->image('asset-photoshoot.jpg')->url() ?>" alt="<?php echo $page->photosTitle() ?>" />
        </div>
        <div class="six">
          <h2><?php echo $page->photosTitle() ?></h2>
          <?php echo $page->photosText()->kirbytext() ?>
        </div>
      </section>
    </div>
	</div> <!-- / #content  -->
	<div class="overlay">
		<div class="modal">
			<div class="closeModal">Close</div>
			<h1>Hello World</h1>
		</div>
	</div>

<?php snippet('footer') ?>
