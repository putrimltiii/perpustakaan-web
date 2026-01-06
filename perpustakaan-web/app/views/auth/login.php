<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login</title>
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

.login-card {
    width: 100%;
    max-width: 420px;
    padding: 32px;
    border-radius: 22px;
    background: linear-gradient(180deg, #3a3160, #2e2946);
    box-shadow: 0 25px 60px rgba(0,0,0,.45);
    color: #e9e7f3;
}

.login-card h4 {
    color: #d8ceff;
    font-weight: 600;
}

.form-control {
    background: #cfc7ff;
    border: 1px solid #b4a9f4;
    color: #2e2354;
    border-radius: 14px;
    padding: 14px;
}

.form-control:focus {
    background: #ddd7ff;
    border-color: #9a8cff;
    box-shadow: 0 0 0 .2rem rgba(155,140,255,.35);
}

.btn-purple {
    background: linear-gradient(135deg, #7b68ee, #a38bff);
    border: none;
    color: white;
    border-radius: 14px;
    padding: 12px;
    font-weight: 500;
}

a {
    color: #cbbcff;
    text-decoration: none;
}
</style>
</head>

<body>

<div class="login-card text-center">
    <h4 class="mb-4">Login</h4>

    <form method="POST" action="index.php?page=login">
        <div class="mb-3 text-start">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-4 text-start">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button class="btn btn-purple w-100 mb-3">Login</button>
    </form>

    <small>
        Belum punya akun?
        <a href="index.php?page=register">Register</a>
    </small>
</div>

</body>
</html>