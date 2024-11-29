<?php
    include'../../config/config.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM reviews WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
    
        header("Location: ../manage_testimoni.php");
    }
?>