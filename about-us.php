<?php require_once('config.php') ?>
<?php require_once(DIRECTORY.'templates/head.php') ?>
<?php require_once(DIRECTORY.'templates/header.php') ?>

		<!-- Breadcrumb Area -->
		<div id="cr-breadcrumb-area" class="cr-breadcrumb-area bg-image--2 section-padding--md" data-overlay="8">
			<div class="container">
				<div class="cr-breadcrumb">
					<div class="cr-breadcrumb__left">
						<h2>About Us</h2>
					</div>
					<div class="cr-breadcrumb__right">
						<ul class="cr-breadcrumb__pagination">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>About</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--// Breadcrumb Area -->

		<!-- Page Conent -->
		<main class="page-content">

			<!-- About Area -->
			<section id="about-area" class="cr-section about-area bg--white section-padding--xlg">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="about-area__content">
								<h4>ABOUT <span class="color--theme">US</span></h4>
								<h3>LUKEFIELD FINANCIAL <span class="color--theme">SERVICES</span></h3>
								<ul class="nav about-list">
									<li>
										<div class="div-check">
											<span class="check-container">
												<i class="fa fa-check-circle-o"></i>
											</span>
											<span class="check-content">
												Lukefield Finance Limited is a 100 percent Nigerian owned business 
											</span>
										</div>
									 </li>

									<li>
										<div class="div-check">
											<span class="check-container">
												<i class="fa fa-check-circle-o"></i>
											</span>
											<span class="check-content">
												The company was Incorporated in 2018
											</span>
										</div>
									</li>

									<li>
										<div class="div-check">
											<span class="check-container">
												<i class="fa fa-check-circle-o"></i>
											</span>
											<span class="check-content">
												Lukefield Finance Ltd was licensed and authorized to operate by the Central Bank of Nigeria in 2018
											</span>
										</div>
										
									</li>

									<li>
										<div class="div-check">
											<span class="check-container">
												<i class="fa fa-check-circle-o"></i>
											</span>
											<span class="check-content">
												To provide bespoke services to meet the financial needs and gaps of organizations
											</span>
										</div>
									</li>

									<li>
										<div class="div-check">
											<span class="check-container">
												<i class="fa fa-check-circle-o"></i>
											</span>
											<span class="check-content">
												To provide bespoke services to meet the financial needs and gaps of organizations
											</span>
										</div>
									</li>
								</ul>

								<a href="about-us.php" class="cr-btn">
									<span>Read More</span>
								</a>
							</div>
						</div>
						<div class="col-lg-6">
							<img src="images/about/about-us.jpg" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- //About Area -->

			<!-- Features Area -->
			<?php require_once(DIRECTORY.'templates/features.php') ?>
			<!--// Features Area -->

			<!-- Team Area -->
			<?php require_once(DIRECTORY.'templates/team.php') ?>
			<!--// Team Area -->

			<?php require_once(DIRECTORY."templates/fun-fact.php") ?>

			<?php require_once(DIRECTORY."templates/testimonial.php") ?>


			<!-- Call To Action Area -->
			<section class="cta-area section-padding--md bg--grey--light bg--abstruct-mask">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10">
							<div class="calltoaction text-center">
								<h3>NEED HELP FOR YOUR <span class="color--theme">FINANCIAL CONSULTING ?</span>
								</h3>
								<p>We have a team of experts that can provide a financial solution for your needs call us for help.</p>
								<div class="calltoaction-button mt-4">
									<span class="calltoaction-icon"><i class="flaticon-phone"></i></span>
									<a href="callto://+234(0)7034074817">+234 (0) 703 407 4817</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--// Call To Action Area -->

		</main>
		<!-- //Page Conent -->

	  <?php require_once(DIRECTORY."templates/footer.php") ?>

	</div>
	<!-- //Main wrapper -->

	<?php require_once(DIRECTORY."templates/scripts.php") ?>
</body>

</html>