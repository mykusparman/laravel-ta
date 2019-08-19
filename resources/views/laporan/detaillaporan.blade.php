@extends('layouts.app')
@section('title','Ketimbang Ngemis Bandung')

@section('content')

		<!-- Page Header -->
		<div class="jumbotron jumbotron-fluid" style="background-color: #000; color: white;">
			<div class="container">
				<h1 class="display-4">Distribution</h1>
				<p class="lead">Eksekusi Penyaluran Donasi Kepada Sosok Mulia</p>
			</div>
		</div>
		<!-- /Page Header -->

		<div class="section">
			<div class="container">
				<div class="row">
					<div id="main" class="col-md-9">
						<div class="article causes details">

							<h3 align="center">Penyaluran Bapak {{ $laporan->namanya }}</h3><br>

							<!-- article img -->
							<div class="article-img">
								<img src="{{ url('images/laporan/'. $laporan->gambarnya) }}" alt="">
							</div>
							<!-- article img -->

							<div class="article-content">
								<!-- article title -->
								<h2 class="article-title">{{ $laporan->title_laporan }}</h2>
								<!-- /article title -->

								<!-- article meta -->
								<ul class="article-meta">
									<li>{{ $laporan->date }}</li>
									<li>By Ketimbang Ngemis Bandung</li>
								</ul>
								<ul class="article-meta">
									<li>Data Sosok Mulia :</li>
									<strong><li>{{ $laporan->namanya }}</li></strong>
									<strong><li>{{ $laporan->usia }} Tahun</li></strong>
									<strong><li>{{ $laporan->pekerjaan }}</li></strong>
								</ul>
								<!-- /article meta -->

								<p>{!! $laporan->description_laporan !!}</p>
							</div>
							<!-- /article content -->
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection