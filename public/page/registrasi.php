<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/iconeduc.png" type="image/x-icon">
    <title>Sign up</title>
    <link rel="stylesheet" href="../css/registrasi.css">
</head>
<body>
    <div class="registrasi-container">
        <div class="registrasi-image">
            <img src="../images/logo1.png" alt="luar sekolah icon">
        </div>
        <div class="registrasi-box">
            <h2>Sign Up</h2>
            <form method="post">
                <div class="input-box">
                    <label>Nama Lengkap</label><br>
                    <input id="name" type="text" placeholder="Nama Lengkap" name="names" required>
                    <span class="input-line"></span>
                </div>
                <div class="input-box">
                    <label>Username</label><br>
                    <input id="username" type="text" placeholder="Username" name="username" required>
                    <span class="input-line"></span>
                </div>
                <div class="input-box">
                    <label>Password</label><br>
                    <input id="password" type="password" placeholder="Password" name="password" required>
                    <span class="input-line"></span>
                </div>
                <div class="input-box">
                    <label>Role</label><br>
                    <select name="role" required>
                    <option value="peserta">Peserta</option>
                    <option value="admin">Admin</option>
                </select>
                <span class="input-line"></span>
                </div>

                <button type="submit" class="registrasi-btn" name="registrasi">Registrasi</button>
                <div class="forgot">
                    <a href="./login.php">Sudah memiliki akun?</a>
                </div>
            </form>
        </div>
    </div>
    <script src="../script/registrasi.js"></script>
</body>
</html>