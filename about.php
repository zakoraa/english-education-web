<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tentang kami</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <h1 class="heading">Tentang Kami</h1>

   <div class="about-info">
      <h2>Nama Kelompok</h2>
      <p>Kelompok 5 - Web Developer</p>

      <h2>Deskripsi Website</h2>
      <p>Website ini dikembangkan sebagai bagian dari proyek mata kuliah Pemrograman Web. Tujuannya adalah membangun sistem informasi modern yang interaktif dan bermanfaat bagi pengguna. Website ini berfungsi sebagai platform pemesanan layanan/produk dan menampilkan data secara dinamis dengan antarmuka yang user-friendly.</p>
   </div>

   <h2 style="text-align:center; margin-top: 3rem;">Anggota Kelompok</h2>

   <div class="team-container">
      <div class="team-card">
         <img src="images/anggota1.jpg" alt="Anggota 1">
         <h4>Andi Wijaya</h4>
         <p>NIM: 1234567890</p>
      </div>
      <div class="team-card">
         <img src="images/anggota2.jpg" alt="Anggota 2">
         <h4>Budi Santoso</h4>
         <p>NIM: 1234567891</p>
      </div>
      <div class="team-card">
         <img src="images/anggota3.jpg" alt="Anggota 3">
         <h4>Citra Lestari</h4>
         <p>NIM: 1234567892</p>
      </div>
      <div class="team-card">
         <img src="images/anggota1.jpg" alt="Anggota 1">
         <h4>Andi Wijaya</h4>
         <p>NIM: 1234567890</p>
      </div>
      <div class="team-card">
         <img src="images/anggota2.jpg" alt="Anggota 2">
         <h4>Budi Santoso</h4>
         <p>NIM: 1234567891</p>
      </div>
      <div class="team-card">
         <img src="images/anggota3.jpg" alt="Anggota 3">
         <h4>Citra Lestari</h4>
         <p>NIM: 1234567892</p>
      </div>
      <div class="team-card">
         <img src="images/anggota1.jpg" alt="Anggota 1">
         <h4>Andi Wijaya</h4>
         <p>NIM: 1234567890</p>
      </div>
      <div class="team-card">
         <img src="images/anggota2.jpg" alt="Anggota 2">
         <h4>Budi Santoso</h4>
         <p>NIM: 1234567891</p>
      </div>
      <div class="team-card">
         <img src="images/anggota3.jpg" alt="Anggota 3">
         <h4>Citra Lestari</h4>
         <p>NIM: 1234567892</p>
      </div>
      <div class="team-card">
         <img src="images/anggota2.jpg" alt="Anggota 2">
         <h4>Budi Santoso</h4>
         <p>NIM: 1234567891</p>
      </div>
      <div class="team-card">
         <img src="images/anggota3.jpg" alt="Anggota 3">
         <h4>Citra Lestari</h4>
         <p>NIM: 1234567892</p>
      </div>
      <!-- Tambahkan anggota lain di sini -->
   </div>

</section>


<!-- reviews section ends -->

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>