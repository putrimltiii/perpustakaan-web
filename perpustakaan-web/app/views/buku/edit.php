<?php if (!isset($buku)) exit; ?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Buku</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    min-height: 100vh;
    background: linear-gradient(135deg, #2b2540, #3a2f5f, #2a2438);
    font-family: 'Segoe UI', sans-serif;
    color: #e9e7f3;
}

.card-edit {
    max-width: 820px;
    margin: 40px auto;
    padding: 30px;
    border-radius: 22px;
    background: linear-gradient(180deg, #3a3160, #2e2946);
    box-shadow: 0 25px 60px rgba(0,0,0,.45);
}

.card-edit h4 {
    color: #d8ceff;
    font-weight: 600;
    margin-bottom: 25px;
}

.form-label {
    color: #e2dcff;
    font-size: 14px;
}

.form-control {
    background: #cfc7ff;           
    border: 1px solid #b4a9f4;
    color: #2e2354;
    border-radius: 14px;
    padding: 14px;
}

.form-control::placeholder {
    color: #6b5fa3;
}

.form-control:focus {
    background: #ddd7ff;           
    border-color: #9a8cff;
    color: #2e2354;
    box-shadow: 0 0 0 .2rem rgba(155,140,255,.35);
}

input[type="file"] {
    background: #cfc7ff;
    color: #2e2354;
    border-radius: 14px;
}

input[type="file"]::file-selector-button {
    background: #7b68ee;
    color: white;
    border: none;
    padding: 10px 16px;
    border-radius: 12px;
    margin-right: 10px;
}

input[type="file"]::file-selector-button:hover {
    background: #8f7cff;
}

.cover-preview {
    width: 150px;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(0,0,0,.5);
    border: 3px solid #7b68ee;
}

.btn-purple {
    background: linear-gradient(135deg, #7b68ee, #a38bff);
    color: white;
    border-radius: 14px;
    border: none;
    padding: 12px 26px;
}

.btn-purple:hover {
    opacity: .9;
}

.btn-back {
    background: transparent;
    color: #d8ceff;
    border: 1px solid #7b68ee;
    border-radius: 14px;
    padding: 12px 26px;
}

@media (max-width: 768px) {
    .card-edit {
        max-width: 100%;
        margin: 0;
        min-height: 100vh;
        border-radius: 0;
        padding: 24px;
    }
}
</style>
</head>

<body>

<div class="card-edit">

    <h4>✏️ Edit Buku</h4>

    <form method="post"
          action="index.php?page=buku-update"
          enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $buku['id']; ?>">
        <input type="hidden" name="gambar_lama" value="<?= $buku['gambar']; ?>">

        <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" name="judul" class="form-control"
                   value="<?= $buku['judul']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Penulis</label>
            <input type="text" name="penulis" class="form-control"
                   value="<?= $buku['penulis']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" name="penerbit" class="form-control"
                   value="<?= $buku['penerbit']; ?>" required>
        </div>

        <div class="mb-4">
            <label class="form-label">Tahun Terbit</label>
            <input type="number" name="tahun" class="form-control"
                   value="<?= $buku['tahun']; ?>" required>
        </div>

        <div class="mb-4">
            <label class="form-label">Cover Buku Saat Ini</label><br>
            <?php if ($buku['gambar']): ?>
                <img src="public/img/buku/<?= $buku['gambar']; ?>"
                     class="cover-preview mt-2">
            <?php else: ?>
                <p class="text-muted">Belum ada cover</p>
            <?php endif; ?>
        </div>

        <div class="mb-4">
            <label class="form-label">Ganti Cover Buku</label>
            <input type="file" name="gambar" class="form-control">
        </div>

        <div class="d-flex gap-3">
            <button class="btn btn-purple">💾 Update</button>
            <a href="index.php?page=buku" class="btn btn-back">↩ Kembali</a>
        </div>

    </form>
</div>

</body>
</html>
