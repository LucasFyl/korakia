<?php snippet('head') ?>

	<?php snippet('header') ?>

	<div id="content" class="about">

		<div class="landing">
			<div class="wrapper">
				<h1 class="img-in"><?php echo $page->landingTitle1() ?><br/>
				    <?php echo $page->landingTitle2() ?></h1>
			</div>
      <img src="<?php echo $page->image('landing.jpg')->url() ?>" alt="<?php echo $page->landingTitle1() ?> <?php echo $page->landingTitle2() ?>" />
      <div class="scrolldown">
        scroll down
      </div>
    </div>

    <div class="main">
      <section class="container intro">
        <h2 class="img-in"><?php echo $page->introTitle() ?></h2>
        <div class="row img-in">
          <div class="six">
            <?php echo $page->introText1stCol()->kirbytext() ?>
          </div>
          <div class="six">
            <?php echo $page->introText2ndCol()->kirbytext() ?>
          </div>
        </div>
      </section>
      <section class="history">
        <div class="banner">
          <h2><?php echo $page->historyTitle() ?></h2>
          <img src="<?php echo $page->image('asset-bg-banner.jpg')->url() ?>" alt="<?php echo $page->historyTitle() ?>" />
        </div>
        <div class="container">
          <div class="image">
            <img class="img-in" src="<?php echo $page->image('asset-mediterranean.jpg')->url() ?>" alt="<?php echo $page->firstTitle() ?>" />
          </div>
          <div class="infos">
            <h3><?php echo $page->firstTitle() ?></h3>
            <?php echo $page->firstText()->kirbytext() ?>
            <a href="<?php echo $pages->find('villas/mediterranean')->url() ?>" class="btn golden cta">Explore all our rooms</a>
          </div>
        </div>
        <div class="container">
          <div class="infos">
            <h3><?php echo $page->secondTitle() ?></h3>
            <?php echo $page->secondText()->kirbytext() ?>
            <a href="<?php echo $pages->find('villas/moroccan')->url() ?>" class="btn golden cta">Explore all our rooms</a>
          </div>
          <div class="image">
            <img class="img-in" src="<?php echo $page->image('asset-moroccan.jpg')->url() ?>" alt="<?php echo $page->secondTitle() ?>" />
          </div>
        </div>
      </section>
      <section class="charities">
				<div class="container">
					<div class="five title">
	          <h2><?php echo $page->charitiesTitle() ?></h2>
	        </div>
	        <div class="seven text">
	          <?php echo $page->charitiesText() ?>
	        </div>
				</div>
        <img src="<?php echo $page->image('asset-bg-banner.jpg')->url() ?>" alt="<?php echo $page->charitiesTitle() ?>" />
      </section>

    </div>
  </div> <!-- / #content  -->

<?php snippet('footer') ?>
