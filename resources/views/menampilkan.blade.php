<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <title>Edit buku</title>
  <title>Tampilan buku</title>
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
  <h1 class="container display-4">Detail buku</h1>
  <div class="container" style="font-family:Montserrat">
    <table class="table table-dark table-hover">
      <tr>
        <td>Judul buku</td>
        <td>{{ $data->judul_buku }}</td>
      </tr>
      <tr>
        <td>Penulis</td>
        <td>{{ $data->penulis }}</td>
      </tr>
      <tr>
        <td>Jumlah halaman</td>
        <td>{{ $data->halaman }}</td>
      </tr>
      <tr>
        <td>Tahun terbit</td>
        <td>{{ $data->tahun_terbit }}</td>
      </tr>
    </table>
    {{-- <p>Judul buku: {{ $data->judul_buku }}</p>
    <p>Penulis: {{ $data->penulis }}</p>
    <p>Jumlah halaman: {{ $data->halaman }}</p>
    <p>Tahun terbit: {{ $data->tahun_terbit }}</p>
    <a href="{{ route('book.beranda') }}">Kembali ke beranda</a> --}}
  </div>
</body>
</html>