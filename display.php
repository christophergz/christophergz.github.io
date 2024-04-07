<?php
$host = 'localhost';
$user = 'id22017245_christopher';
$password = 'Hasanbaik123@';
$database = 'id22017245_christopher';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM komentar ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="profil-container">' . 
    '<img src="' . $row["img"] . '" alt="Hasan Husen" class="profile-img">' . 
    '<div style="margin-top: -50px; margin-left: 60px; background-color: #f0f2f5; border-radius: 20px;" class="profile-info">' . 
    '<h6 style="margin-right: 10px; margin-top: 10px; margin-left: 10px;">' . $row["nama"] . '</h6>' . 
    '<p style="margin-right: 10px; margin-bottom: 10px; margin-left: 10px; font-size: 16px;" class="recent-chat">' . $row["komentar"] . '</p>' . 
    '</div></div><br>';
    }
} else {
    echo "Belum ada komentar.";
}

$conn->close();
?>