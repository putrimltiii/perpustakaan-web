<?php
if (!isset($_SESSION['user'])) {
    header("Location: index.php?page=login");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #2b2d42, #3a0ca3);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }
    </style>
</head>
<body>