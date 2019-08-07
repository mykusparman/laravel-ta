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
                        <div class="ibox-title">Data Sokmul</div>
                    </div>
                    <div class="ibox-body">
                        <table id="example-table" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Campaign</th>
                                    <th>Donor Name</th>
                                    <th>Donor Email</th>
                                    <th>Jumlah</th>
                                    <th>Note</th>
                                    <th>Status</th>
                                    <th>Update</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                            @php
                            $no=1;
                            @endphp
                            @foreach($donation as $d)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $d->title }}</td>
                                    <td>{{ $d->donor_name }}</td>
                                    <td>{{ $d->donor_email }}</td>
                                    <td>Rp. {{ number_format($d->amount) }}</td>
                                    <td>{{ $d->note }}</td>
                                    <td>{{ $d->statusdonation }}</td>
                                    <td>
                                    @if($d->statusdonation == 'pending')
                                    <a href="{{ url('donation/updatestatus/'.$d->iddonation) }}"><button class="btn btn-default">Success</button>
                                    @endif
                                    </td>
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