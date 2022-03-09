<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Hotel Hebat</title>
</head>
<body>
    @if(session()->has('message'))
		<div class="alert alert-success" role="alert" style="color: green; font-size: 2em;">
			{{ session('message') }}
		</div>
	@endif
    tinggal di cetakkkkkkkkkkkkkkkkkkkkkkkkkk
    <br>
    <a href="/">keluar</a>
</body>
</html>