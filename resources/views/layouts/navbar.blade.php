<header id="home">
		<!-- NAVGATION -->
		<nav id="main-navbar">
			<div class="container">
				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="/"><img src="{{ asset('asset') }}/img/logoknb.png" alt="logo"></a>
					</div>
					<!-- Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle-btn">
							<i class="fa fa-bars"></i>
						</button>
					<!-- Mobile toggle -->

					<!-- Mobile Search toggle -->
					{{-- <button class="search-toggle-btn">
							<i class="fa fa-search"></i>
						</button> --}}
					<!-- Mobile Search toggle -->
				</div>

				<!-- Search -->
				{{-- <div class="navbar-search">
					<button class="search-btn"><i class="fa fa-search"></i></button>
					<div class="search-form">
						<form>
							<input class="input" type="text" name="search" placeholder="Search">
						</form>
					</div>
				</div> --}}
				<!-- Search -->

				<!-- Nav menu -->
				<ul class="navbar-menu nav navbar-nav navbar-right">
					<li><a href="/">Home</a></li>
					<li><a href="#">About</a></li>
					<li class="has-dropdown"><a href="#">Campaign</a>
						<ul class="dropdown">
							<li><a href="single-cause.html">Sosok Mulia Campaign</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#">Events</a>
						<ul class="dropdown">
							<li><a href="single-event.html">Single event</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#">Blog</a>
						<ul class="dropdown">
							<li><a href="blog.html">Blog Page</a></li>
							<li><a href="single-blog.html">Single Blog</a></li>
						</ul>
					</li>
					@if (Auth::check())
                    <li class="has-dropdown">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            {{-- <img src="./assets/img/admin-avatar.png" /> --}}
                            <span>Hai {{ Auth::user()->name }} !</span></a>
                        <ul class="dropdown">
                            <li><a href="{{ url('/donatur/dashboard') }}"><i class="fa fa-home"></i>Dashboard</a></li>
                            <li><a href="{{ route('logout') }}" 
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>Logout</a>
                        	</li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                         </ul>
                    </li>
                    @else
                    	<li class="has-dropdown"><a href="#">Join</a>
						<ul class="dropdown">
							<li><a href="{{ route('login') }}">Login</a></li>
							<li><a href="{{ route('register') }}">Register</a></li>
						</ul>
					</li>
                    @endif
				</ul>
				<!-- Nav menu -->
			</div>
		</nav>
		<!-- /NAVGATION -->

		<!-- HOME OWL -->
		
		<div id="home-owl" class="owl-carousel owl-theme">
			<!-- home item -->
			<div class="home-item">
				<!-- section background -->
				<div class="section-bg" style="background-image: url({{ asset('asset') }}/img/knb1.jpg);"></div>
				<!-- /section background -->

				<!-- home content -->
				<div class="home">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="home-content">
									<h1>#SayNoToNgemis</h1>
									<p class="lead">Save Them</p>
									<a href="#" class="primary-button">View Campaign</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /home content -->
			</div>
			<!-- /home item -->

			<!-- home item -->
			<div class="home-item">
				<!-- Background Image -->
				<div class="section-bg" style="background-image: url({{ asset('asset') }}/img/logoknb2.png);"></div>
				<!-- /Background Image -->

				<!-- home content -->
				<div class="home">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="home-content">
									<h1>Become A Volunteer</h1>
									<p class="lead">Help Others to be Happy Together</p>
									<a href="#" class="primary-button">Join Us Now!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /home content -->
			</div>
			<!-- /home item -->
		</div>
		<!-- /HOME OWL -->
	</header>
	<!-- /HEADER -->
