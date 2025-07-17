<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
include "config/db.php";
$produk = mysqli_query($conn, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Kedai Kopi</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h1>Menu Kedai Kopi</h1>
        <p>Selamat datang, <?= $_SESSION['username']; ?> | <a href="logout.php">Logout</a></p>

        <div class="produk-list">
            <?php while ($row = mysqli_fetch_assoc($produk)) { ?>
                <div class="produk-item">
                    <h3><?= $row['nama']; ?></h3>
                    <p><?= $row['deskripsi']; ?></p>
                    <strong>Rp<?= number_format($row['harga']); ?></strong>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
