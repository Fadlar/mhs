<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Mahasiswa</title>
    <link rel="stylesheet" href="/bootstrap.min.css">
</head>

<body class="min-vh-100">
    <div class="d-flex justify-content-center mt-5">
        <div class="card w-75">
            <div class="card-header d-flex justify-content-between align-items-center">
                List Calon Mahasiswa
                <a href="/" class="btn btn-primary btn-sm">Daftar</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswa as $mhs)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mhs->nim }}</td>
                                <td>{{ $mhs->nama }}</td>
                                <td>{{ $mhs->email }}</td>
                                <td class="text-capitalize">{{ $mhs->jk }}</td>
                                <td>{{ $mhs->jurusan }}</td>
                                <td>{{ $mhs->alamat }}</td>
                                <td class="text-center">
                                    <form action="/{{ $mhs->id }}" class="inline" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">
                                    Data tidak ada.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
