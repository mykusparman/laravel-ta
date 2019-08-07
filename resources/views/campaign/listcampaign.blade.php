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
                                    <th>Goal</th>
                                    <th>Status</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                            $no=1;
                            @endphp
                            @foreach($campaign as $c)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $c->title }}</td>
                                    <td>{!! $c->description !!}</td>
                                    <td>{{ $c->date }}</td>
                                    <td>Rp. {{ number_format($c->goal) }}</td>
                                    <td>{{ $c->status }}</td>
                                    <td><img src="{{ url('/images/campaign/'.$c->gambar) }}" width="250px" height="150px" alt="logo"></td>
                                    <td>
                                    <a href="/campaign/edit/{{ $c->id }}"><button class="btn btn-default"><span class="fa fa-pencil"></span></button>
                                    <a href="{{ url('campaign/hapus',$c->id) }}"><button class="btn btn-default"><span class="fa fa-trash"></span></button>
                                    {{-- <a href="/campaign/ambil/{{ $s->id }}"><button class="btn btn-default"><span class="fa fa-copy"></span> Campaign</button> --}}
                                    </td>
                                </tr>
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