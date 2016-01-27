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
						<p class="datepicker-date-selected"></p>
						<div class="dropdown-wrap" tabindex="1">
					    <ul class="dropdown" tabindex="1">
					        <li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
					    </ul>
						</div>
					</div>
					<div class="submit">
						<a href="#">Check availability</a>
					</div>
				</div>
			</div>
			<div class="scrolldown">
        scroll down
      </div>
			<div class="img-wrap hide-mobile">
				<?php foreach ($pages->find('home/slider')->images() as $image): ?>
					<img src="<?php echo $image->url() ?>" alt="Korakia Pensione" draggable="false" />
				<?php endforeach; ?>
			</div>
			<div class="img-wrap hide-desktop">
				<?php foreach ($pages->find('home/slider-mobile')->images() as $image): ?>
					<img src="<?php echo $image->url() ?>" alt="Korakia Pensione" draggable="false" />
				<?php endforeach; ?>
			</div>
		</div>

		<div class="main">
			<section class="container intro">
				<h2><?php echo $page->introTitle() ?></h2>
				<div class="six">
					<?php echo $page->introText1()->kirbytext() ?>
				</div>
				<div class="six">
					<?php echo $page->introText2()->kirbytext() ?>
				</div>
			</section>
			<section class="container types-of-room">
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

			<section class="expand">
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
