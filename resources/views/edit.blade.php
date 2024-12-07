<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Data TP</title>
</head>
<body>
    <form action="{{ route('data.update', $tps->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h1 class="text-center pt-5">EDIT DATA</h1>
        <div class="px-5 pt-5">
            <div class="shadow p-3 mb-5 bg-body-tertiary rounded border">
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{ $tps->judul }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Sub Judul</label>
                    <input type="text" class="form-control" name="sub_judul" value="{{ $tps->sub_judul }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <input type="text" class="form-control" name="kategori" value="{{ $tps->kategori }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Post</label>
                    <input type="text" class="form-control" name="tanggal_post" value="{{ $tps->tanggal_post }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deadline TP</label>
                    <input type="text" class="form-control" name="deadline_tp" value="{{ $tps->deadline_tp }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi TP</label>
                    <input type="text" class="form-control" name="deskripsi_tp" value="{{ $tps->deskripsi_tp }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('data') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </form>
</body>
</html>