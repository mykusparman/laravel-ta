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
                                    <th>Name</th>
                                    <th>Usia</th>
                                    <th>Alamat</th>
                                    <th>Pekerjaan</th>
                                    <th>Goal</th>
                                    <th>Catatan</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                            $no=1;
                            @endphp
                            @foreach($sokmul as $s)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->usia }}</td>
                                    <td>{{ $s->alamat }}</td>
                                    <td>{{ $s->pekerjaan }}</td>
                                    <td>{{ number_format($s->goal) }}</td>
                                    <td>{{ $s->catatan }}</td>
                                    <td><img src="{{ url('/images/sokmul/'.$s->gambar) }}" width="250px" height="150px" alt="logo"></td>
                                    <td>
                                    <a href="/sokmul/edit/{{ $s->id }}"><button class="btn btn-default"><span class="fa fa-pencil"></span></button>
                                    <a href="{{ url('sokmul/hapus',$s->id) }}"><button class="btn btn-default"><span class="fa fa-trash"></span></button>
                                    {{-- <a href="/campaign/ambil/{{ $s->id }}"><button class="btn btn-default"><span class="fa fa-copy"></span> Campaign</button> --}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Input Sokmul
                </button>
                {{-- MODAL INPUT --}}
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Input User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                      <div class="modal-body">
                        <form class="form-horizontal" method="post" action="/sokmul/simpan" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="nama" type="text" placeholder="Nama Sokmul">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Usia</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="usia" type="text" placeholder="Usia Sokmul">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="alamat" type="text" placeholder="Alamat Sokmul">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="pekerjaan" type="text" placeholder="Pekerjaan Sokmul">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Goal</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="goal" type="number" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Catatan Syarat Kelayakan</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="catatan"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Gambar</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="gambar" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" na type="submit">Submit</button>
                                        </div>
                                    </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
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