@extends('layouts.appadmin') 
@section('title','DONATUR-KNB')
@section('level_name','Donatur')
@section('content')
<!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-body">
                                <div class="jumbotron">
                                    <h1 align="center">Hai {{ Auth::user()->name }}</h1><br>
                                    <h4 align="center">Disini Kamu bisa mengetahui donasi yang sudah kamu lakukan</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection