@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Fasilitas Hotel</h4>
                    <div class="d-flex flex-row-reverse">
                        <a class="btn btn-success btn-lg mt-0 mb-3" href="/fasilitasHotel/create"><i class="mdi mdi-library-plus"></i> Add New</a>
                    </div>
                    @if(session()->has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered" style="table-layout: fixed; width: 100%">
                            <thead>
                                <tr>
                                    <th> No. </th>
                                    <th> Nama Fasilitas </th>
                                    <th> Keterangan </th>
                                    <th> Image </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fasilitasHotel as $row)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $row->nama_fasilitas }} </td>
                                    <td> {{ $row->keterangan }} </td>
                                    <td> <img src="{{ asset('storage/' . $row->image) }}" alt="Fasilitas Hotel" style="border-radius: 0; width: 150px; height: 90px;"> </td>
                                    <td>
                                        <button class="badge bg-info border-0"><a href="{{ route('fasilitasHotel.edit',$row->id) }}"><i class="mdi mdi-pencil"></i></a></button>
                                        &nbsp;
                                        <form action="{{ route('fasilitasHotel.destroy',$row->id) }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0" onclick="return confirm('Apakah Anda yakin?')"><i class="mdi mdi-popcorn"></i></button>
                                        </form>
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