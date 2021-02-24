<?php require_once('config.php') ?>
<?php //require_once('mail.php') ?>
<?php require_once(DIRECTORY.'templates/head.php') ?>
<?php require_once(DIRECTORY.'templates/header.php') ?>

		<!-- Breadcrumb Area -->
		<div id="cr-breadcrumb-area" class="cr-breadcrumb-area bg-image--2 section-padding--md" data-overlay="8">
			<div class="container">
				<div class="cr-breadcrumb">
					<div class="cr-breadcrumb__left">
						<h2>Contact Us</h2>
					</div>
					<div class="cr-breadcrumb__right">
						<ul class="cr-breadcrumb__pagination">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--// Breadcrumb Area -->

		<!-- Page Conent -->
		<main class="page-content">

			<!-- Pg Contact -->
			<div class="pg-contact bg--white">

				<!-- Contact Form -->
				<div class="pg-contact-form-area bg--white section-padding--xlg">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-12">
								<div class="pg-appintment">
									<div class="pg-appintment__title">
										<h2>SEND A MESSAGE</h2>
									</div>
									<div class="pg-appintment__box">
										<form id="contact-form" action="mail.php" method="POST">
											<div class="row">
												<div class="col-lg-6 col-md-6">
													<div class="single-input">
														<input type="text" name="name" id="name" placeholder="Name">
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="single-input">
														<input type="email" name="email" id="email" placeholder="Email">
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="single-input">
														<input type="text" name="subject" id="subject" placeholder="Subject">
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="single-input">
														<input type="text" name="phone" id="phone" placeholder="Phone">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="single-input">
														<textarea name="message" cols="30" rows="5" placeholder="Message"></textarea>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="single-input button text-left">
														<button type="submit" class="cr-btn"><span>Submit</span></button>
													</div>
												</div>
											</div>
										</form>
										<p class="form-message"></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div class="pg-contact__content">
									<h1>say hello to us</h1>
									<p>
										Let’s start a conversation. Use our contact form, give us a call, or visit our office.
									</p>
									<div class="pg-contact__blocks">
										<div class="single-block address">
											<h6>address</h6>
											<p>
												4, Karimu Kotun Street, Victoria Island, Lagos.
											</p>
										</div>
										<div class="single-block phone">
											<h6>Phone</h6>
											<p><a href="#">+234 (0) 812 727 9729</a></p>
											<p><a href="#">+234 (0) 1814 184 6551</a></p>
										</div>
										<div class="single-block web">
											<h6>Email</h6>
											<p><a href="#">info@lukefield.com.ng</a></p>
										</div>
										<div class="single-block web">
											<h6>Web</h6>
											<p><a href="#">www.lukefield.com.ng</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--// Contact Form -->

				<!-- Google Map -->
			
				<div class="google-map-wrapper">
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3964.7560566365914!2d3.4255068!3d6.42538!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf53176acb835%3A0x2e8896df8e3a60de!2s4+Karimu+Kotun+St%2C+Victoria+Island%2C+Lagos!5e0!3m2!1sen!2sng!4v1564760236091!5m2!1sen!2sng" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<!--// Google Map -->

			</div>
			<!--// Pg Contact -->

		<?php require_once(DIRECTORY."templates/call-action.php"); ?>


		</main>
		<!-- //Page Conent -->

		<?php require_once(DIRECTORY."templates/footer.php"); ?>


	</div>
	<!-- //Main wrapper -->

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0"></script>
	<script>
		// When the window has finished loading create our google map below
		google.maps.event.addDomListener(window, 'load', init);

		function init() {
			// Basic options for a simple Google Map
			// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
			var mapOptions = {
				// How zoomed in you want the map to start at (always required)
				zoom: 12,

				scrollwheel: false,

				// The latitude and longitude to center the map (always required)
				center: new google.maps.LatLng(40.740610, -73.935242), // New York

				// How you would like to style the map. 
				// This is where you would paste any style found on

				styles: [{
						"featureType": "water",
						"elementType": "geometry",
						"stylers": [{
								"color": "#e9e9e9"
							},
							{
								"lightness": 17
							}
						]
					},
					{
						"featureType": "landscape",
						"elementType": "geometry",
						"stylers": [{
								"color": "#f5f5f5"
							},
							{
								"lightness": 20
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry.fill",
						"stylers": [{
								"color": "#ffffff"
							},
							{
								"lightness": 17
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry.stroke",
						"stylers": [{
								"color": "#ffffff"
							},
							{
								"lightness": 29
							},
							{
								"weight": 0.2
							}
						]
					},
					{
						"featureType": "road.arterial",
						"elementType": "geometry",
						"stylers": [{
								"color": "#ffffff"
							},
							{
								"lightness": 18
							}
						]
					},
					{
						"featureType": "road.local",
						"elementType": "geometry",
						"stylers": [{
								"color": "#ffffff"
							},
							{
								"lightness": 16
							}
						]
					},
					{
						"featureType": "poi",
						"elementType": "geometry",
						"stylers": [{
								"color": "#f5f5f5"
							},
							{
								"lightness": 21
							}
						]
					},
					{
						"featureType": "poi.park",
						"elementType": "geometry",
						"stylers": [{
								"color": "#dedede"
							},
							{
								"lightness": 21
							}
						]
					},
					{
						"elementType": "labels.text.stroke",
						"stylers": [{
								"visibility": "on"
							},
							{
								"color": "#ffffff"
							},
							{
								"lightness": 16
							}
						]
					},
					{
						"elementType": "labels.text.fill",
						"stylers": [{
								"saturation": 36
							},
							{
								"color": "#333333"
							},
							{
								"lightness": 40
							}
						]
					},
					{
						"elementType": "labels.icon",
						"stylers": [{
							"visibility": "off"
						}]
					},
					{
						"featureType": "transit",
						"elementType": "geometry",
						"stylers": [{
								"color": "#f2f2f2"
							},
							{
								"lightness": 19
							}
						]
					},
					{
						"featureType": "administrative",
						"elementType": "geometry.fill",
						"stylers": [{
								"color": "#fefefe"
							},
							{
								"lightness": 20
							}
						]
					},
					{
						"featureType": "administrative",
						"elementType": "geometry.stroke",
						"stylers": [{
								"color": "#fefefe"
							},
							{
								"lightness": 17
							},
							{
								"weight": 1.2
							}
						]
					}
				]
			};

			// Get the HTML DOM element that will contain your map 
			// We are using a div with id="map" seen below in the <body>
			var mapElement = document.getElementById('google-map');

			// Create the Google Map using our element and options defined above
			var map = new google.maps.Map(mapElement, mapOptions);

			// Let's also add a marker while we're at it
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(40.740610, -73.935242),
				map: map,
				title: 'Fsulting',
				icon: "images/icons/marker.png",
				animation: google.maps.Animation.BOUNCE
			});
		}
	</script>

<?php require_once(DIRECTORY."templates/scripts.php"); ?>
</body>

</html>