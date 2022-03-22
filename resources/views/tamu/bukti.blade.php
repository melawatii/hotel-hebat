<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>Cetak Reservasi - Hotel Hebat</title>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <a href="/" class="text-light text-decoration-none">
                        <button type="button" class="btn btn-success mb-5 text-light"><i class="fa-solid fa-right-from-bracket"></i></button>
                    </a>
                    @if(session()->has('message'))
                        <div class="alert alert-success mb-5" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    @foreach ($posts as $post)
                    <h5 class="text-center mb-5">BUKTI RESERVASI HOTEL HEBAT</h5>
                    <table class="table">
                            <tr>
                                <th scope="col">Nama Tamu</th>
                                <td>:</td>
                                <td>{{ $post->nama_tamu }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Email</th>
                                <td>:</td>
                                <td>{{ $post->email }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Tipe Kamar</th>
                                <td>:</td>
                                <td>{{ $post->tipe_kamar }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Jumlah Kamar</th>
                                <td>:</td>
                                <td>{{ $post->jumlah_kamar }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Tgl Check In</th>
                                <td>:</td>
                                <td>{{ $post->tgl_check_in }}</td>
                            </tr>
                                <th scope="col">Tgl Check Out</th>
                                <td>:</td>
                                <td>{{ $post->tgl_check_out }}</td>
                            </tr>
                    </table>
                    <h6 class="text-right mt-5">Simpan bukti reservasi untuk diserahkan resepsionis pada saat check-in!</h6>
                    @endforeach
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script>window.print()</script>

    </body>
</html>