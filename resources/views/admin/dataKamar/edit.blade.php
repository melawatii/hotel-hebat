@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Data Kamar</h4>
                        <form class="forms-sample" method="post" action="{{ route('dataKamar.update', $datakamar->id) }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="tipe_kamar">Tipe Kamar</label>
                                <input type="text" class="form-control @error('tipe_kamar') is-invalid @enderror" id="tipe_kamar" placeholder="Edit data kamar" name="tipe_kamar" value="{{ old('tipe_kamar', $datakamar->tipe_kamar) }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_kamar">Jumlah Kamar</label>
                                <input type="number" class="form-control @error('jumlah_kamar') is-invalid @enderror" name="jumlah_kamar" id="jumlah_kamar" placeholder="Edit jumlah kamar" value="{{ old('jumlah_kamar', $datakamar->jumlah_kamar) }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg mr-2">Submit</button>
                            <a class="btn btn-dark btn-lg" href="/dataKamar">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection