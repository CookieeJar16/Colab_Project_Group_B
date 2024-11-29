<?php
    session_start();
    include('../../config/config.php');

    if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
        header('Location: ../../page/login.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $rating = $_POST['rating'];
        $message = $_POST['message'];
        $okupasi = $_POST['okupasi'];
        $create_at = date('Y-m-d H:i:s');

        $sql = "UPDATE reviews SET name=:name, rating=:rating, message=:message, okupasi=:okupasi, create_at=:create_at WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['name' => $name, 'rating' => $rating, 'message' => $message, 'okupasi' => $okupasi, 'create_at' => $create_at , 'id' => $id]);

        header("Location: ../manage_testimoni.php");
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM reviews WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $review = $stmt->fetch(PDO::FETCH_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($review['id']); ?>">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($review['name']); ?>" required>

        <label for="okupasi">Okupasi:</label>
        <input type="text" id="okupasi" name="okupasi" value="<?= htmlspecialchars($review['okupasi']); ?>" required>

        <label for="rating">Rating (1-5):</label>
        <select id="rating" name="rating" required>
            <option value="5">5 - ★★★★★</option>
            <option value="4">4 - ★★★★☆</option>
            <option value="3">3 - ★★★☆☆</option>
            <option value="2">2 - ★★☆☆☆</option>
            <option value="1">1 - ★☆☆☆☆</option>
        </select>

        <label for="message">Pesan:</label>
        <textarea id="message" name="message" rows="4" value="<?= htmlspecialchars($review['message']); ?>" required></textarea>

        <button type="submit">Kirim Ulasan</button>
    </form>
</body>
</html>