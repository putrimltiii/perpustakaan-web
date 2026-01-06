<?php
require "app/config/database.php";

function bukuIndex() {
    global $conn;

    $limit = 5;
    $hal = isset($_GET['hal']) ? (int)$_GET['hal'] : 1;
    if ($hal < 1) $hal = 1;
    $offset = ($hal - 1) * $limit;

    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
    $where = '';

    if ($keyword != '') {
        $where = "WHERE 
            judul LIKE '%$keyword%' OR
            penulis LIKE '%$keyword%' OR
            penerbit LIKE '%$keyword%'";
    }

    $totalQuery = mysqli_query(
        $conn,
        "SELECT COUNT(*) AS total FROM buku $where"
    );
    $totalData = mysqli_fetch_assoc($totalQuery)['total'];
    $totalHal = ceil($totalData / $limit);

    $query = mysqli_query(
        $conn,
        "SELECT * FROM buku $where LIMIT $offset, $limit"
    );
    $buku = mysqli_fetch_all($query, MYSQLI_ASSOC);

    require "app/views/buku/index.php";
}

function bukuTambah() {
    require "app/views/buku/tambah.php";
}

function bukuSimpan() {
    global $conn;

    $judul    = $_POST['judul'];
    $penulis  = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun    = $_POST['tahun'];

    // UPLOAD GAMBAR
    $gambar = null;
    if (!empty($_FILES['gambar']['name'])) {
        $ext = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
        $gambar = uniqid('buku_') . '.' . $ext;
        move_uploaded_file(
            $_FILES['gambar']['tmp_name'],
            "public/img/buku/" . $gambar
        );
    }

    mysqli_query($conn, "
        INSERT INTO buku (judul, penulis, penerbit, tahun, gambar)
        VALUES ('$judul', '$penulis', '$penerbit', '$tahun', '$gambar')
    ");

    header("Location: index.php?page=buku");
    exit;
}

function bukuEdit() {
    global $conn;

    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM buku WHERE id=$id");
    $buku = mysqli_fetch_assoc($query);

    require "app/views/buku/edit.php";
}

function bukuUpdate() {
    global $conn;

    $id       = $_POST['id'];
    $judul    = $_POST['judul'];
    $penulis  = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun    = $_POST['tahun'];
    $gambar   = $_POST['gambar_lama'];

    // JIKA ADA GAMBAR BARU
    if (!empty($_FILES['gambar']['name'])) {

        // HAPUS GAMBAR LAMA
        if ($gambar && file_exists("public/img/buku/$gambar")) {
            unlink("public/img/buku/$gambar");
        }

        $ext = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
        $gambar = uniqid('buku_') . '.' . $ext;

        move_uploaded_file(
            $_FILES['gambar']['tmp_name'],
            "public/img/buku/" . $gambar
        );
    }

    mysqli_query($conn, "
        UPDATE buku SET
            judul='$judul',
            penulis='$penulis',
            penerbit='$penerbit',
            tahun='$tahun',
            gambar='$gambar'
        WHERE id=$id
    ");

    header("Location: index.php?page=buku");
    exit;
}

function bukuHapus() {
    global $conn;

    $id = $_GET['id'];

    // HAPUS FILE GAMBAR
    $q = mysqli_query($conn, "SELECT gambar FROM buku WHERE id=$id");
    $buku = mysqli_fetch_assoc($q);

    if ($buku && $buku['gambar'] && file_exists("public/img/buku/" . $buku['gambar'])) {
        unlink("public/img/buku/" . $buku['gambar']);
    }

    mysqli_query($conn, "DELETE FROM buku WHERE id=$id");

    header("Location: index.php?page=buku");
    exit;
}
