@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Fasilitas Kamar</h4>
                        <form class="forms-sample" method="post" action="{{ route('fasilitasKamar.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="tipe_kamar">Tipe Kamar</label>
                                <input type="text" class="form-control" name="tipe_kamar" id="tipe_kamar" placeholder="Masukan tipe kamar" value="{{ old('tipe_kamar') }}">
                                @error('tipe_kamar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="fasilitas">Fasilitas</label>
                                <input type="text" class="form-control" name="fasilitas" id="fasilitas" placeholder="Masukan fasilitas" value="{{ old('fasilitas') }}">
                                @error('fasilitas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg mr-2">Submit</button>
                            <a class="btn btn-dark btn-lg" href="/fasilitasKamar">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection