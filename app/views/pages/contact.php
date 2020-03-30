<?php require_once __DIR__ . '/../includes/header.php' ?>
	
	<!-- Home -->
	<div class="home">
		<div class="home_background d-flex align-items-center" style="background-image:url(images/contact.jpg); height:512px;">
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

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6 contact_col">
					<div class="estate_contact_form">
						<div class="contact_title">say hello</div>
						<div class="estate_contact_form_container">
							<form id="estate_contact_form" class="estate_contact_form" action="post">
								<input id="estate_contact_form_name" class="estate_input_field estate_contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
								<input id="estate_contact_form_email" class="estate_input_field estate_contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
								<input id="estate_contact_form_subject" class="estate_input_field estate_contact_form_subject" type="email" placeholder="Subject" required="required" data-error="Subject is required.">
								<textarea id="estate_contact_form_message" class="estate_text_field estate_contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
								<button id="estate_contact_send_btn" type="submit" class="estate_contact_send_btn trans_200" value="Submit">send</button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-3 contact_col">
					<div class="contact_title">contact info</div>
					<ul class="contact_info_list estate_contact">
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
							<div class="contact_info_text">Kisumu office, mega plaza oginga odinga street</div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
							<div class="contact_info_text">+254 784 614</div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
							<div class="contact_info_text"><a href="#" target="_top">otienosnave@gmail.com</a></div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
							<div class="contact_info_text"><a href="#">www.homefinder.com</a></div>
						</li>
					</ul>
					<div class="estate_social">
						<ul class="estate_social_list">
							<li class="estate_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="estate_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li class="estate_social_item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 contact_col">
					<div class="contact_title">about</div>
					<div class="estate_about_text">
						<p>The home finder is your ultimate real estate agency. Apart from helping clients find posh homes, we also cater for the middle class and lower class individuals. Apart from finding homes we also help find office space for clients.</p>
					</div>
				</div>

			</div>

		</div>

		<!-- Google Map -->
		
		<div class="estate_map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map"></div>
				</div>
			</div>
		</div>

<?php require_once __DIR__ . '/../includes/footer.php' ?>