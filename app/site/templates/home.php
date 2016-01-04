<?php snippet('head') ?>

	<?php snippet('header') ?>

	<div id="content" class="home">

		<div class="landing">
			<div class="wrapper">
				<h1> <?php echo $page->baselineL1() ?> <br/> <?php echo $page->baselineL2() ?></h1>

				<div class="date-picker">
					<div class="checkin">
						<!-- calendar -->
					</div>
					<div class="checkout">
						<!-- calendar -->
					</div>
					<div class="guests">
						<!-- number dropdown -->
					</div>
					<div class="submit">
						<a href="#">Check availability</a>
					</div>
				</div>
			</div>
			<!-- TO DO : IMAGE SLIDER + DOTS -->
			<img src="<?php echo $page->image('landing.jpg')->url() ?>" alt="Discover The Moroccan Villas" />
		</div>

		<div class="main">

			<section class="container">
				<div class="three infos">
					<h2><?php echo $page->firstTitle() ?></h2>
					<p><?php echo $page->firstText() ?></p>
					<a href="<?php echo $pages->find('villas')->url(); ?>" class="btn cta golden">Explore all our rooms</a>
				</div>

				<div class="nine images">
					<div class="row">
						<figure class="six">
						<a href="<?php echo $pages->find('villas/mediterranean/apollonia-studio')->url() ?>">
							<img src="<?php echo $pages->find('villas/mediterranean/apollonia-studio')->image('apollonia.room-187.jpg')->url() ?>" alt="Apollonia Studio" />
							<figcaption>
								<p class="h4"><?php echo $pages->find('villas/mediterranean/apollonia-studio')->title() ?></p>
							</figcaption>
						</a>
						</figure>
						<figure class="six">
						<a href="<?php echo $pages->find('villas/moroccan/bedouin-suite')->url() ?>">
							<img src="<?php echo $pages->find('villas/moroccan/bedouin-suite')->image('bedouin.suite-48.jpg')->url() ?>" alt="Bedouin Suite" />
							<figcaption>
								<p class="h4"><?php echo $pages->find('villas/moroccan/bedouin-suite')->title() ?></p>
							</figcaption>
						</a>
						</figure>
					</div>
					<div class="row">
						<figure class="twelve">
						<a href="<?php echo $pages->find('villas/mediterranean/thessaly-room')->url() ?>">
							<img src="<?php echo $pages->find('villas/mediterranean/thessaly-room')->image('thessaly.room-110.jpg')->url() ?>" alt="Thessaly room" />
							<figcaption>
								<p class="h4"><?php echo $pages->find('villas/mediterranean/thessaly-room')->title() ?></p>
							</figcaption>
						</a>
						</figure>
					</div>
				</div>
			</section>

			<section>
				<div class="six">
					<h2><?php echo $page->secondTitle() ?></h2>
					<p><?php echo $page->secondText() ?></p>
				</div>

				<div class="row">
					<figure class="mediterranean six">
						<figcaption>
							<span></span>
							<a href="<?php echo $pages->find('rooms/mediterranean') ?>" class="h4">The Mediterranean Villa</a>
						</figcaption>
						<img src="<?php echo $page->image('asset-mediterranean.jpg')->url() ?>" alt="Discover The Mediterranean Villas" />
					</figure>
					<figure class="moroccan six">
						<figcaption>
							<span></span>
							<a href="<?php echo $pages->find('rooms/moroccan') ?>" class="h4">The Moroccan Villa</a>
						</figcaption>
						<img src="<?php echo $page->image('asset-moroccan.jpg')->url() ?>" alt="Discover The Moroccan Villas" />
					</figure>
				</div>
			</section>
		</div>
	</div> <!-- / #content  -->

<?php snippet('footer') ?>
