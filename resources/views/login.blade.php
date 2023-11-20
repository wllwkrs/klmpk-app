<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - UPK Gedung 454</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        }

        .login-container {
            width: 600px;
            border: 1px solid #fff;
            padding-top: 20px;
            padding-left: 100px;
            background: linear-gradient(135deg, #219EBC, transparent);
            color: #fff;
            border-radius: 5px;
        }

        .login-container .form-control {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
            <div>
                <p style="color: white; font-size: 16x;  margin: 0;">Selamat Datang di</p>
                <p style="color: white; font-size: 20px; font-weight: bold; margin: 0;">UPK Gedung 454</p>
                <p style="color: white; font-size: 16px;  margin-top: 16px; margin-bottom: 2px;">Login</p>
                <p style="color: white; font-size: 13px;  margin-top: 2px;">Masuk Sebagai User</p>
            </div>
            <form action="/ceklogin" method="POST">
                        @csrf
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" class="form-control" id="Email" name="Email" style="background-color: #eee; border: 1px solid #000; width: 300px;" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="text" class="form-control" id="Password" name="Password" style="background-color: #eee; border: 1px solid #000; width: 300px;" placeholder="Password" required>
                <a href="/lupaPassword" class="text-light text-right" style="color: white; font-size: 13px;  margin-top: 1px;">Lupa Password?</a>
            </div>
            
            <button type="submit" class="btn btn-light btn-primary">Masuk</button>
            <small><p>Belum punya akun? <a href="/">Registrasi</a> sekarang</p></small>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
