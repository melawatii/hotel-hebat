@extends('resepsionis.layout')

@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Data Reservasi</h4>
                    <form action="" method="get">
                        <div class="row justify-content-md-center mb-4">
                            <div class="col col-lg-2">
                                <input type="date" class="form-control" name="fromdate">
                            </div>
                            <div class="col-md-auto">
                                <button type="button" class="btn btn-warning">&nbsp;<i class="mdi mdi-filter"></i></button>
                            </div>
                            <div class="col col-lg-2">
                                <input type="date" class="form-control" name="todate">
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> No. </th>
                                    <th> Nama Tamu </th>
                                    <th> Check In </th>
                                    <th> Check Out </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dataReservasi as $row)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $row->nama_tamu }} </td>
                                    <td> {{ $row->tgl_check_in }} </td>
                                    <td> {{ $row->tgl_check_out }} </td>
                                    <td>
                                        <div class="badge badge-outline-success">Check In</div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection