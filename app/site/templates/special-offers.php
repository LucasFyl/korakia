<?php snippet('head') ?>

	<?php snippet('header') ?>

	<div id="content" class="special-offers">

		<div class="landing">
			<div class="wrapper">
				<h1 class="img-in"><?php echo $page->Landingtitle() ?></h1>
			</div>

			<div class="scrolldown">
        scroll down
      </div>
    </div>

    <div class="main container">

      <section class="weddings">
        <h2><?php echo $page->weddingTitle() ?></h2>
        <div class="row">
          <div class="text">
            <?php echo $page->weddingText1st()->kirbytext() ?>
          </div>
          <div class="text">
            <?php echo $page->weddingText2nd()->kirbytext() ?>
          </div>
        </div>
        <!--  TO DO MODAL -->
        <div class="modal-outer">
          <a href="#" class="modal-trigger play-icon"></a>
          <img class="img-in" src="<?php echo $page->image('asset-weddings.jpg')->url() ?>" alt="<?php echo $page->weddingTitle() ?>" />
        </div>

        <section class="engagements">
          <h2><?php echo $page->engagementsTitle() ?></h2>
          <?php echo $page->engagementsText()->kirbytext() ?>
          <div class="row assets">
            <div class="three">
              <img class="img-in" src="<?php echo $page->image('asset-engagements-1.jpg')->url() ?>" alt="<?php echo $page->engagementsTitle() ?>" />
            </div>
            <div class="three">
              <img class="img-in" src="<?php echo $page->image('asset-engagements-2.jpg')->url() ?>" alt="<?php echo $page->engagementsTitle() ?>" />
            </div>
            <div class="three">
              <img class="img-in" src="<?php echo $page->image('asset-engagements-3.jpg')->url() ?>" alt="<?php echo $page->engagementsTitle() ?>" />
            </div>
            <div class="three">
              <img class="img-in" src="<?php echo $page->image('asset-engagements-4.jpg')->url() ?>" alt="<?php echo $page->engagementsTitle() ?>" />
            </div>
            <div class="three">
              <img class="img-in" src="<?php echo $page->image('asset-engagements-5.jpg')->url() ?>" alt="<?php echo $page->engagementsTitle() ?>" />
            </div>
            <div class="three">
              <img class="img-in" src="<?php echo $page->image('asset-engagements-6.jpg')->url() ?>" alt="<?php echo $page->engagementsTitle() ?>" />
            </div>
            <div class="three">
              <img class="img-in" src="<?php echo $page->image('asset-engagements-7.jpg')->url() ?>" alt="<?php echo $page->engagementsTitle() ?>" />
            </div>
            <div class="three">
              <img class="img-in" src="<?php echo $page->image('asset-engagements-8.jpg')->url() ?>" alt="<?php echo $page->engagementsTitle() ?>" />
            </div>
            <div class="three">
              <img class="img-in" src="<?php echo $page->image('asset-engagements-9.jpg')->url() ?>" alt="<?php echo $page->engagementsTitle() ?>" />
            </div>
          </div>
        </section>
      </section>

      <section class="events-retreat">
        <div class="infos">
          <h2><?php echo $page->eventsTitle() ?></h2>
          <?php echo $page->eventsText()->kirbytext() ?>
        </div>

        <div class="images">
          <div class="row">
            <div class="six">
              <img class="img-in" src="<?php echo $page->image('asset-events-1.jpg')->url() ?>" alt="<?php echo $page->eventsTitle() ?>" />
            </div>
            <div class="six">
              <img class="img-in" src="<?php echo $page->image('asset-events-2.jpg')->url() ?>" alt="<?php echo $page->eventsTitle() ?>" />
            </div>
          </div>
          <div class="row">
            <div class="six">
              <img class="img-in" src="<?php echo $page->image('asset-events-3.jpg')->url() ?>" alt="<?php echo $page->eventsTitle() ?>" />
            </div>
            <div class="six">
              <img class="img-in" src="<?php echo $page->image('asset-events-4.jpg')->url() ?>" alt="<?php echo $page->eventsTitle() ?>" />
            </div>
          </div>
        </div>
      </section>
    </div>
	</div> <!-- / #content  -->
	<div class="overlay">
		<div class="modal">
			<div class="closeModal">Close</div>
      <div class="video-modal <?php echo video1 ?>" >
        <iframe src="https://player.vimeo.com/video/39868874?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
			
		</div>
	</div>

<?php snippet('footer') ?>
