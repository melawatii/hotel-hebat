@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Fasilitas Kamar</h4>
                        <form class="forms-sample" method="post" action="{{ route('fasilitasKamar.update', $fasilitaskamar->id) }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="tipe_kamar">Tipe Kamar</label>
                                <input type="text" class="form-control @error('tipe_kamar') is-invalid @enderror" id="tipe_kamar" placeholder="Edit tipe kamar" name="tipe_kamar" value="{{ old('tipe_kamar', $fasilitaskamar->tipe_kamar) }}">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_kamar">Fasilitas</label>
                                <input type="text" class="form-control @error('fasilitas') is-invalid @enderror" id="fasilitas" placeholder="Edit fasilitas" name="fasilitas" value="{{ old('fasilitas', $fasilitaskamar->fasilitas) }}">
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