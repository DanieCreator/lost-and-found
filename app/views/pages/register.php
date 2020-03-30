<?php require_once __DIR__ . '/../includes/header.php' ?>

	<!-- Home -->
	<div class="py-5">
		<div class="home_background d-flex justify-content-center align-items-center"  style="background-image:url(images/home_background.jpg); height:400px;">
			<div class="container mt-5">
				<div class="row">
					<div class="col">
						<div class="home_content mt-5">
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

	<!-- Agents -->

	<div class="agents py-4">
		<div class="container">
			<div class="row agents_row">
				<div class="col-md-6 offset-md-3">

					<h3 class="intro_title font-weight-bold">Create a new Account</h3>
					<div class="intro_subtitle pb-3">To acces all the cool default features</div>


					<form action="/users/login" enctype="multipart/form-data" method="post">
					
						<div class="form-group">
							<label for="name">YOUR NAME</label>
							<input type="text" name="name" id="name" class="form-control">
						</div>
					
						<div class="form-group">
							<label for="email">EMAIL ADDRESS</label>
							<input type="email" name="email" id="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="password">PASSWORD</label>
							<input type="password" name="password" id="password" class="form-control">
						</div>
						<div class="form-group">
							<label for="confirm_password">CONFIRM PASSWORD</label>
							<input type="password" name="confirm_password" id="confirm_password" class="form-control">
						</div>

						<div class="clearfix my-3">
							<button type="submit" class="btn btn-block bg-secondary text-white">
								<span>Register</span>
							</button>
						</div>

					</form>

				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="agents_more">
						<div class="button agents_more_button trans_200"><a class="trans_200" href="/register">Already have an account? Login Here</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php require_once __DIR__ . '/../includes/footer.php' ?>