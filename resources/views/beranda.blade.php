<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Perpustakaan</title>
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
    <div class="container">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Jumlah Halaman</th>
                    <th scope="col">Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->judul_buku }}</td>
                        <td>{{ $data->penulis }}</td>
                        <td>{{ $data->halaman }}</td>
                        <td>{{ $data->tahun_terbit }}</td>
                        <td><form action="{{ route('book.ubah', $data->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-dark">Edit</button>
                        </form></td>
                        <td>
                            <form action="{{ route('book.hapus', $data->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('book.tampil', $data->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-primary">Detail</button>
                            </form>
                        </td>
                        {{-- <td><a href="{{ route('book.tampil', $data->id) }}">Detail</a></td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
        <form action="{{ route('book.add') }}">
            <button type="submit" class="btn btn-success">Tambah buku</button>
        </form>
    </div>
</body>
</html>