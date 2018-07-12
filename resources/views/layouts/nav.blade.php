		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #05112e;">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ route('index') }}"><img src="/images/sarooLogo.png" alt="company logo" style="width: 150px; height: 50px;"/></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right custom-menu">
						<li class="active"><a href="{{ route('index') }}">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#services">Services</a></li>
						<li><a href="#meet-team">Team</a></li>
						<li><a href="#portfolio1">Portofolio</a></li>
						<li><a href="#contact">Contact</a></li>
						<li><a href="{{ route('posts') }}">Blog</a></li>
						<li><a href="{{ route('singlePost') }}">Single</a></li>
					</ul>
				</div>
			</div>
		</nav>
