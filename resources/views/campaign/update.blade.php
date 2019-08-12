@extends('layouts.appadmin') 
@section('title','Admin-KNB')
@section('level_name','Admin')
@section('content')
                <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Input Campaign Form</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal" method="post" action="{{ url('campaign/update/'.$campaign->id) }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="title" type="text" value="{{ $campaign->title }}">
                                            @if ($errors->has('title'))
                                            <div class="error">{{ $errors->first('title') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Goal</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="goal" type="number" value="{{ $campaign->goal }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Date</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="date" type="date" value="{{ date('Y-m-d') }}" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Expired</label>
                                        <div class="col-sm-10">
                                            <input class="{{ $errors->has('expired') ? 'help-block error form-control' : 'form-control'  }}" name="expired" type="date" value="{{ $campaign->expired }}">
                                            @if ($errors->has('expired'))
                                            <div class="help-block error">{{ $errors->first('expired') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Gambar</label>
                                        <div class="col-sm-10">
                                            <img src="{{ asset('images/campaign/'.$campaign->gambar) }}" height="300" width="300">
                                            <input class="form-control" name="gambar" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea id="summernote" name="description">{!! $campaign->description !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" na type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection

@push('script')
<script type="text/javascript">
$(document).ready(function() {
  $('#summernote').summernote();
}); 
</script>
@endpush