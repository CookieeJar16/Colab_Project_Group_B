<?php
    session_start();
    include'../config/config.php';
    if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
        header('Location: ../page/login.php');
        exit;
    }

    $sql = "SELECT * FROM user";
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../css/dashboard_admin.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Admin Dashboard</h2>
            <p>Selamat Datang, <?php echo $_SESSION['nama']; ?></p>
            <a href="../config/logout.php" class="logout-btn">Logout</a>
            <div class="sidebar-manage">
            
            <a href="manage_users.php" class="manage-users-btn">Kelola user</a>
            <a href="manage_courses.php" class="manage-courses-btn">Kelola program</a>
            <a href="manage_testimoni.php" class="manage-courses-btn">Kelola testimoni</a>
            </div>
        </div>

        <div class="main-content">
            <h2>Selamat Datang di Dashboard Admin</h2>
            <p>Pilih menu di samping untuk mengelola pengguna.</p>
            <h2>Daftar User</h2>
            <h2><a href="tools/create_user.php">Tambah User</a></h2>
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>username</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($users as $index => $user): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($user['nama']); ?></td>
                    <td><?= htmlspecialchars($user['username']); ?></td>
                    <td><?= htmlspecialchars($user['password']); ?></td>
                    <td><?= htmlspecialchars($user['role']); ?></td>
                    <td>
                        <a href="tools/edit_user.php?id=<?= $user['id']; ?>">Edit</a> |
                        <a href="tools/delete_user.php?id=<?= $user['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>
