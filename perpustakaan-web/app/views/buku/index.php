<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Buku</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
  min-height: 100vh;
  background: linear-gradient(135deg, #2b2540, #3a2f5f, #2a2438);
  font-family: 'Segoe UI', sans-serif;
  color: #f3f1ff;
}

.card {
  background: linear-gradient(180deg, #3f3570, #332b5a);
  border-radius: 22px;
  border: none;
  box-shadow: 0 25px 60px rgba(0,0,0,.45);
}

h4 {
  font-weight: 600;
  color: #d8ccff;
}

.form-control {
  background: #7a6db8;
  border: 1px solid #a395ff;
  color: #fff;
}

.form-control::placeholder {
  color: #eee9ff;
}

.form-control:focus {
  background: #8577cf;
  border-color: #c2b6ff;
  box-shadow: 0 0 0 .2rem rgba(194,182,255,.35);
}

.btn-primary {
  background: linear-gradient(135deg, #7b68ee, #a38bff);
  border: none;
  border-radius: 14px;
}

.btn-edit {
  background: #9b8cff;
  color: #fff;
  border-radius: 12px;
  border: none;
}

.btn-danger {
  border-radius: 12px;
}

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

table {
  min-width: 900px;
  background: #e8e2ff;
  border-radius: 14px;
  overflow: hidden;
}

.table thead {
  background: #d2c6ff;
  color: #2a2438;
}

.table td {
  background: #eee9ff;
  color: #2a2438;
  vertical-align: middle;
}

.cover {
  width: 60px;
  height: 80px;
  object-fit: cover;
  border-radius: 8px;
  box-shadow: 0 6px 14px rgba(0,0,0,.3);
}

.pagination {
  margin-top: 25px;
}

.page-item.active .page-link {
  background: #9b8cff;
  border: none;
}

.page-link {
  color: #9b8cff;
}

@media (max-width: 768px) {
  .container {
    max-width: 100%;
    padding: 0;
  }

  .card {
    border-radius: 0;
    min-height: 100vh;
  }
}
</style>
</head>

<body>

<div class="container my-0 my-md-4">
  <div class="card p-3 p-md-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4>📖 DAFTAR BUKU PERPUSTAKAAN </h4>

      <div class="text-end">
        <span class="badge bg-secondary">
          <?= strtoupper($_SESSION['user']['role']) ?>
        </span><br>
        <a href="index.php?page=logout" class="btn btn-sm btn-secondary mt-2">
          Logout
        </a>
      </div>
    </div>

    <!-- SEARCH -->
    <div class="row mb-4">
      <div class="col-md-8 mb-2">
        <form method="GET" class="d-flex">
          <input type="hidden" name="page" value="buku">
          <input type="text" name="keyword"
                 class="form-control rounded-pill me-2"
                 placeholder="Cari judul, penulis, penerbit..."
                 value="<?= $_GET['keyword'] ?? '' ?>">
          <button class="btn btn-primary rounded-pill px-4">Cari</button>
        </form>
      </div>

      <?php if ($_SESSION['user']['role'] === 'admin'): ?>
      <div class="col-md-4 text-md-end">
        <a href="index.php?page=buku-tambah"
           class="btn btn-primary rounded-pill px-4">
          ➕ Tambah Buku
        </a>
      </div>
      <?php endif; ?>
    </div>

    <!-- TABLE -->
    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr class="text-center">
            <th>No</th>
            <th>Cover</th>
            <th class="text-start">Judul</th>
            <th class="text-start">Penulis</th>
            <th class="text-start">Penerbit</th>
            <th>Tahun</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>

        <?php
          $halAktif = $_GET['hal'] ?? 1;
          $limit = 5;
          $no = ($halAktif - 1) * $limit + 1;
        ?>

        <?php foreach ($buku as $row): ?>
        <tr>
          <td class="text-center"><?= $no++ ?></td>
          <td class="text-center">
            <?php if ($row['gambar']): ?>
              <img src="public/img/buku/<?= $row['gambar']; ?>" class="cover">
            <?php else: ?>-
            <?php endif; ?>
          </td>
          <td><?= $row['judul'] ?></td>
          <td><?= $row['penulis'] ?></td>
          <td><?= $row['penerbit'] ?></td>
          <td class="text-center"><?= $row['tahun'] ?></td>
          <td class="text-center">
            <?php if ($_SESSION['user']['role'] === 'admin'): ?>
              <a href="index.php?page=buku-edit&id=<?= $row['id'] ?>"
                 class="btn btn-edit btn-sm">Edit</a>
              <a href="index.php?page=buku-hapus&id=<?= $row['id'] ?>"
                 onclick="return confirm('Yakin hapus data?')"
                 class="btn btn-danger btn-sm">Hapus</a>
            <?php else: ?>
              <span class="fst-italic text-muted">Read Only</span>
            <?php endif; ?>
          </td>
        </tr>
        <?php endforeach; ?>

        </tbody>
      </table>
    </div>

    <!-- PAGINATION -->
    <?php if (isset($totalHal) && $totalHal > 1): ?>
    <nav>
      <ul class="pagination justify-content-center">
        <?php for ($i = 1; $i <= $totalHal; $i++): ?>
          <li class="page-item <?= ($i == $halAktif) ? 'active' : '' ?>">
            <a class="page-link"
               href="index.php?page=buku&hal=<?= $i ?><?= isset($_GET['keyword']) ? '&keyword='.$_GET['keyword'] : '' ?>">
              <?= $i ?>
            </a>
          </li>
        <?php endfor ?>
      </ul>
    </nav>
    <?php endif; ?>

  </div>
</div>

</body>
</html>
