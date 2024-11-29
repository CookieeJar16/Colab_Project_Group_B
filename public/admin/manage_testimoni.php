<?php
    session_start();
    include'../config/config.php';
    if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
        header('Location: ../page/login.php');
        exit;
    }

    $sql = "SELECT * FROM reviews";
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
            <p>Pilih menu di samping untuk mengelola testimoni.</p>
            <h2>Daftar Testimoni</h2>
            <h2><a href="tools/create_testimoni.php">Tambah Testimoni</a></h2>
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Rating</th>
                    <th>message</th>
                    <th>Okupasi</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($users as $index => $user): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($user['name']); ?></td>
                    <td><?= htmlspecialchars($user['rating']); ?></td>
                    <td><?= htmlspecialchars($user['message']); ?></td>
                    <td><?= htmlspecialchars($user['okupasi']); ?></td>
                    <td><?= htmlspecialchars($user['create_at']); ?></td>
                    <td>
                        <a href="tools/edit_testimoni.php?id=<?= $user['id']; ?>">Edit</a> |
                        <a href="tools/delete_testimoni.php?id=<?= $user['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>
