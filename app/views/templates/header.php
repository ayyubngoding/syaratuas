<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman<?= $data['judul'] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
  <a class="navbar-brand" href="<?= BASEURL ?>">Php Mvc</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= BASEURL ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= BASEURL ?>/about">About</a>
      <a class="nav-item nav-link" href="<?= BASEURL ?>/mahasiswa">Mahasiswa</a>
      <a class="nav-item nav-link" href="<?= BASEURL ?>/barang">Barang</a>
      <a class="nav-item nav-link" href="<?= BASEURL ?>/kategori">Kategori</a>
    </div>
  </div>
  </div>
</nav>
    
</head>
<body>