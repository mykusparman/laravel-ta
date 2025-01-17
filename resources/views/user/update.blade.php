@extends('layouts.appadmin') 
@section('title','Admin-KNB')
@section('level_name','Admin')
@section('content')
                <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Edit user Form</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal" method="post" action="{{ url('/user/update',$user->id)  }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="name" type="text" value="{{ $user->name }}">
                                            @if ($errors->has('name'))
                                            <div class="error">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="email" type="text" value="{{ $user->email }}">
                                            @if ($errors->has('email'))
                                            <div class="error">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                   <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Role</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="role" required>
                                            	<option value="admin">admin</option>
                                            	<option value="bendahara">bendahara</option>
                                            	<option value="donatur">donatur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
@endsection