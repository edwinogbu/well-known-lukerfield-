<?php require_once("config.php") ?>
<?php require_once(DIRECTORY."templates/head.php") ?>
<?php require_once(DIRECTORY."templates/header.php") ?>


		<!-- Breadcrumb Area -->
		<div id="cr-breadcrumb-area" class="cr-breadcrumb-area bg-image--2 section-padding--md" data-overlay="8">
			<div class="container">
				<div class="cr-breadcrumb">
					<div class="cr-breadcrumb__left">
						<h2>Portfolio Details</h2>
						<p>Nihil culpa beatae officiis temporibus vel vel asperiores in ut.</p>
					</div>
					<div class="cr-breadcrumb__right">
						<ul class="cr-breadcrumb__pagination">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="portfolo.html">Portfolio</a>
							</li>
							<li>Portfolio Details</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--// Breadcrumb Area -->

		<!-- Page Conent -->
		<main class="page-content">

			<!-- Portfolio Details Area -->
			<section class="cr-section portfolio-details-area bg--white section-padding--xlg">
				<div class="container">
					<div class="portfolio-details-images">
						<img src="images/portfolio/lg/portfolio-image-lg-1.jpg" alt="Portfolio Details Image">
					</div>
					<div class="row section-padding-top--sm">
						<div class="col-lg-4">
							<div class="portfolio-details-meta">
								<ul>
									<li><i class="fa fa-user"></i><span>Created by:</span> Akcent Chester</li>
									<li><i class="fa fa-calendar"></i><span>Completed on:</span> 20 Jan 2017</li>
									<li><i class="fa fa-coffee"></i><span>Skills:</span> HTML5 / WP / CSS3</li>
									<li><i class="fa fa-link"></i><span>Client:</span> <a href="#">HasTech</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="portfolio-details-info">
								<h3 class="small-title-fullwidth"><span>PROJECT INFO</span></h3>
								<h5 class="portfolio-title">NAME: NECESSITATIBUS BLANDITIIS.</h5>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit totam atque dignissimos porro,
									exercitationem, neque alias ea aliquid quibusdam voluptates impedit maxime aut asperiores consequatur iste.
									Corporis fuga ducimus dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci non
									dolorem consequatur vitae hic.</p>
								<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque qui aliquid neque dolor nihil nostrum
									obcaecati ipsam, aliquam blanditiis eius sequi cupiditate laudantium corrupti quae harum corporis eos ipsum
									quam.</p>
								<div class="post-share">
									<h6>Share:</h6>
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>
			<!--// Portfolio Details Area -->

			<?php require_once(DIRECTORY."templates/call-action.php") ?>


		</main>
		<!-- //Page Conent -->

		<?php require_once(DIRECTORY."templates/footer.php") ?>

	</div>
	<!-- //Main wrapper -->

	<?php require_once(DIRECTORY."templates/footer.php") ?>

</body>

</html>