<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <title>Tabmah buku</title>
</head>
<body>
  <nav class="navbar navbar-dark bg-dark" style="padding:1rem">
    <div class="container-fluid">
        <b>
            <a class="container-fluid navbar-brand" href="{{ route('book.beranda') }}" style="font-family:Montserrat; font-weight:bold">PERPUSTAKAAN MENTOL</a>
        </b>
    </div>
  </nav>
  <br>
  <h1 class="container display-4">Tambah buku</h1>
  <form action="{{ route('book.tambah') }}" method="post">
    @csrf
    <div class="container">
      <div class="ph-24 bl-card has-elevation-1 bl-card--outlined" style="border-radius: 4px;">
        <label for="judul_buku" class="form-label">Judul Buku</label>
        <input class="form-control" type="text" name="judul_buku" placeholder="Dilan 1990" required>
      </div>

      <div class="ph-24 bl-card has-elevation-1 bl-card--outlined" style="border-radius: 4px;">
        <label for="penulis" class="form-label">Penulis</label>
        <input class="form-control" type="text" name="penulis" placeholder="Pidi Baiq" required>
      </div>

      <div class="ph-24 bl-card has-elevation-1 bl-card--outlined" style="border-radius: 4px;">
        <label for="halaman" class="form-label">Jumlah Halaman</label>
        <input class="form-control" type="number" name="halaman" placeholder="255" required>
      </div>

      <div class="ph-24 bl-card has-elevation-1 bl-card--outlined" style="border-radius: 4px;">
        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
        <input class="form-control" type="number" name="tahun_terbit" placeholder="2015" required>
      </div>

      <br>
      <button type="submit" class="btn btn-outline-dark">Submit</button>
    </div>
  </form>
</body>
</html>