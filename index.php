<?php 
	require_once('config.php');
	require_once('loan-process.php');
	require_once(DIRECTORY.'templates/head.php') 
?>


	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">

		<?php require_once(DIRECTORY.'templates/header.php') ?>
		<!-- Top Banner -->
		<div class="banner-area">
			<div class="banner banner-slider-active">

				<!-- Single Banner -->
				<div class="banner__single bg-image--2" data-black-overlay="6">
					<div class="container">
						<div class="row">
							<div class="col-xl-7 col-lg-9">
								<div class="banner__single__content">
									<h1>WE SATISFY OUR <span class="color--theme">CLIENTS' NEEDS ALWAYS</span></h1>
									<p>
										Striving to continually make it our priority to serve, satisfy and meet our clients’ needs always
									</p>
									<a href="contact.php" class="cr-btn">
										<span>Contact Now</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //Single Banner -->

				<!-- Single Banner -->
				<div class="banner__single bg-image--2" data-black-overlay="6">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-xl-9 col-lg-11">
								<div class="banner__single__content text-center">
									<h1><span class="color--theme">WE ARE TRANSPARENT</span> IN OUR DEALINGS</h1>
									<p>
										Maintaining the highest standards of integrity and transparency in all our dealings thereby earning the trust of our customers
									</p>
									<a href="contact.php" class="cr-btn">
										<span>Contact Now</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //Single Banner -->

				<!-- Single Banner -->
				<div class="banner__single bg-image--1" data-black-overlay="6">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-xl-9 col-lg-11">
								<div class="banner__single__content text-center">
									<h3>TO PROVIDE WORLD-CLASS SERVICES </h3>
									<h1>AND INNOVATIVE  <span class="color--theme">PRODUCT SOLUTIONS</span></h1>
				
									<a href="contact.php" class="cr-btn">
										<span>Contact Now</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //Single Banner -->

			</div>
		</div>
		<!-- //Top Banner -->

		<!-- Page Conent -->
		<main class="page-content">

			<!-- About Area -->
			<section id="about-area" class="cr-section about-area bg--white section-padding--xlg">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="about-area__content">
								<h4>ABOUT <span class="colors--theme">US</span></h4>
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

			<!-- Service Area -->
			<section id="service-area" class="service-area section-padding--xlg bg--white">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 col-12">
							<div class="section-title text-center">
								<h2>OUR SERVICES</h4>
								<h6>
									<span>* OUR LOAN PRODUCTS &nbsp;&nbsp;&nbsp;</span>
									<span class="color--theme">* OUR INVESTMENT PRODUCTS &nbsp;&nbsp;&nbsp;</span>
									<span>* OUR FINANCIAL SERVICES</span>
								</h6>
								<p>
									We offer the following services which include but not limited to the following
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 wow flipInX">
							<div class="service">
								<div class="service__icon">
									<i class="flaticon-profits"></i>
								</div>
								<div class="service__content">
									<h5>
										<a href="services.php#loan-product">OUR LOAN PRODUCTS</a>
									</h5>
									<p>
										We provide consumer and business loans to individuals and the Micro, Small and Medium Enterprises 
								  </p>
								</div>
							</div>
						</div>
						<!--// Single Service -->

						<!-- Single Service -->
						<div class="col-lg-4 col-md-6 col-12 wow flipInX">
							<div class="service">
								<div class="service__icon">
									<i class="flaticon-investment"></i>
								</div>
								<div class="service__content">
									<h5>
										<a href="services.php#investment-product">OUR INVESTMENT PRODUCTS</a>
									</h5>
									<p>
											We offer better rates than that of other investment products in commercial banks while our rates compare favorably with what is obtainable in our own subsector of the finance industry
									</p>
								</div>
							</div>
						</div>
						<!--// Single Service -->

						<!-- Single Service -->
						<div class="col-lg-4 col-md-6 col-12 wow flipInX">
							<div class="service">
								<div class="service__icon">
									<i class="flaticon-team"></i>
								</div>
								<div class="service__content">
									<h5>
										<a href="services.php#financial">OUR FINANCIAL SERVICES</a>
									</h5>
									<p>
										We provide opportunity for our customers to acquire goods through instalment payment over a given time frame.
									</p>
								</div>
							</div>
						</div>
						<!--// Single Service -->
					</div>
				
				</div>
			</section>
			<!--// Service Area -->

			<!-- Portfolio Area -->
			<!-- <div id="portfolio-area" class="portfolio-area bg--grey section-padding--xlg">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
							<div class="section-title text-center">
								<h4>OUR CSR</h4>
								<h2>OUR CORPORATE
									<span class="color--theme">SOCIAL RESPONSIBILITY</span>
								</h2>
								<p>
									We try our best to give back to our community
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="portfolio-filters text-center">
								<button class="is-active" data-filter="*">All</button>
								<button data-filter=".filter-empowerment">Empowerment</button>
								<button data-filter=".filter-medical">Medical</button>
							</div>
						</div>
					</div>
					<div class="row portfolio-wrap portfolio-gallery-active">

						<div class="col-lg-4 col-md-6 col-12 portfolio-item filter-empowerment filter-running">
							<div class="portfolio">
								<div class="portfolio-image">
									<img src="images/csr/youth-1.jpg" alt="portofolio image">
								</div>
								<div class="portfolio-content">
									<h5><a href="#">Youth Empowerment Programme At Eket</a></h5>
									<h6>Empowerment</h6>
								</div>
								<a href="images/csr/youth-1.jpg" class="portfolio-zoomicon"><i class="pe-7s-search"></i></a>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-12 portfolio-item filter-empowerment filter-completed">
							<div class="portfolio">
								<div class="portfolio-image">
									<img src="images/csr/youth-2.jpg" alt="portofolio image">
								</div>
								<div class="portfolio-content">
									<h5><a href="#">Youth Empowerment Programme At Eket</a></h5>
									<h6>Empowerment</h6>
								</div>
								<a href="images/csr/youth-2.jpg" class="portfolio-zoomicon"><i class="pe-7s-search"></i></a>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-12 portfolio-item filter-empowerment">
							<div class="portfolio">
								<div class="portfolio-image">
									<img src="images/csr/youth-3.jpg" alt="portofolio image">
								</div>
								<div class="portfolio-content">
									<h5><a href="#">Youth Empowerment Programme At Eket</a></h5>
									<h6>Empowerment</h6>
								</div>
								<a href="images/csr/youth-3.jpg" class="portfolio-zoomicon"><i class="pe-7s-search"></i></a>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-12 portfolio-item filter-medical">
							<div class="portfolio">
								<div class="portfolio-image">
									<img src="images/csr/medical-1.jpg" alt="portofolio image">
								</div>
								<div class="portfolio-content">
									<h5><a href="#">Youth Empowerment Programme At Eket</a></h5>
									<h6>Empowerment</h6>
								</div>
								<a href="images/csr/medical-1.jpg" class="portfolio-zoomicon"><i class="pe-7s-search"></i></a>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-12 portfolio-item filter-recent filter-medical">
							<div class="portfolio">
								<div class="portfolio-image">
									<img src="images/csr/medical-2.jpg" alt="portofolio image">
								</div>
								<div class="portfolio-content">
									<h5><a href="#">Our Medical Outreach Programme At Ijebu Ode</a></h5>
									<h6>Medical</h6>
								</div>
								<a href="images/csr/medical-2.jpg" class="portfolio-zoomicon"><i class="pe-7s-search"></i></a>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-12 portfolio-item filter-medical">
							<div class="portfolio">
								<div class="portfolio-image">
									<img src="images/csr/medical-3.jpg" alt="portofolio image">
								</div>
								<div class="portfolio-content">
									<h5><a href="#">Our Medical Outreach Programme At Ijebu Ode.</a></h5>
									<h6>Medical</h6>
								</div>
								<a href="images/csr/medical-3.jpg" class="portfolio-zoomicon"><i class="pe-7s-search"></i></a>
							</div>
						</div>

					</div>
				</div>
			</div> -->
			<!--// Portfolio Area -->

			<!-- Team Area -->
			<?php //require_once(DIRECTORY.'templates/team.php') ?>
			
			<!--// Team Area -->

			<?php require_once(DIRECTORY."templates/fun-fact.php") ?>

	

			<?php require_once(DIRECTORY."templates/testimonial.php") ?>

			
			<?php include(DIRECTORY."templates/social.php") ?>

			<?php require_once(DIRECTORY."templates/call-action.php") ?>

		</main>
		<!-- //Page Conent -->

		<?php require_once(DIRECTORY."templates/footer.php") ?>

	</div>
	<!-- //Main wrapper -->

	<?php //require_once(DIRECTORY."templates/modal-construction.php") ?>
	<?php require_once(DIRECTORY."templates/scripts.php") ?>

</body>

</html>