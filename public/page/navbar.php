<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard luarsekolah</title>
    <link rel="stylesheet" href="./css/landing_page.css">
    <link rel="stylesheet" href="./css/responsif.css">
</head>
<body>

<nav>
<div class="nav-container">
        <img src="images/logo.png" alt="Logo" class="nav-logo">
        <ul class="nav-menu">
            <li><a href="#programs">Program</a></li>
            <li><a href="#benefitsmagang">Why LuarSekolah</a></li>
            <li><a href="page/komunitas.php">Community</a></li>
            <li><a href="#alumni">About US</a></li>
            <?php if (isset($_SESSION['username'])):?>
                    <li><span>Hello, <?php echo $_SESSION['nama']; ?></span></li>
                </ul>
                <a href="config/logout.php" class="btn-register">
                    Logout <span class="arrow">→</span>
                </a>
            <?php else: ?>
                    <li><a href="page/login.php">Login</a></li>
                </ul>
                <a href="page/registrasi.php" class="btn-register">
                    Register <span class="arrow">→</span>
                </a>
            <?php endif; ?>
    </div>            
</nav>

