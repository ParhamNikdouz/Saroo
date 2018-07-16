		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #F7F7F7;">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ route('home') }}"><img src="/images/sarooLogo.png" alt="company logo" style="width: 150px; height: 50px;"/></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right custom-menu">
						<li class="active"><a href="{{ route('home') }}">خانه</a></li>
						<li><a href="#">یو پی اس</a></li>
						<li><a href="#">هوشمند سازی</a></li>
						<li><a href="#">دوره‌های آموزشی</a></li>
						<li><a href="#">محصولات</a></li>
						<li><a href="{{ route('singlePost') }}">Single</a></li>
						<li><a href="{{-- route('login') --}}#about">ورود</a></li>
						<li><a href="{{-- route('signup') --}}#contact">ثبت نام</a></li>
					</ul>
				</div>
			</div>
		</nav>
