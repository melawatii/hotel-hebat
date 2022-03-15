<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Hotel Hebat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        button {
            background: linear-gradient(to right, #9cafe5, #74e9d5);
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="/assets/tamu/img/check.png" alt="" class="rounded mx-auto d-block" width="600">
    </div>
    <br>
    <center>
        @if(session()->has('message'))
            <div class="alert alert-success mb-4" role="alert">
                {{ session('message') }}
            </div>
        @endif
    <br>
        <a href="/"><button type="button" class="btn text-light">Keluar</button></a>
    </center>
</body>
</html>