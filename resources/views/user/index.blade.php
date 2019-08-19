@extends('layouts.app')
@section('title','Ketimbang Ngemis Bandung')

@section('content')

	<div id="home-owl" class="owl-carousel owl-theme">
			<!-- home item -->
			<div class="home-item">
				<!-- section background -->
				<div class="section-bg">
					<img src="{{ asset('asset/img/knb1.jpg') }}">
				</div>
				<!-- /section background -->

				<!-- home content -->
				<div class="home">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="home-content">
									<h1 style="color: black">#SayNoToNgemis</h1>
									<p class="lead" style="color: black">Save Them</p>
									{{-- <a href="#" class="primary-button">View Campaign</a> --}}
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
				<div class="section-bg">
					<img src="{{ asset('asset/img/knb3.jpg') }}">
				</div>
				<!-- /Background Image -->

				<!-- home content -->
				<div class="home">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="home-content">
									<h1 style="color: black">Become A Volunteer</h1>
									<p class="lead" style="color: black">Help Others to be Happy Together</p>
									{{-- <a href="#" class="primary-button">Join Us Now!</a> --}}
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

<!-- ABOUT -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-5">
					<div class="section-title">
						<h2 class="title">Ketimbang Ngemis Bandung</h2>
						<p class="sub-title">#SayNoToNgemis</p>
					</div>
					<div class="about-content">
						<p>Ketimbang Ngemis Bandung (KNB) merupakan salah satu Ketimbang Ngemis regional yg ada di Indonesia. KNB berdiri pad 20 Juni 2015, tepatnya 8 hari setelah KN pusat berdiri. KN Pusat sendiri berada di Yogyakarta dan didirikan oleh Rizky, mahasiswa salah satu universitas di Yogyakarta.</p>
						<a href="#" class="primary-button">About Us</a>
					</div>
				</div>
				<!-- /about content -->

				<!-- about video -->
				<div class="col-md-offset-1 col-md-6">
					<a href="#" class="about-video">
							<img src="{{ asset('asset') }}/img/logoknb.png" alt="">
						</a>
				</div>
				<!-- /about video -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->

	<!-- NUMBERS -->
	<div id="numbers" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-smile-o"></i>
						<h3>47k</h3>
						<span>Donors</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-heartbeat"></i>
						<h3>154K</h3>
						<span>Children Saved</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-money"></i>
						<h3>785K</h3>
						<span>Donated</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-handshake-o"></i>
						<h3>357</h3>
						<span>Volunteers</span>
					</div>
				</div>
				<!-- /number -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NUMBERS -->

	<!-- CAUSESS -->
	<div id="causes" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Our Campaign</h2>
						<p class="sub-title">Bantu Para Sosok Mulia Agar Lebih Semangat !</p>
					</div>
				</div>
				<!-- section title -->

				<!-- causes -->
				@foreach($campaign as $c)
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="{{ url('/campaign/detail/'.$c->idnya) }}">
									<img src="{{ url('/images/campaign/'.$c->gambarnya) }}" alt="">
								</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								@php
									$persen= ($c->total_amount/$c->goal)*100;
									$datetime1 = new DateTime($c->date);
									$datetime2 = new DateTime($c->expired);
									$interval = $datetime1->diff($datetime2);
									$days = $interval->format('%a');//now do whatever you like with $days
								@endphp	
								<div style="width: {{ $persen }}%;">
									<span>{{ number_format($persen,2) }}</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Terkumpul: <strong>Rp. {{ number_format($c->total_amount)}}</strong></span>
								<span class="causes-goal">Target: <strong>Rp. {{ number_format($c->goal)}}</strong></span>
							</div>
							<div>
								<span class="causes-raised">Waktu Donasi {{ $days }} Hari Lagi</span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="{{ url('/campaign/detail/'.$c->idnya) }}">{{ $c->title }}</a></h3>
							{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
							<a href="{{ url('/campaign/detail/'.$c->idnya) }}" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				@endforeach
				<!-- /causes -->

				{{-- <!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="single-cause.html">
									<img src="./img/post-2.jpg" alt="">
								</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 53%;">
									<span>53%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="single-cause.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="single-cause.html">
								<img src="./img/post-3.jpg" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 72%;">
									<span>72%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="single-cause.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<div class="clearfix visible-md visible-lg"></div>

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="single-cause.html">
								<img src="./img/post-4.jpg" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 64%;">
									<span>64%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="single-cause.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="single-cause.html">
								<img src="./img/post-5.jpg" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 72%;">
									<span>72%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="single-cause.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="single-cause.html">
								<img src="./img/post-6.jpg" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 53%;">
									<span>53%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="single-cause.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes --> --}}
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CAUSESS -->

	<!-- CTA -->
	{{-- <div id="cta" class="section">
		<!-- background section -->
		<div class="section-bg" style="background-image: url(./img/background-1.jpg);" data-stellar-background-ratio="0.5"></div>
		<!-- /background section -->

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- cta content -->
				<div class="col-md-offset-2 col-md-8">
					<div class="cta-content text-center">
						<h1>Become A Volunteer</h1>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="#" class="primary-button">Join Us Now!</a>
					</div>
				</div>
				<!-- /cta content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div> --}}
	<!-- /CTA -->

	<!-- TESTIMONIAL -->
	{{-- <div id="testimonial" class="section">
		<!-- background section -->
		<div class="section-bg" style="background-image: url(./img/background-2.jpg);" data-stellar-background-ratio="0.5"></div>
		<!-- /background section -->

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- Testimonial owl -->
				<div class="col-md-12">
					<div id="testimonial-owl" class="owl-carousel owl-theme">
						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/avatar-1.jpg" alt="">
								</div>
								<h3>John Doe</h3>
								<span>Volunteer</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/avatar-2.jpg" alt="">
								</div>
								<h3>John Doe</h3>
								<span>Volunteer</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/avatar-1.jpg" alt="">
								</div>
								<h3>John Doe</h3>
								<span>Volunteer</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/avatar-2.jpg" alt="">
								</div>
								<h3>John Doe</h3>
								<span>Volunteer</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->
					</div>
				</div>
				<!-- /Testimonial owl -->
			</div>
			<!-- /Row -->
		</div>
		<!-- /container -->
	</div> --}}
	<!-- /TESTIMONIAL -->

	<!-- BLOG -->
	<div id="blog" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Distribution of Donations</h2>
						<p class="sub-title">Penyaluran Kepada Sosok Mulia</p>
					</div>
				</div>
				<!-- /section title -->

				<!-- blog -->
				@foreach($laporan as $l)
				<div class="col-md-4">
					<div class="article">
						<div class="article-img">
							<a href="single-blog.html">
								<img src="{{ url('/images/laporan/'.$l->gambarnya) }}" alt="">
							</a>
						</div>
						<div class="article-content">
							<h3 class="article-title"><a href="{{ url('laporan/detaillaporan/'.$l->idnya) }}">{{ $l->title_laporan }}</a></h3>
							<ul class="article-meta">
								<li>{{ $l->date }}</li>
								<li>{{ $l->namanya }}</li>
								<li>{{ $l->pekerjaan }}</li>
							</ul>
							<p>{!! substr($l->description_laporan,0,100) !!} ...</p>
						</div>
					</div>
				</div>
				@endforeach
				<!-- /blog -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="article">
						<div class="article-img">
							<a href="single-blog.html">
								<img src="./img/post-2.jpg" alt="">
							</a>
						</div>
						<div class="article-content">
							<h3 class="article-title"><a href="single-blog.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
							<ul class="article-meta">
								<li>12 November 2018</li>
								<li>By John doe</li>
								<li>0 Comments</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<!-- /blog -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="article">
						<div class="article-img">
							<a href="single-blog.html">
								<img src="./img/post-3.jpg" alt="">
							</a>
						</div>
						<div class="article-content">
							<h3 class="article-title"><a href="single-blog.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<ul class="article-meta">
								<li>12 November 2018</li>
								<li>By John doe</li>
								<li>0 Comments</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<!-- /blog -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /BLOG -->
@endsection
