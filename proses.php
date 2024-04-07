<?php
$host = 'localhost';
$user = 'id22017245_christopher';
$password = 'Hasanbaik123@';
$database = 'id22017245_christopher';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];
    $img = "hasan.png";

    $sql = "INSERT INTO komentar (nama, komentar, img) VALUES ('$nama', '$komentar', '$img')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>