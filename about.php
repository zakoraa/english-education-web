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

<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">

<section class="about">

   <div class="content" style="max-width: 1000px; margin: auto; padding: 20px; font-family: 'Baloo 2', cursive; color: #222;">

      <!-- Nama Kelompok -->
      <div style="background: #cce5ff; padding: 20px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); margin-bottom: 30px; text-align: center;">
         <h1 style="color: #004085; font-size: 2.5rem; margin-bottom: 10px;">Kelompok 3</h1>
      </div>

      <!-- Nama Project & Deskripsi -->
      <div style="background: #e6f2ff; padding: 20px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); margin-bottom: 30px; text-align: center;">
         <h2 style="color: #0056b3; font-size: 2rem; margin-bottom: 10px;">Edukasi Bahasa Inggris untuk Pemula</h2>
         <p style="font-size: 1.1rem;">
            Website ini merupakan media pembelajaran interaktif Bahasa Inggris untuk siswa SD. Siswa dapat belajar kosakata, tata bahasa dasar, dan percakapan sehari-hari melalui visual, audio, dan kuis sederhana.
         </p>
      </div>

      <!-- Anggota Kelompok -->
      <div style="background: #f8f9fa; padding: 20px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
         <h3 style="color: #003366; font-size: 1.8rem; margin-bottom: 20px; text-align: center;">Anggota Kelompok</h3>

         <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px;">
            <div class="anggota"> <strong>As'ad Nirot Ahmadi</strong><br>L200220155 </div>
            <div class="anggota"> <strong>Alfian Candra Irwana</strong><br>L200220156</div>
            <div class="anggota"> <strong>Rehal Naya Putra</strong><br>L200220160</div>
            <div class="anggota"> <strong>Iqbal Firmansyah</strong><br>L200220180</div>
            <div class="anggota"> <strong>Henri Donand K</strong><br>L200220092</div>
            <div class="anggota"> <strong>Fachrizal Irfansyah El Zacky</strong><br>L200220120</div>
            <div class="anggota"> <strong>Aldino Dewa Ndaru</strong><br>L200220173</div>
            <div class="anggota"> <strong>Mhd. Farhan Lubis</strong><br>L200220277</div>
            <div class="anggota"> <strong>Muhammad Rafli Silehu</strong><br>L200220267</div>
            <div class="anggota"> <strong>Muhammad Alief Adhitya Pratama</strong><br>L200220281</div>
            <div class="anggota"> <strong>Ammar Miftahudin Anshori</strong><br>L200230270</div>
         </div>
      </div>

   </div>

</section>

<!-- CSS untuk style anggota -->
<style>
   .anggota {
      background: #d0e7ff;
      padding: 15px;
      border-radius: 12px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
      color: #003366;
   }
   .anggota:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0,0,0,0.15);
   }
</style>






<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>