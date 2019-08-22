@extends('layouts.appadmin') 
@section('title','Admin-KNB')
@section('level_name','Admin')
@section('content')
<!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{ $users->count() }}</h2>
                                <div class="m-b-5">USERS</div><i class="fa fa-user widget-stat-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{ $sokmul->count() }}</h2>
                                <div class="m-b-5">SOKMUL</div><i class="fa fa-users widget-stat-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{ $campaign->count() }}</h2>
                                <div class="m-b-5">CAMPAIGN</div><i class="fa fa-cube widget-stat-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">{{ $donation->count() }}</h2>
                                <div class="m-b-5">DONATION</div><i class="fa fa-money widget-stat-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-body">
                                <div class="jumbotron">
                                    <h1 align="center">Hai {{ Auth::user()->name }}</h1><br>
                                    <h4>Disini Kamu bisa melakukan pengelolaan data tentang Sokmul dan Kampanye</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection