<?php
    session_start();
    include'../config/config.php';
    if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
        header('Location: ../page/login.php');
        exit;
    }

    $sql = "SELECT * FROM course";
    $stmt = $pdo->query($sql);
    $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
            <p>Pilih menu di samping untuk mengelola program.</p>
            <h2>Daftar Program</h2>
            <h2><a href="tools/create_course.php">Tambah Program</a></h2>
            <table>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($courses as $index => $course): ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><?= htmlspecialchars($course['judul']); ?></td>
                    <td><?= htmlspecialchars($course['deskripsi']); ?></td>
                    <td><img src="../uploads/<?php echo $course['gambar']; ?>" width="100"></td>
                    <td>
                        <a href="tools/edit_course.php?id=<?= $course['id']; ?>">Edit</a> |
                        <a href="tools/delete_course.php?id=<?= $course['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>
