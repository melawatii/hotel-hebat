<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Pesan Reservasi - Hotel Hebat</title>

	<!-- Google font -->
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="assets/tamu/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="assets/tamu/css/style.css" />

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg"></div>
						<form method="post" action="{{ route('pesanReservasi.store') }}">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Nama Tamu</span>
										<input class="form-control" type="text" required placeholder="Input nama" name="nama_tamu" value="{{ old('nama_tamu') }}" autofocus>
										@error('nama_tamu')
											<div class="invalid-feedback">
												{{ $message }}
											</div>
										@enderror
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" required placeholder="Input email" name="email" value="{{ old('email') }}">
										@error('email')
											<div class="invalid-feedback">
												{{ $message }}
											</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">No . HP</span>
										<input class="form-control" type="text" required placeholder="Input No.HP" name="no_hp" value="{{ old('no_hp') }}">
										@error('no_hp')
											<div class="invalid-feedback">
												{{ $message }}
											</div>
										@enderror
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Jumlah Kamar</span>
										<input class="form-control" type="number" required placeholder="Input jumlah kamar" name="jumlah_kamar" value="{{ old('jumlah_kamar') }}">
										@error('jumlah_kamar')
											<div class="invalid-feedback">
												{{ $message }}
											</div>
										@enderror
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Tipe Kamar</span>
								<select class="form-control" name="tipe_kamar" required value="{{ old('tipe_kamar') }}">
									@foreach($dataKamar as $row)
										<option value="{{$row->tipe_kamar}}">{{$row->tipe_kamar}}</option>
									@endforeach
								</select>
								@error('tipe_kamar')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check In</span>
										<input class="form-control" type="date" required name="tgl_check_in">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check Out</span>
										<input class="form-control" type="date" required name="tgl_check_out">
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">PESAN</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>