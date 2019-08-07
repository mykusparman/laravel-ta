@extends('layouts.app')
@section('title','Ketimbang Ngemis Bandung')

@section('content')

		<div class="jumbotron jumbotron-fluid" style="background-color: #000; color: white;">
			<div class="container">
				<center><h1 class="display-4">Donate</h1>
				<p class="lead">Bantu Para Sosok Mulia ya Sobat KNB !</p></center>
			</div>
		</div>

		<div class="container">
			<div class="col-md-8">
				<h2>Form Donasi</h2>
					<form class="form-horizontal" id="donation" onsubmit="return submitForm();">
						{{ csrf_field() }}
						<input type="hidden" id="id_campaign" name="id_campaign" value="{{ Request::segment(3) }}">
						<input type="hidden" id="id_sokmul" name="id_sokmul" value="{{ $campaign->id_sokmul }}">
						<div class="form-group row">
							<label class="col-sm-2 col-form-label" for="donor_name">Nama</label>
							<div class="col-sm-10">
								<input class="form-control" id="donor_name" name="donor_name" type="text" placeholder="Nama Lengkap" value="@if (!empty(Auth::user()->name))
								{{ Auth::user()->name }}
								@endif" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label" for="donor_email">Email</label>
							<div class="col-sm-10">
								<input class="form-control" id="donor_email" name="donor_email" type="text" placeholder="Email" value="@if (!empty(Auth::user()->email))
								{{ Auth::user()->email }}
								@endif" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label" for="">Jumlah Donasi</label>
							<div class="col-sm-10">
								<input class="form-control" id="amount" name="amount" type="number" placeholder="Rp. " min="1000" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label" for="note">Note (Opsional)</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="note" name="note"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label" for="anonymous">Sembunyikan Nama(Anonymous)</label>
							<div class="col-sm-10">
								<input type="checkbox" id="anonymous" name="anonymous" value="1">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-10 ml-sm-auto">
								<button class="btn btn-info" id="submit">Submit</button>
							</div>
						</div>
					</form>
			</div>
		</div>

@endsection

@push('script')
<script
		src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="{{ !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
    <script>
    function submitForm() {
        // Kirim request ajax
        $.post("{{ route('donation.store') }}",
        {
            _method: 'POST',
            _token: '{{ csrf_token() }}',
            amount: $('input#amount').val(),
            note: $('textarea#note').val(),
            id_sokmul: $('input#id_sokmul').val(),
            id_campaign: $('input#id_campaign').val(),
            donor_name: $('input#donor_name').val(),
            donor_email: $('input#donor_email').val(),
            anonymous: $('input#anonymous').val(),
        },
        function (data, status) {
            snap.pay(data.snap_token, {
                // Optional
                onSuccess: function (result) {
                    location.reload();
                },
                // Optional
                onPending: function (result) {
                    location.reload();
                },
                // Optional
                onError: function (result) {
                    location.reload();
                }
            });
        });
        return false;
    }
    </script>
@endpush

