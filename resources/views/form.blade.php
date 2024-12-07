<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
    <body>
        <form action="{{ route('data.store') }}" method="POST">
            @csrf
            <h1 class="text-center pt-5">ISI DATA TP</h1>
            <div class="px-5 pt-5">
                <div class="shadow p-3 mb-5 bg-body-tertiary rounded border">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" id="inputJudul" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" id="inputSubJudul" name="sub_judul" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="inputKategori" name="kategori" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Post</label>
                        <input type="text" class="form-control" id="inputTanggal" name="tanggal_post" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deadline TP</label>
                        <input type="text" class="form-control" id="inputDeadline" name="deadline_tp" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi TP</label>
                        <input type="text" class="form-control" id="inputDeskripsi" name="deskripsi_tp" required>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('data') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </form>
    </body>
    <!-- <script>
    function addMataKuliah() {
        const input = document.getElementById('newMataKuliah');
        const container = document.getElementById('mataKuliahContainer');
        const hiddenInput = document.getElementById('mataKuliahInput');

        if (input.value.trim() === '') return;

        const badge = document.createElement('span');
        badge.className = 'badge bg-primary me-2 mb-2';
        badge.innerHTML = `${input.value} <button type="button" class="btn-close btn-close-white" onclick="removeMataKuliah(this)"></button>`;

        container.appendChild(badge);
        input.value = '';       
        updateMataKuliahInput();
    }

    function removeMataKuliah(closeBtn) {
        const badge = closeBtn.parentElement;
        badge.remove();
        updateMataKuliahInput();
    }

    function updateMataKuliahInput() {
        const container = document.getElementById('mataKuliahContainer');
        const hiddenInput = document.getElementById('mataKuliahInput');
        
        const mataKuliah = Array.from(container.children)
            .map(badge => badge.textContent.trim().replace('×', ''));
        
        hiddenInput.value = JSON.stringify(mataKuliah);
    }
    </script> -->
</html>