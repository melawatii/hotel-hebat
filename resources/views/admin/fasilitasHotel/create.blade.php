@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Fasilitas Hotel</h4>
                        <form class="forms-sample" method="post" action="{{ route('fasilitasHotel.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama_fasilitas">Nama Fasilitas</label>
                                <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror" name="nama_fasilitas" id="nama_fasilitas" placeholder="Masukan fasilitas" value="{{ old('nama_fasilitas') }}" required autofocus>
                                @error('nama_fasilitas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Post Image</label>
                                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" required>
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" rows="4" placeholder="Masukan keterangan" value="{{ old('keterangan') }}" required></textarea>
                                @error('keterangan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg mr-2">Submit</button>
                            <a class="btn btn-dark btn-lg" href="/fasilitasHotel">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection