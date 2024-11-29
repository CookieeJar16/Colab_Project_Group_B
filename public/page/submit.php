<?php
$host = 'localhost';
$dbname = 'luarsekolah';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $okupasi = htmlspecialchars($_POST['okupasi']);
    $rating = (int)$_POST['rating'];
    $message = htmlspecialchars($_POST['message']);
    $created_at = date('Y-m-d H:i:s'); // Waktu sekarang

    $stmt = $pdo->prepare("INSERT INTO reviews (name, okupasi, rating, message, create_at) VALUES (:name, :okupasi, :rating, :message, :create_at)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam('okupasi', $okupasi);
    $stmt->bindParam(':rating', $rating);
    $stmt->bindParam(':message', $message);
    $stmt->bindParam(':create_at', $created_at);

    if ($stmt->execute()) {
        $message = urlencode("Berhasil Menambahkan Rating");
        header("Location: testimoni2.php?message=$message");
        exit();
    } else {
        $message = urlencode("Gagal Menambahkan Rating");
        header("Location: testimoni2.php?message=$message");
        exit();
    }
}
?>
