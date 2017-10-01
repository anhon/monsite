<?php
get_header(); ?>

	<div id="front-page">
		<main id="main" class="site-main" role="main">

			<div class="partie-1">

				<video id="bgvid" autoplay muted loop>
					<!-- poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" -->
					<!-- <source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm"> -->
					<!-- <source src="<?php echo get_template_directory_uri().'/videos/univers.mp4'; ?>" type="video/mp4"> -->
				</video>

				<div class="en-tete center">
					<h1 class="site-title">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<p>Anth<span class="clignoter">o</span>ny Vi<span class="clignoter">net</span></p>
							<p class="clignoter">Développeur web</p>
						</a>
					</h1>
				</div>
			</div>

			<div class="partie-2">
				<h2>à propos</h2>

				<div class="center">
					Je m'appelle Anthony et je suis développeur Web. Je travaille essentiellement avec Wordpress depuis 3 ans avec lequel je réalise du développement spécifique (plugins/thèmes).
				</div>

			</div>

			<div class="partie-3"></div>

			<div class="partie-4">
				<h2>contact</h2>

				<div class="center">
					<form action="">
						<div>
							<input type="text" placeholder="Nom & prénom">
							<input type="text" placeholder="Email">
						</div>

						<textarea placeholder="Message"></textarea>
					</form>
				</div>
			</div>

		</main>
	</div>

<?php
get_footer();
