<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <title>Document</title>
    <style>
        .primary-blue {
            color: #013179;
        }
        .primary-yellow {
            background-color: #F8CD16;
        }
        .card-item {
            position: relative;  
            transition: all 0.3s ease;
            border: 1px solid transparent;
            filter: brightness(80%);
        }
        .card-item:hover {
            transform: translateX(20px);
            z-index: 1;  
            border: 1px solid #7D944D;
            filter: brightness(100%);
        }

  
    </style>
</head>
    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom border-body fixed-top bg-dark"  data-bs-theme="dark">
        <div class="container-fluid d-flex" >
            <a class="navbar-brand" href="#">IFLAB</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('data') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('data') }}">Data TP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('data') }}">Data TP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('data') }}">Rekruitasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('data') }}">About Us</a>
                    </li>
                </ul>
            </div>
            
        </div>
    </nav> 
<body>
    <br>
    <br> 
    <div class="container" style="height: 30rem;background-color:#013179">
        <h1 class="text-white text-center">tdinya mau gambar</h1>
    </div>
    <h1 class="text-center pt-5">SEMANGAT PAGI KATA BANG YANTO</h1>
    <div class="container-fluid d-flex flex-row mt-5">
        <div class="card card-item mx-5" style="width: 18rem;background-color:#013179">
            <div class="card-body primary-blue">
                <div class="d-flex flex-row justify-content-between">
                    <h5 class="text-white">LIAT TP</h5>
                    <i class="bi bi-arrow-right" style="color:white"></i>
                </div>
            </div>
        </div>
        <div class="card card-item mx-5" style="width: 18rem;background-color:#013179">
            <div class="card-body primary-blue">
                <div class="d-flex flex-row justify-content-between">
                    <h5 class="text-white">Rekruitasi Aslab</h5>
                    <i class="bi bi-arrow-right" style="color:white"></i>
                </div>
            </div>
        </div>
        <div class="card card-item mx-5" style="width: 18rem;background-color:#013179">
            <div class="card-body primary-blue">
                <div class="d-flex flex-row justify-content-between">
                    <h5 class="text-white">Info Susulan</h5>
                    <i class="bi bi-arrow-right" style="color:white"></i>
                </div>
            </div>
        </div>
    </div>
</body>
</html>