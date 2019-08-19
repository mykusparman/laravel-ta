@extends('layouts.app')
@section('title','Ketimbang Ngemis Bandung')

@section('content')

		<div class="jumbotron jumbotron-fluid" style="background-color: #000; color: white;">
			<div class="container">
				<center><h1 class="display-4">Distribution of Donations</h1>
				<p class="lead">Kegiatan Eksikusi Kepada Sosok Mulia nih Sobat KNB !</p></center>
			</div>
		</div>
		<h2 align="center">Halo #OrangBaik Baca Yuk Kisah Mereka</h2>

		<div class="container">
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
							<p>{!! substr($l->description_laporan,0,100) !!}</p>
						</div>
					</div>
				</div>
				@endforeach
		</div>

@endsection