<?php
    session_start();
    include('../../config/config.php');

    if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
        header('Location: ../../page/login.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $okupasi = htmlspecialchars($_POST['okupasi']);
        $rating = (int)$_POST['rating'];
        $message = htmlspecialchars($_POST['message']);
        $created_at = date('Y-m-d H:i:s');
    
        $sql = "INSERT INTO reviews (name, okupasi, rating, message, create_at) VALUES (:name, :okupasi, :rating, :message, :create_at)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['name' => $name, 'okupasi' => $okupasi, 'rating' => $rating, 'message' => $message, 'create_at' => $created_at]);
    
        header("Location: ../manage_testimoni.php");
        exit;
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
    <h3>Tambah Ulasan</h3>
    <form method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>

        <label for="okupasi">Okupasi:</label>
        <input type="text" id="okupasi" name="okupasi" required>

        <label for="rating">Rating (1-5):</label>
        <select id="rating" name="rating" required>
            <option value="5">5 - ★★★★★</option>
            <option value="4">4 - ★★★★☆</option>
            <option value="3">3 - ★★★☆☆</option>
            <option value="2">2 - ★★☆☆☆</option>
            <option value="1">1 - ★☆☆☆☆</option>
        </select>

        <label for="message">Pesan:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Kirim Ulasan</button>
    </form>
</body>
</html>