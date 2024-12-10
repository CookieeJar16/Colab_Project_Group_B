<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard luarsekolah</title>
    <link rel="stylesheet" href="./css/landing_page.css">
    <link rel="stylesheet" href="./css/responsif.css">
    <link rel="stylesheet" href="./css/styles_komunitas.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body>

<nav>
<div class="nav-container">
        <a href="index.php"><img src="images/LS-logo-2nd-master.png" alt="Logo" class="nav-logo"></a>
        <ul class="nav-menu">
            <li><a href="#alumni">Tentang Kita</a></li>
            <li><a href="#programs">Program</a></li>
            <li><a href="page/komunitas.php">Komunitas</a></li>
            <li><a href="page/promo.php">Promo</a></li>
            <?php if (isset($_SESSION['username'])):?>
                    <li><span>Hello, <?php echo $_SESSION['nama']; ?></span></li>
                </ul>
                <a href="config/logout.php" class="btn-register">
                    Logout <span class="arrow">→</span>
                </a>
            <?php else: ?>
                </ul>
                <a href="page/login.php" class="btn-login">Masuk</a>
                <a href="page/registrasi.php" class="btn-register">
                    Daftar
                </a>
            <?php endif; ?>
    </div>            
</nav>

