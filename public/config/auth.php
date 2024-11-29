<?php

session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = ($_POST['password']);

    $stmt = $pdo->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        if ($user['role'] == 'admin') {
            header("Location: ../admin/dashboard_admin.php");
        } else {
            header("Location: ../index.php");
        exit();
        }
        exit();
    } else {
        echo "Username atau password salah!";
    }
}