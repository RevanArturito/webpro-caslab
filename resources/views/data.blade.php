<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <title>Document</title>
</head>
    <body>
        <div class="px-5 pt-5">
            <h1 class="text-center">DATA TP</h1>
            <div class="pb-3 pt-5">
                <a href="{{ route('form') }}" class="btn btn-primary">Tambah Data</a>
                <a href="{{ route('homepage') }}" class="btn btn-secondary">Kembali</a>
            </div>
            @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Juduk</th>
                        <th scope="col">Sub Judul</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Tanggal Post</th>
                        <th scope="col">Deadline TP</th>
                        <th scope="col">Deskripsi TP</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tps as $data)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $data->judul }}</td>
                            <td>{{ $data->sub_judul }}</td>
                            <td>{{ $data->kategori }}</td>
                            <td>{{ $data->tanggal_post }}</td>
                            <td>{{ $data->deadline_tp }}</td>
                            <td>{{ $data->deskripsi_tp }}</td>
                            <td>
                                <a href="{{ route('data.edit', $data->id) }}" class="btn btn-sm btn-primary me-1">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('data.destroy', $data->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data : {{$data->judul}} ?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
           
        </div>
    </body>
</html>