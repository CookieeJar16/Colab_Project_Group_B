<?php
    session_start();
    include('../../config/config.php');

    if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
        header('Location: ../../page/login.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        
        if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
            $gambarTmp = $_FILES['gambar']['tmp_name'];
            $gambarName = time() . '_' . $_FILES['gambar']['name'];
            $gambarPath = '../../uploads/' . $gambarName;
            
            $stmt = $pdo->prepare("SELECT gambar FROM course WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $course = $stmt->fetch();
            if ($course) {
                unlink('../../uploads/' . $course['gambar']);
            }
            
            move_uploaded_file($gambarTmp, $gambarPath);
        } else {
            $stmt = $pdo->prepare("SELECT gambar FROM course WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $course = $stmt->fetch();
            $gambarName = $course['gambar'];
        }

        $sql = "UPDATE course SET judul=:judul, deskripsi=:deskripsi, gambar=:gambar WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['judul' => $judul, 'deskripsi' => $deskripsi, 'gambar' => $gambarName, 'id' => $id]);

        header("Location: ../manage_courses.php");
        exit;
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM course WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $course = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        header('Location: ../manage_courses.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
</head>
<body>
    <h2>Edit Course</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $course['id']; ?>">
        
        <label for="judul">Nama Course:</label><br>
        <input type="text" name="judul" id="judul" value="<?php echo htmlspecialchars($course['judul']); ?>" required><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea name="deskripsi" id="deskripsi" required><?php echo htmlspecialchars($course['deskripsi']); ?></textarea><br><br>

        <label for="gambar">Gambar (biarkan jika menggunakan gambar tetap):</label><br>
        <input type="file" name="gambar" id="gambar" accept="image/*"><br><br>

        <p>Gambar Sebelumnya: <img src="../../uploads/<?php echo $course['gambar']; ?>" width="100"></p>

        <button type="submit">Update Course</button>
    </form>
</body>
</html>
