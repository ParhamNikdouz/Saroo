<!DOCTYPE html>
<html lang="fa">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>PATROS - HTML5 FREE TEMPLATE</title>
		<!-- Bootstrap Core CSS -->
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/bootstrap-rtl.min.css" rel="stylesheet">
		<!-- Custom Fonts -->
		<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="/css/patros.css" >
        <link rel="stylesheet" href="/css/slider.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
	</head>

	<body data-spy="scroll">

        @include('layouts.nav')

        @include('layouts.header')

		<!-- Page Content -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="text-center">
							<h2>درباره ما</h2>
							<img class="img-responsive displayed" src="/images/short.png" alt="Company about"/>
							<div class="row">
								<div class="col-md-12">
									<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley. It has survived not only five centuries, but also the leap into electronic typesetting, remaining <span class="color-elements">essentially unchanged.</span>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="services">
			<div class="orangeback">
				<div class="container">
					<div class="text-center homeport2"><h2>خدمات ما</h2></div>
					<div class="row">
						<div class="col-md-12 homeservices1">
							<div class="col-md-3 portfolio-item">
								<div class="text-center">
									<a href="javascript:void(0);">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-line-chart fa-stack-1x"></i>
									</span>
									</a>
									<h3><a href="#">Strategy</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
							<div class="col-md-3 portfolio-item">
								<div class="text-center">
									<a href="javascript:void(0);">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-users fa-stack-1x"></i>
									</span>
									</a>
									<h3><a href="#">User Friendly</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
							<div class="col-md-3 portfolio-item">
								<div class="text-center">
									<a href="javascript:void(0);">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-code fa-stack-1x"></i>
									</span>
									</a>
									<h3><a href="#">Clean Code</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
							<div class="col-md-3 portfolio-item">
								<div class="text-center">
									<a href="javascript:void(0);">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-cogs fa-stack-1x"></i>
									</span>
									</a>
									<h3><a href="#">Flexibility</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="bloghome">
			<div class="container">
				<div class="text-center"><h2>Latest Blog Posts</h2>
					<img class="img-responsive displayed" src="/images/short.png" alt="about">
				</div>
				<div class="row">
					<div class="col-md-12 homeport1">
						<div class="col-md-4 col-sm-12 col-xs-12 portfolio-item">
							<figure class="effect-oscar">
								<img src="/images/blog1.jpg" alt="img09" class="img-responsive" />
								<figcaption>
									<h2>Blog Post Long Title</h2>
									<a href="#">View more</a>
								</figcaption>
							</figure>
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet.</p>
							<div class="text-center"><a class="btn btn-primary btn-noborder-radius hvr-bounce-to-bottom">Read More</a></div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12 portfolio-item">
							<figure class="effect-oscar">
								<img src="/images/blog2.jpg" alt="img09" class="img-responsive"/>
								<figcaption>
									<h2>Blog Post Long Title</h2>
									<a href="#">View more</a>
								</figcaption>
							</figure>
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet.</p>
							<div class="text-center"><a class="btn btn-primary btn-noborder-radius hvr-bounce-to-bottom">Read More</a></div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12 portfolio-item">
							<figure class="effect-oscar">
								<img src="/images/blog3.jpg" alt="img09" class="img-responsive"/>
								<figcaption>
									<h2>Blog Post Long Title</h2>
									<a href="#">View more</a>
								</figcaption>
							</figure>
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet.</p>
							<div class="text-center"><a class="btn btn-primary btn-noborder-radius hvr-bounce-to-bottom">Read More</a></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="meet-team">
			<div class="container">
				<div class="text-center">
				<h2>Team Members</h2>
				<img class="img-responsive displayed" src="/images/short.png" alt="about">
				</div>
				<div class="row teamspace">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="team-member">
							<div class="team-img">
								<img class="img-responsive" src="/images/person1.jpg" alt="">
							</div>
							<div class="team-info">
								<h3>Christian Peri</h3>
								<span>Co-Founder</span>
							</div>
							<p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
							<ul class="social-icons">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="team-member">
							<div class="team-img">
								<img class="img-responsive" src="/images/person1.jpg" alt="">
							</div>
							<div class="team-info">
								<h3>Jane Manz</h3>
								<span>Project Manager</span>
							</div>
							<p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
							<ul class="social-icons">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="team-member">
							<div class="team-img">
								<img class="img-responsive" src="/images/person1.jpg" alt="">
							</div>
							<div class="team-info">
								<h3>Paulinho Rubos</h3>
								<span>Designer</span>
							</div>
							<p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
							<ul class="social-icons">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="team-member">
							<div class="team-img">
								<img class="img-responsive" src="/images/person1.jpg" alt="">
							</div>
							<div class="team-info">
								<h3>Loreto Andas</h3>
								<span>Developer</span>
							</div>
							<p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
							<ul class="social-icons">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="portfolio1">
		<div class="container">
		<div class="row">
			<div class="text-center">
			<h2>محصولات</h2>
			<img class="img-responsive displayed" src="/images/short.png" alt="about">
			</div>

			<ul class="filter nav nav-pills">
			  <li data-value="all" ><a class="active" href="#">همه</a></li>
			  <li data-value="development"><a href="#">یو پی اس</a></li>
			  <li data-value="webdesign"><a href="#">هوشمند سازی</a></li>
			  <li data-value="mobileapps"><a href="#">اعلام حریق و سیستم امنیتی</a></li>
			</ul>

			<ul class="port2">
			    <li data-type="development" data-id="id-1" class="port3">
    				<a href="#" id="development1"><img src="/images/port1.jpg" alt=""></a>
                </li>
    			<li data-type="development" data-id="id-4" class="port3">
				    <a href="#" id="development2"><img src="/images/port4.jpg" alt=""></a>
    			</li>
    			<li data-type="webdesign" data-id="id-2" class="port3">
				    <a href="#" id="webdesign1"><img src="/images/port2.jpg" alt=""></a>
			    </li>
			    <li data-type="webdesign" data-id="id-5" class="port3">
				    <a href="#" id="webdesign2"><img src="/images/port5.jpg" alt=""></a>
			    </li>
			    <li data-type="mobileapps" data-id="id-3" class="port3">
				    <a href="#" id="mobileapps1"><img src="/images/port3.jpg" alt=""></a>
   			    </li>
			    <li data-type="mobileapps" data-id="id-6" class="port3">
				    <a href="#" id="mobileapps2"><img src="/images/port6.jpg" alt=""></a>
			    </li>
			</ul>
		  </div>
		</div>
		</section>

		<div id="location">
			<div class="row prodmap">
				<div id="map-canvas-holder" class="map_holder" style="height: 400px;"></div>
			</div>
		</div>

        @include('layouts.footer')

		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Google Map -->
		<script src="//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true&amp;libraries=places"></script>

		<!-- Portfolio -->
		<script src="js/jquery.quicksand.js"></script>


		<!--Jquery Smooth Scrolling-->
		<script>
			$(document).ready(function(){
				$('.custom-menu a[href^="#"], .intro-scroller .inner-link').on('click',function (e) {
					e.preventDefault();

					var target = this.hash;
					var $target = $(target);

					$('html, body').stop().animate({
						'scrollTop': $target.offset().top
					}, 900, 'swing', function () {
						window.location.hash = target;
					});
				});

				$('a.page-scroll').bind('click', function(event) {
					var $anchor = $(this);
					$('html, body').stop().animate({
						scrollTop: $($anchor.attr('href')).offset().top
					}, 1500, 'easeInOutExpo');
					event.preventDefault();
				});

			   $(".nav a").on("click", function(){
					 $(".nav").find(".active").removeClass("active");
					$(this).parent().addClass("active");
				});

				$('body').append('<div id="toTop" class="btn btn-primary color1"><span class="glyphicon glyphicon-chevron-up"></span></div>');
					$(window).scroll(function () {
						if ($(this).scrollTop() != 0) {
							$('#toTop').fadeIn();
						} else {
							$('#toTop').fadeOut();
						}
					});
				$('#toTop').click(function(){
					$("html, body").animate({ scrollTop: 0 }, 700);
					return false;
				});

			});

		</script>

		<script>
		function gallery(){};

		var $itemsHolder = $('ul.port2');
		var $itemsClone = $itemsHolder.clone();
		var $filterClass = "";
		$('ul.filter li').click(function(e) {
		e.preventDefault();
		$filterClass = $(this).attr('data-value');
			if($filterClass == 'all'){ var $filters = $itemsClone.find('li'); }
			else { var $filters = $itemsClone.find('li[data-type='+ $filterClass +']'); }
			$itemsHolder.quicksand(
			  $filters,
			  { duration: 1000 },
			  gallery
			  );
		});

		$(document).ready(gallery);
		</script>


		<script type="text/javascript">
	$(document).ready(function(){
		inicializemap()

		$('#contactForm').on('submit', function(e){
			e.preventDefault();
			e.stopPropagation();

			// get values from FORM
			var name = $("#name").val();
			var email = $("#email").val();
			var message = $("#message").val();
			var goodToGo = false;
			var messgaeError = 'Request can not be send';
			var pattern = new RegExp(/^(('[\w-\s]+')|([\w-]+(?:\.[\w-]+)*)|('[\w-\s]+')([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);


			 if (name && name.length > 0 && $.trim(name) !='' && message && message.length > 0 && $.trim(message) !='' && email && email.length > 0 && $.trim(email) !='') {
				  if (pattern.test(email)) {
					 goodToGo = true;
				  } else {
					 messgaeError = 'Please check your email address';
					 goodToGo = false;
				  }
			 } else {
			   messgaeError = 'You must fill all the form fields to proceed!';
			   goodToGo = false;
			 }


			if (goodToGo) {
			   $.ajax({
				 data: $('#contactForm').serialize(),
				 beforeSend: function() {
				   $('#success').html('<div class="col-md-12 text-center"><img src="/images/spinner1.gif" alt="spinner" /></div>');
				 },
				 success:function(response){
				   if (response==1) {
					 $('#success').html('<div class="col-md-12 text-center">Your email was sent successfully</div>');
					 window.location.reload();
				   } else {
					 $('#success').html('<div class="col-md-12 text-center">E-mail was not sent. Please try again!</div>');
				   }
				 },
				 error:function(e){
				   $('#success').html('<div class="col-md-12 text-center">We could not fetch the data from the server. Please try again!</div>');
				 },
				 complete: function(done){
				   console.log('Finished');
				 },
				 type: 'POST',
				 url: 'js/send_email.php',
			   });
			   return true;
			} else {
			   $('#success').html('<div class="col-md-12 text-center">'+messgaeError+'</div>');
			   return false;
			}
			return false;
		});
	});

	var map = null;
	 var latitude;
	 var longitude;
	 function inicializemap(){
	   latitude = 36.569693;
	   longitude = 53.060801;

	  var egglabs = new google.maps.LatLng(latitude, longitude);
	  var egglabs1 = new google.maps.LatLng(36.569693, 36.569693);
	  var egglabs2 = new google.maps.LatLng(53.060801, 53.060801 );


	  var image = new google.maps.MarkerImage('/images/marker.png', new google.maps.Size(84,56), new google.maps.Point(0,0), new google.maps.Point(42,56));
	  var mapCoordinates = new google.maps.LatLng(latitude, longitude);
	  var mapOptions = {
	   backgroundColor: '#ffffff',
	   zoom: 12,
	   disableDefaultUI: true,
	   center: mapCoordinates,
	   mapTypeId: google.maps.MapTypeId.ROADMAP,
	   scrollwheel: true,
	   draggable: true,
	   zoomControl: false,
	   disableDoubleClickZoom: true,
	   mapTypeControl: false,
	   styles: [
					{
						"featureType": "all",
						"elementType": "labels.text.fill",
						"stylers": [
							{
								"color": "#1f242f"
							}
						]
					},
					{
						"featureType": "all",
						"elementType": "labels.icon",
						"stylers": [
							{
								"hue": "#ff9d00"
							}
						]
					},
					{
						"featureType": "landscape.man_made",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#fef8ef"
							}
						]
					},
					{
						"featureType": "poi.medical",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"hue": "#ff0000"
							}
						]
					},
					{
						"featureType": "poi.park",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#c9d142"
							},
							{
								"lightness": "0"
							},
							{
								"visibility": "on"
							},
							{
								"weight": "1"
							},
							{
								"gamma": "1.98"
							}
						]
					},
					{
						"featureType": "road",
						"elementType": "geometry",
						"stylers": [
							{
								"weight": "1.00"
							}
						]
					},
					{
						"featureType": "road",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#d7b19c"
							},
							{
								"weight": "1"
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry",
						"stylers": [
							{
								"visibility": "on"
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"weight": "4.03"
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry.stroke",
						"stylers": [
							{
								"visibility": "off"
							},
							{
								"color": "#ffed00"
							}
						]
					},
					{
						"featureType": "road.highway.controlled_access",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"visibility": "on"
							}
						]
					},
					{
						"featureType": "road.arterial",
						"elementType": "geometry",
						"stylers": [
							{
								"visibility": "on"
							}
						]
					},
					{
						"featureType": "road.local",
						"elementType": "geometry",
						"stylers": [
							{
								"visibility": "on"
							}
						]
					},
					{
						"featureType": "transit.line",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#cbcbcb"
							}
						]
					},
					{
						"featureType": "water",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"color": "#0b727f"
							}
						]
					}
				]
					  };

	  map = new google.maps.Map(document.getElementById('map-canvas-holder'),mapOptions);
	  marker = new google.maps.Marker({position: egglabs, raiseOnDrag: false, icon: image, map: map, draggable: false,  title: 'سارو'});
	  marker = new google.maps.Marker({position: egglabs1, raiseOnDrag: false, icon: image, map: map, draggable: false,  title: 'سارو'});
	  marker = new google.maps.Marker({position: egglabs2, raiseOnDrag: false, icon: image, map: map, draggable: false,  title: 'سارو'});
	  google.maps.event.addListener(map, 'zoom_changed', function() {
	   var center = map.getCenter();
	   google.maps.event.trigger(map, 'resize');
	   map.setCenter(center);
	  });
	 }

</script>
</body>
