<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    min-height: 100vh;
    background: linear-gradient(135deg, #2b2540, #3a2f5f, #2a2438);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Segoe UI', sans-serif;
}

.card-register {
    width: 100%;
    max-width: 460px;
    padding: 32px;
    border-radius: 22px;
    background: linear-gradient(180deg, #3a3160, #2e2946);
    box-shadow: 0 25px 60px rgba(0,0,0,.45);
    color: #e9e7f3;
}

h4 {
    color: #d8ceff;
}

.form-control, .form-select {
    background: #cfc7ff;
    border: 1px solid #b4a9f4;
    color: #2e2354;
    border-radius: 14px;
    padding: 14px;
}

.form-control:focus, .form-select:focus {
    background: #ddd7ff;
    border-color: #9a8cff;
}

.btn-purple {
    background: linear-gradient(135deg, #7b68ee, #a38bff);
    border: none;
    color: white;
    border-radius: 14px;
    padding: 12px;
}
</style>
</head>

<body>

<div class="card-register">
    <h4 class="text-center mb-4">Register</h4>

    <form method="POST" action="index.php?page=register">
        <input type="text" name="nama" class="form-control mb-3" placeholder="Nama" required>
        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

        <select name="role" class="form-select mb-4" required>
            <option value="">Pilih Role</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>

        <button class="btn btn-purple w-100">Daftar</button>
    </form>
</div>

</body>
</html>
