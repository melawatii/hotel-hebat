@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Data Kamar</h4>
                        <form class="forms-sample" method="post" action="{{ route('dataKamar.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="tipe_kamar">Tipe Kamar</label>
                                <input type="text" class="form-control" name="tipe_kamar" id="tipe_kamar" placeholder="Masukan tipe kamar" value="{{ old('tipe_kamar') }}" required autofocus>
                                @error('tipe_kamar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jumlah_kamar">Jumlah Kamar</label>
                                <input type="number" class="form-control" name="jumlah_kamar" id="jumlah_kamar" placeholder="Masukan jumlah kamar" value="{{ old('jumlah_kamar') }}" required>
                                @error('jumlah_kamar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
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