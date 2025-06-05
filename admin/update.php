<?php

include '../components/connect.php';

if (isset($_COOKIE['tutor_id'])) {
   $tutor_id = $_COOKIE['tutor_id'];
} else {
   $tutor_id = '';
   header('location:login.php');
}

if (isset($_POST['submit'])) {

   $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE id = ? LIMIT 1");
   $select_tutor->execute([$tutor_id]);
   $fetch_tutor = $select_tutor->fetch(PDO::FETCH_ASSOC);

   $prev_pass = $fetch_tutor['password'];
   $prev_image = $fetch_tutor['image'];

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $profession = $_POST['profession'];
   $profession = filter_var($profession, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);

   if (!empty($name)) {
      $update_name = $conn->prepare("UPDATE `tutors` SET name = ? WHERE id = ?");
      $update_name->execute([$name, $tutor_id]);
      $message[] = 'Username berhasil diubah!';
   }

   if (!empty($profession)) {
      $update_profession = $conn->prepare("UPDATE `tutors` SET profession = ? WHERE id = ?");
      $update_profession->execute([$profession, $tutor_id]);
      $message[] = 'Profesi berhasil diubah!';
   }

   if (!empty($email)) {
      $select_email = $conn->prepare("SELECT email FROM `tutors` WHERE id = ? AND email = ?");
      $select_email->execute([$tutor_id, $email]);
      if ($select_email->rowCount() > 0) {
         $message[] = 'Email sudah digunakan!';
      } else {
         $update_email = $conn->prepare("UPDATE `tutors` SET email = ? WHERE id = ?");
         $update_email->execute([$email, $tutor_id]);
         $message[] = 'Email berhasil diubah!';
      }
   }

   $image = $_FILES['image']['name'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $ext = pathinfo($image, PATHINFO_EXTENSION);
   $rename = unique_id() . '.' . $ext;
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = '../uploaded_files/' . $rename;

   if (!empty($image)) {
      if ($image_size > 40000000) {
         $message[] = 'Ukuran gambar terlalu besar!';
      } else {
         $update_image = $conn->prepare("UPDATE `tutors` SET `image` = ? WHERE id = ?");
         $update_image->execute([$rename, $tutor_id]);
         move_uploaded_file($image_tmp_name, $image_folder);
         if ($prev_image != '' and $prev_image != $rename) {
            unlink('../uploaded_files/' . $prev_image);
         }
         $message[] = 'Gambar berhasil diubah!';
      }
   }

   $empty_pass = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
   $old_pass = sha1($_POST['old_pass']);
   $old_pass = filter_var($old_pass, FILTER_SANITIZE_STRING);
   $new_pass = sha1($_POST['new_pass']);
   $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   if ($old_pass != $empty_pass) {
      if ($old_pass != $prev_pass) {
         $message[] = 'Kata sandi lama tidak cocok!';
      } elseif ($new_pass != $cpass) {
         $message[] = 'Konfirmasi kata sandi tidak cocok!';
      } else {
         if ($new_pass != $empty_pass) {
            $update_pass = $conn->prepare("UPDATE `tutors` SET password = ? WHERE id = ?");
            $update_pass->execute([$cpass, $tutor_id]);
            $message[] = 'Kata sandi berhasil diubah!';
         } else {
            $message[] = 'Silakan masukkan kata sandi baru!';
         }
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Profil</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>

<body>

   <?php include '../components/admin_header.php'; ?>

   <!-- register section starts  -->

   <section class="form-container" style="min-height: calc(100vh - 19rem);">

      <form class="register" action="" method="post" enctype="multipart/form-data">
         <h3>Update profil</h3>
         <div class="flex">
            <div class="col">
               <p>Nama </p>
               <input type="text" name="name" placeholder="<?= $fetch_profile['name']; ?>" maxlength="50" class="box">
               <p>Profesi </p>
               <select name="profession" class="box">
                  <option value="" selected><?= $fetch_profile['profession']; ?></option>
                  <option value="Guru Bahasa Inggris">Guru Bahasa Inggris</option>
                  <option value="Dosen Bahasa Inggris">Dosen Bahasa Inggris</option>
                  <option value="Tutor Bahasa Inggris">Tutor Bahasa Inggris</option>
                  <option value="Instruktur Bahasa Inggris">Instruktur Bahasa Inggris</option>
                  <option value="Native Speaker">Native Speaker</option>
                  <option value="Konten Kreator">Konten Kreator</option>
                  <option value="Freelancer">Freelancer</option>
                  <option value="Lainnya">Lainnya</option>
               </select>
               <p>Email </p>
               <input type="email" name="email" placeholder="<?= $fetch_profile['email']; ?>" maxlength="20" class="box">
            </div>
            <div class="col">
               <p>Kata sandi lama :</p>
               <input type="password" name="old_pass" placeholder="Masukkan kata sandi lama" maxlength="20" class="box">
               <p>Kata sandi baru :</p>
               <input type="password" name="new_pass" placeholder="Masukkan kata sandi baru" maxlength="20" class="box">
               <p>Konfirmasi kata sandi :</p>
               <input type="password" name="cpass" placeholder="Konfirmasi kata sandi baru" maxlength="20" class="box">
            </div>
         </div>
         <p>Ubah foto :</p>
         <input type="file" name="image" accept="image/*" class="box">
         <input type="submit" name="submit" value="update" class="btn">
      </form>

   </section>

   <!-- registe section ends -->










   <?php include '../components/footer.php'; ?>

   <script src="../js/admin_script.js"></script>

</body>

</html>