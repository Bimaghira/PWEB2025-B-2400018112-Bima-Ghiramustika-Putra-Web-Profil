
<?php
// Data login contoh (hardcoded, bisa ganti ke database)
$valid_email = "bima@login.com";
$valid_password = "12345";

$email = $_POST['email'];
$password = $_POST['password'];

// Cek login
if ($email == $valid_email && $password == $valid_password) {
    header("Location: profile.php");
    exit;
} else {
    echo "<script>alert('Email atau password salah!'); window.location='index.html';</script>";
    exit;
}
?>
