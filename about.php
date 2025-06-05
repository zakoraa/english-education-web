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
         <h4 class="member-name">Henri Donand K</h4>
         <p class="member-nim">NIM: L200220092</p>
      </div>
      <div class="team-card">
         <h4 class="member-name">Fachrizal Irfansyah El Zacky </h4>
         <p class="member-nim">NIM: L200220120</p>
      </div>
      <div class="team-card">
         <h4 class="member-name">Aldino Dewa Ndaru</h4>
         <p class="member-nim">NIM: L200220173</p>
      </div>
      <div class="team-card">
         <h4 class="member-name">Ammar Miftahudin Anshori</h4>
         <p class="member-nim">NIM: L200230270</p>
      </div>
      <div class="team-card">
         <h4 class="member-name">Mhd. Farhan Lubis</h4>
         <p class="member-nim">NIM: L200220277</p>
      </div>
      <div class="team-card">
         <h4 class="member-name">Muhammad Rafli Silehu</h4>
         <p class="member-nim">NIM: L200220267</p>
      </div>
      <div class="team-card">
         <h4 class="member-name">Alfian Candra Irwana</h4>
         <p class="member-nim">NIM: L200220156</p>
      </div>
      <div class="team-card">
         <h4 class="member-name"> Iqbal Firmansyah</h4>
         <p class="member-nim">NIM: L200220180</p>
      </div>
      <div class="team-card">
         <h4 class="member-name">Muhammad Alief Adhitya Pratama</h4>
         <p class="member-nim">NIM: L200220281</p>
      </div>
      <div class="team-card">
         <h4 class="member-name">As'ad Nirot Ahmadi</h4>
         <p class="member-nim">NIM: L200220155</p>
      </div>
      <div class="team-card">
         <h4 class="member-name">Rehal Naya Putra</h4>
         <p class="member-nim">NIM: L200220160</p>
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