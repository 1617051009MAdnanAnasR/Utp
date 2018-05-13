<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];   
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "
        <link rel='stylesheet' href='style.css'>
        <body>
          <font color='black'><center><h2>Welcome Back!!</h2></font>
          <h3>Untuk Akses Halaman Website Anda Diharuskan Login Terlebih Dahulu</h3><br>
          <div class='kotak'><br><br>
            <div align='center'><b>Username Belum Terdaftar!</b> <a href='login.php'>Back</a></div>
          </div>
        </body>";
   } else {
     if($pass <> $hasil['password']) {
       echo "
       <link rel='stylesheet' href='style.css'>
        <body>
          <font color='black'><center><h2>Welcome Back!!</h2></font>
          <h3>Untuk Akses Halaman Website Anda Diharuskan Login Terlebih Dahulu</h3><br>
          <div class='kotak'><br><br>
            <div align='center'><b>Password Anda Salah!</b> <a href='login.php'>Back</a></div>
          </div>
        </body>
       ";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:index.php');
     }
   }
?>
