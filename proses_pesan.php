<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama  = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $pesan = htmlspecialchars($_POST["pesan"]);

    $data = "Nama: $nama\nEmail: $email\nPesan:\n$pesan\n-------------------------\n";

    file_put_contents("pesan.txt", $data, FILE_APPEND);

    echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='profile.php';</script>";
} else {
    echo "Akses ditolak!";
}
?>
