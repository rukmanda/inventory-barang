<?php
session_start();
if (
    !empty($_SESSION['username']) and
    !empty($_SESSION['password_karyawan'])
) {
    header("location:login.php");
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Rental Mobil</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            body {
                background: linear-gradient(135deg, #6e7e83, #4e5d61);
                font-family: 'Arial', sans-serif;
            }

            .login-container {
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .login-card {
                background-color: #ffffff;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 30px;
                width: 100%;
                max-width: 400px;
            }

            .login-card .card-header {
                background-color: #007bff;
                color: white;
                text-align: center;
                font-size: 1.5rem;
                border-radius: 10px 10px 0 0;
            }

            .login-card .form-control {
                border-radius: 10px;
                padding: 10px;
                font-size: 1rem;
                margin-bottom: 15px;
            }

            .login-card .btn-primary {
                width: 100%;
                background-color: #007bff;
                border-color: #007bff;
                padding: 12px;
                font-size: 1.1rem;
                border-radius: 10px;
                transition: background-color 0.3s ease;
            }

            .login-card .btn-primary:hover {
                background-color: #0056b3;
            }

            .login-card .form-label {
                font-size: 1rem;
                font-weight: bold;
                color: #333;
            }
        </style>
    </head>

    <body>
        <div class="login-container">
            <div class="login-card">
                <div class="card-header">
                    <h4>Login Form</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="cek_login.php">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" name="username" class="form-control" id="username"
                                placeholder="Masukkan Username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password_karyawan" class="form-control" id="password_karyawan"
                                placeholder="Masukkan Password" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <p class="text-center">Belum punya akun? <a href="registrasi.php">Daftar di sini</a></p>

                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
    <?php
}
?>