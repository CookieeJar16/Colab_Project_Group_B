<?php
    session_start();
    include('../../config/config.php');

    if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
        header('Location: ../../page/login.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        
        if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
            $gambarTmp = $_FILES['gambar']['tmp_name'];
            $gambarName = time() . '_' . $_FILES['gambar']['name'];
            $gambarPath = '../../uploads/' . $gambarName;
            
            move_uploaded_file($gambarTmp, $gambarPath);
        }

        $sql = "INSERT INTO course (judul, deskripsi, gambar) VALUES (:judul, :deskripsi, :gambar)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['judul' => $judul, 'deskripsi' => $deskripsi, 'gambar' => $gambarName]);
    
        // Redirect setelah berhasil
        header("Location: ../manage_courses.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
</head>
<body>
    <h2>Create New Course</h2>
    <form method="POST" enctype="multipart/form-data">
        <label for="judul">Nama Program:</label><br>
        <input type="text" name="judul" id="judul" required><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea name="deskripsi" id="deskripsi" required></textarea><br><br>

        <label for="gambar">Gambar:</label><br>
        <input type="file" name="gambar" id="gambar" accept="image/*" required><br><br>

        <button type="submit">Create Course</button>
    </form>
</body>
</html>
