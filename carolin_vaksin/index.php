<?php
include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-
scale=1.0">

    <title>Vaksin | PeduliLindungi</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
</head>

<body>
                <button class="navbar-toggler" type="button" data-bs- toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria- controls="navbarSupportedContent"
                    aria-expanded="false" aria- label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container">
                        <a class="navbar-brand" href="#">Peduli Lindungi</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pasien.php">Data</a>
                                </li>
                                <li class="nav-item dropdown">
                                    
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
                <div class="card" style="width: 15rem;">
  <img src="img/PeduliLindungi.webp" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Peduli Lindungi</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>