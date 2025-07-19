<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Profile</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <h1>WELCOME TO MY PROFILE</h1>
</header>
<div class="container">
  <aside class="sidebar">
    <ul>
      <li><a href="#">Data Diri</a></li>
      <li><a href="riwayat_pendidikan.php">Rekap Sekolah</a></li>
      <li><a href="https://www.tiktok.com/@bimgh_?_t=ZS-8y49H9dxLpR&_r=1">Sosial Media</a></li>
      <li><a href="index.html">Log Out</a></li>
    </ul>
  </aside>
  <main class="content">
    <div class="profile-card">
      <img src="b.jpg" alt="b.jpg" class="profile-pic">
      <div class="info">
        <h2>Bima Ghiramustika Putra</h2>
        <p>Tempat, Tanggal Lahir: Yogyakarta, 14 Januari 2006</p>
        <p>Alamat: Gunungbutak, Giripanggung, Tepus, Gunungkidul</p>
        <p>Agama: Islam</p>
        <p>Status: Mahasiswa</p>
        <h3>Tentang Saya:</h3>
        <p>Saya adalah pribadi yang suka bersosialisasi dan menikmati momen kebersamaan bersama orang-orang terdekat. Saya senang menghabiskan waktu dengan nongkrong bareng teman-teman, baik itu teman satu kelas maupun teman di lingkungan rumah. Menurut saya, momen sederhana seperti berbincang santai di angkringan atau bercanda di warung kopi bisa menjadi waktu yang berharga untuk saling mendukung, tertawa, dan saling menguatkan.</p>
        <p>Aktivitas ini bukan hanya jadi cara saya melepas penat, tapi juga menjadi sarana untuk membangun relasi yang lebih kuat dan memahami sudut pandang orang lain. Saya percaya bahwa melalui interaksi sosial yang hangat, saya bisa menjadi pribadi yang lebih terbuka dan terus berkembang secara emosional maupun mental.</p>
      </div>
    </div>
    <section class="form-section">
  <h2>Hubungi Saya</h2>
  <form action="proses_pesan.php" method="POST">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" required><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="pesan">Pesan:</label><br>
    <textarea id="pesan" name="pesan" rows="5" required></textarea><br>

    <button type="submit">Kirim Pesan</button>
  </form>
</section>
  </main>
</div>

</body>
</html>
