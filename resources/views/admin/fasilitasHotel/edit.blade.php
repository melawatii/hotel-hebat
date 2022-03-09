@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Fasilitas Hotel</h4>
                        <form class="forms-sample" method="post" action="{{ route('fasilitasHotel.update', $fasilitashotel->id) }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="nama_fasilitas">Nama Fasilitas</label>
                                <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror" id="nama_fasilitas" placeholder="Edit fasilitas" name="nama_fasilitas" value="{{ old('nama_fasilitas', $fasilitashotel->nama_fasilitas) }}" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Post Image</label>
                                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea rows="4" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="Edit keterangan" name="keterangan" value="{{ old('keterangan', $fasilitashotel->keterangan) }}" required></textarea>
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