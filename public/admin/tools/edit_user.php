<?php
    session_start();
    include('../../config/config.php');

    if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
        header('Location: ../../page/login.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        if (!empty($password)) {
            $sql = "UPDATE user SET nama=:nama, username=:username, password=:password, role=:role WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['nama' => $nama, 'username' => $username, 'password' => $password, 'role' => $role, 'id' => $id]);
        } else {
            $sql = "UPDATE user SET nama=:nama, username=:username, role=:role WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['nama' => $nama, 'username' => $username, 'role' => $role, 'id' => $id]);
        }

        header("Location: ../manage_users.php");
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM user WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
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
        <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']); ?>">
        <label>Nama: </label><br>
        <input type="text" name="nama" value="<?php echo $user['nama']; ?>" required><br><br>
        
        <label>Username: </label><br>
        <input type="text" name="username" value="<?php echo $user['username']; ?>" required><br><br>
        
        <label>Role: </label><br>
        <select name="role" required>
            <option value="admin" <?php echo ($user['role'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
            <option value="peserta" <?php echo ($user['role'] == 'peserta') ? 'selected' : ''; ?>>Peserta</option>
        </select><br><br>
        
        <label>Password: </label><br>
        <input type="password" name="password"><br><br>
        
        <button type="submit">Update User</button>
    </form>
</body>
</html>
