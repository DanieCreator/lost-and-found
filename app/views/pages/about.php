<?php require_once __DIR__ . '/../includes/header.php' ?>

	<!-- Home -->
	<div class="home">
		
		<div class="home_background d-flex justify-content-center align-items-center"  style="background-image:url(images/home_background.jpg); height:512px;">
	
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">

							<div class="home_title mb-3">
								<h4 class="bg-secondary d-inline p-2 text-white"><?= $title ?></h4>
							</div>
							<div class="breadcrumbs">
								<span><a class="text-white" href="/">Home</a></span>
								<span><a class="text-white" href="/about"><?= $title ?></a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	<!-- Header -->
	<?php require_once __DIR__ . '/../includes/nav.php' ?>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 order-lg-1 order-2">
					<h2 class="intro_title">The home finder Mission</h2>
					<div class="intro_subtitle">Mission statement of this agency</div>
					<p class="intro_text">Churchil will write will write something creative churchil will write something creative churchil will write something creative churchil write something creative churchil write something creative Churchil will write will write something creative churchil will write something creative churchil will write something creative churchil write something creative churchil write something creative.</p>
					<div class="button intro_button trans_200"><a class="trans_200" href="#">read more</a></div>
				</div>
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="intro_image">
						<img src="images/intro.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>



<?php require_once __DIR__ . '/../includes/footer.php' ?>