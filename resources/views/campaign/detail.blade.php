@extends('layouts.app')
@section('title','Ketimbang Ngemis Bandung')
@section('content')
			<!-- Page Header -->
			<div class="jumbotron jumbotron-fluid" style="background-color: #000; color: white;">
				<div class="container">
					<h1 class="display-4">Donation</h1>
					<p class="lead">Bantu Para Sosok Mulia ya Sobat KNB !</p>
				</div>
			</div>
			<!-- /Page Header -->
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- MAIN -->
					<main id="main" class="col-md-9">
						<!-- article -->
						<div class="article causes-details">
						
							<!-- article img -->
							<div class="article-img">
								<img src="{{ url('images/campaign/'. $campaign->gambarnya) }}" alt="">
							</div>
							<!-- article img -->

							<!-- causes progress -->
							<div class="clearfix">
								<div class="causes-progress">
									<div class="causes-progress-bar">
										<div style="width: {{ $persen }}%;">
											<span>{{ number_format($persen,2) }}%</span>
										</div>
									</div>
									<div>
										<span class="causes-raised">Raised: <strong>Rp. {{ number_format($total->sum('amount')) }}</strong></span>
										<span class="causes-goal">Goal: <strong>Rp. {{ number_format($campaign->goalnya) }}</strong></span>
									</div>
								</div>
								<a href="{{ url('donate/ambil/'.Request::segment(3)) }}" class="primary-button causes-donate">Donate Now</a>
							</div>
							<!-- /causes progress -->

							<!-- article content -->
							<div class="article-content">
								<!-- article title -->
								<h2 class="article-title">{{ $campaign->title }}</h2>
								<!-- /article title -->

								<!-- article meta -->
								<ul class="article-meta">
									<li>{{ $campaign->date }}</li>
									<li>By Ketimbang Ngemis Bandung</li>
								</ul>
								<ul class="article-meta">
									<li>Data Sosok Mulia :</li>
									<strong><li>{{ $campaign->nama }}</li></strong>
									<strong><li>{{ $campaign->usia }} Tahun</li></strong>
									<strong><li>{{ $campaign->pekerjaan }}</li></strong>
								</ul>
								<!-- /article meta -->

								<p>{!! $campaign->description !!}</p>
							</div>
							<!-- /article content -->

							{{-- <!-- article tags share -->
							<div class="article-tags-share">
								<!-- article tags -->
								<ul class="tags">
									<li>TAGS:</li>
									<li><a href="#">Charity</a></li>
									<li><a href="#">Health</a></li>
									<li><a href="#">Donation</a></li>
								</ul>
								<!-- /article tags -->

								<!-- article share -->
								<ul class="share">
									<li>SHARE:</li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
								<!-- /article share -->
							</div>
							<!-- /article tags share --> --}}

							<!-- article reply form -->
							{{-- DIHAPUS --}}
							<!-- /article reply form -->
						</div>
						<!-- /article -->
					</main>
					<!-- /MAIN -->

					<!-- ASIDE -->
					<aside id="aside" class="col-md-3">
						{{-- <!-- posts widget -->
						<div class="widget">
							<h3 class="widget-title">Latest Posts</h3>
							<!-- single post -->
							<div class="widget-post">
								<a href="#">
									<div class="widget-img">
										<img src="./img/widget-1.jpg" alt="">
									</div>
									<div class="widget-content">
										Possit nostro aeterno eu vis, ut cum quem reque
									</div>
								</a>
								<ul class="article-meta">
									<li>By John doe</li>
									<li>12 November 2018</li>
								</ul>
							</div>
							<!-- /single post -->

							<!-- single post -->
							<div class="widget-post">
								<a href="#">
									<div class="widget-img">
										<img src="./img/widget-2.jpg" alt="">
									</div>
									<div class="widget-content">
										Vix fuisset tibique facilisis cu. Justo accusata ius at
									</div>
								</a>
								<ul class="article-meta">
									<li>By John doe</li>
									<li>12 November 2018</li>
								</ul>
							</div>
							<!-- /single post -->

							<!-- single post -->
							<div class="widget-post">
								<a href="#">
									<div class="widget-img">
										<img src="./img/widget-3.jpg" alt="">
									</div>
									<div class="widget-content">
										Possit nostro aeterno eu vis, ut cum quem reque
									</div>
								</a>
								<ul class="article-meta">
									<li>By John doe</li>
									<li>12 November 2018</li>
								</ul>
							</div>
							<!-- /single post -->
						</div>
						<!-- /posts widget --> --}}

						<!-- causes widget -->
						<div class="widget">
							{{-- <h3 class="widget-title">Latest Causes</h3> --}}

							<!-- single causes -->
							{{-- <div class="widget-causes">
								<a href="#">
									<div class="widget-img">
										<img src="./img/widget-1.jpg" alt="">
									</div>
									<div class="widget-content">
										Possit nostro aeterno eu vis, ut cum quem reque
										<div class="causes-progress">
											<div class="causes-progress-bar">
												<div style="width: 64%;"></div>
											</div>
										</div>
									</div>
								</a>
								<div>
									<span class="causes-raised">Raised: <strong>52.000$</strong></span> -
									<span class="causes-goal">Goal: <strong>90.000$</strong></span>
								</div>
							</div> --}}
							<!-- /single causes -->

							<!-- single causes -->
							{{-- <div class="widget-causes">
								<a href="#">
									<div class="widget-img">
										<img src="./img/widget-2.jpg" alt="">
									</div>
									<div class="widget-content">
										Vix fuisset tibique facilisis cu. Justo accusata ius at
										<div class="causes-progress">
											<div class="causes-progress-bar">
												<div style="width: 75%;"></div>
											</div>
										</div>
									</div>
								</a>
								<div>
									<span class="causes-raised">Raised: <strong>52.000$</strong></span> -
									<span class="causes-goal">Goal: <strong>90.000$</strong></span>
								</div>
							</div> --}}
							<!-- /single causes -->

							<!-- single causes -->
							{{-- <div class="widget-causes">
								<a href="#">
									<div class="widget-img">
										<img src="./img/widget-3.jpg" alt="">
									</div>
									<div class="widget-content">
										Possit nostro aeterno eu vis, ut cum quem reque
										<div class="causes-progress">
											<div class="causes-progress-bar">
												<div style="width: 53%;"></div>
											</div>
										</div>
									</div>
								</a>
								<div>
									<span class="causes-raised">Raised: <strong>52.000$</strong></span> -
									<span class="causes-goal">Goal: <strong>90.000$</strong></span>
								</div>
							</div><br> --}}
							<!-- /single causes -->

							<!-- Donatur widget -->
							<div class="widget">
								<h3 class="widget-title">Donatur</h3>
								<div class="widget-category">
									<ul class="list-group">
										 @foreach($donation as $d)
										 <li class="list-group-item">
										 	<div class="media-left">
										 		<img src="{{ asset('asset') }}/img/logouser.png" height="50px" width="50px">
										 	</div>
										 	<div class="media-body">
										 		<h4 class="media-heading">Rp. {{ number_format($d->amount) }}</h4>
										 		<strong><span class="btn-block recent-donation-amount font-default">
										 			@if($d->anonymous == '0')
										 			{{ $d->donor_name }}
										 			@endif
										 			@if($d->anonymous == '1')
										 			Anonymous
										 			@endif
										 		</span></strong>
										 		<p class="margin-bottom-5">{{ $d->note }}</p>
										 	</div>
										 </li>
										 @endforeach
									</ul>
								</div>
							</div>
							<!-- /category widget -->
						</div>
						<!-- causes widget -->
					</aside>
					<!-- /ASIDE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

@endsection