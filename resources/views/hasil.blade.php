<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
        * {
            font-family: Poppins, sans-serif;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card" style="width: 21rem;">
            <div class="card-body">
                <p class="card-text">Kompetensi :{{$jurusan['nama']}}</p>
                <p class="card-text">Ketua Kompetensi : {{$jurusan['kajur']}}</p> 
                <p class="card-text">Jumlah Kelas : {{$jurusan['kelas']}}</p> 
            </div>
        </div>
    </div>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>