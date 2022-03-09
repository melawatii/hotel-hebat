@extends('resepsionis.layout')

@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Data Reservasi</h4>
                    <input type="date" name="" class="mb-3">
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
                                    <td>-</td>
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