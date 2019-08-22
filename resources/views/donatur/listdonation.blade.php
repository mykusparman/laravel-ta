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
                        <div class="ibox-title">Data Donasi Kamu</div>
                    </div>
                    <div class="ibox-body">
                        <table id="example-table" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Penyumbang</th>
                                    <th>Email</th>
                                    <th>Tanggal</th>
                                    <th>Jumlah</th>
                                    <th>Note</th>
                                    <th>Status Transaksi</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                            @php
                            $no=1;
                            @endphp
                            @foreach($donation as $d)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $d->donor_name }}</td>
                                    <td>{{ $d->donor_email }}</td>
                                    <td>{{ $d->created_at }}</td>
                                    <td>Rp. {{ number_format($d->amount) }}</td>
                                    <td>{{ $d->note }}</td>
                                    <td>{{ $d->status }}</td>
                                    {{-- <td>
                                    <a href="/sokmul/edit/{{ $d->id }}"><button class="btn btn-default"><span class="fa fa-pencil"></span></button>
                                    <a href="{{ url('sokmul/hapus',$d->id) }}"><button class="btn btn-default"><span class="fa fa-trash"></span></button>
                                    </td> --}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
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