<?php
    session_start();
    include('../../config/config.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        
        $sql = "INSERT INTO user (nama, username, password, role) VALUES (:nama, :username, :password, :role)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nama' => $nama, 'username' => $username, 'password' => $password, 'role' => $role]);
        
        if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
            header("Location: ../../index.php");
            exit;
        }else{
            header("Location: ../manage_users.php");
            exit;
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="POST">
        <label>Nama: </label><br>
        <input type="text" name="nama" required><br><br>
        
        <label>Username: </label><br>
        <input type="text" name="username" required><br><br>
        
        <label>Role: </label><br>
        <select name="role" required>
            <option value="admin">Admin</option>
            <option value="peserta">Peserta</option>
        </select><br><br>
        
        <label>Password: </label><br>
        <input type="password" name="password"><br><br>
        
        <button type="submit">Tambah User</button>
    </form>
</body>
</html>