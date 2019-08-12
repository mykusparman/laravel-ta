@extends('layouts.appadmin') 
@section('title','Admin-KNB')
@section('level_name','Admin')
@push('style')
    <link href="{{ asset('assetss') }}/vendors/DataTables/datatables.min.css" rel="stylesheet" />
@endpush
@section('content')
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Data Campaign</div>
                    </div>
                    <div class="ibox-body">
                        <table id="example-table" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Cover</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                            $no=1;
                            @endphp
                            @foreach($laporan as $l)
                            <td>{{ $no++ }}</td>
                            <td>{{ $l->title }}</td>
                            <td>{{ $l->description }}</td>
                            <td>{{ $l->date}}</td>
                            <td>{{ $l->gambar }}</td>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection

@push('script')
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{ asset('assetss') }}/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script type="text/javascript">
        $(document).ready( function () {
        $('#example-table').DataTable();
    } );
    </script>

    <script type="text/javascript">
        $('#myModal').on('shown.bs.modal', function () {
          $('#myInput').trigger('focus')
      })
    </script>

@endpush