<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/iconeduc.png" type="image/x-icon">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-image">
            <img src="../images/logo1.png" alt="Login Image">
        </div>
    
        
        <div class="login-box">
            <h2>LOGIN</h2>
            <form method="POST" name="loginForm">
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

                <button type="submit" class="login-btn" name="submit">Login</button>

                <div class="forgot">
                    <a href="./registrasi.php">Belum Punya Akun?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
