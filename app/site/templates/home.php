<?php snippet('head') ?>

	<?php snippet('header') ?>

	<div id="content" class="home">

		<div class="landing">
			<div class="wrapper">
				<h1 class="img-in"> <?php echo $page->baselineL1() ?> <br/> <?php echo $page->baselineL2() ?></h1>

				<div class="calendar-wrap">
					<div id="datepicker-1">
						<p>Check in</p>
					</div>
					<div id="datepicker-2">
						<p>Check out</p>
					</div>
				</div>

				<div class="date-picker">
					<div class="checkin">
						<p class="datepicker-date-selected datepicker-date-selected-1"></p>
						<p class="datepicker-month datepicker-month-1"></p>
					</div>
					<div class="checkout">
						<p class="datepicker-date-selected datepicker-date-selected-2"></p>
						<p class="datepicker-month datepicker-month-2"></p>
					</div>
					<div class="guests">
						<select class="custom-select" name="guests">
							<option value="" selected="selected"></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>
					<div class="submit">
						<a href="#">Check availability</a>
					</div>
				</div>
			</div>
			<div class="scrolldown">
        scroll down
      </div>
			<div class="img-wrap">
				<img src="<?php echo $page->image('landing-1.jpg')->url() ?>" alt="Welcome to a retreat unlike any other" />
				<img src="<?php echo $page->image('landing-2.jpg')->url() ?>" alt="Welcome to a retreat unlike any other" />
				<img src="<?php echo $page->image('landing-3.jpg')->url() ?>" alt="Welcome to a retreat unlike any other" />
			</div>
		</div>

		<div class="main">

			<section class="container">
				<div class="three infos">
					<h2><?php echo $page->firstTitle() ?></h2>
					<p><?php echo $page->firstText() ?></p>
					<a href="<?php echo $pages->find('villas')->url(); ?>" class="btn cta golden"><span>Explore all our rooms</span></a>
				</div>

				<div class="nine images">
					<div class="row">
						<figure class="six">
						<a href="<?php echo $pages->find('villas/mediterranean')->url() ?>">
							<img src="<?php echo $pages->find('villas/mediterranean/apollonia-studio')->image('apollonia.room-187.jpg')->url() ?>" alt="Apollonia Studio" />
							<figcaption>
								<p class="h4"><?php echo $pages->find('villas/mediterranean/apollonia-studio')->title() ?></p>
							</figcaption>
						</a>
						</figure>
						<figure class="six">
						<a href="<?php echo $pages->find('villas/moroccan')->url() ?>">
							<img src="<?php echo $pages->find('villas/moroccan/bedouin-suite')->image('bedouin.suite-48.jpg')->url() ?>" alt="Bedouin Suite" />
							<figcaption>
								<p class="h4"><?php echo $pages->find('villas/moroccan/bedouin-suite')->title() ?></p>
							</figcaption>
						</a>
						</figure>
					</div>
					<div class="row">
						<figure class="twelve">
						<a href="<?php echo $pages->find('villas/mediterranean')->url() ?>">
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
							<a href="<?php echo $pages->find('villas/mediterranean') ?>" class="h4">The Mediterranean Villa</a>
						</figcaption>
						<a href="<?php echo $pages->find('villas/mediterranean') ?>" ><img src="<?php echo $page->image('asset-mediterranean.jpg')->url() ?>" alt="Discover The Mediterranean Villas" /></a>
					</figure>
					<figure class="moroccan six">
						<figcaption>
							<span></span>
							<a href="<?php echo $pages->find('villas/moroccan') ?>" class="h4">The Moroccan Villa</a>
						</figcaption>
						<a href="<?php echo $pages->find('villas/moroccan') ?>"><img src="<?php echo $page->image('asset-moroccan.jpg')->url() ?>" alt="Discover The Moroccan Villas" /></a>
					</figure>
				</div>
			</section>
		</div>
	</div> <!-- / #content  -->

<?php snippet('footer') ?>
