<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>
<html>
<head>
	<title>D.Games</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	
	<!-- bagian header template -->
	<header>
		<h1 class="judul">D.GAMES</h1>
		<p class="deskripsi">Website Penunjang Layanan Untuk Para Pelanggan Toko Games X</p>
	</header>
	<!-- akhir bagian header template -->
	
	<div class="wrap">
		<!-- bagian menu		 -->
		<nav>
    	<ul>
        	<li><a href="#">Home</a></li>
            <li>
            	<a href="#">Games</a>
            	<ul>
                	<li><a href="add.php">Tambah Wishlist</a></li>
                    <li><a href="indexcrud.php">Wishlist Game</a></li>
                </ul>
            </li>
            <li><a href="populer.html">Populer</a></li>
            <li><a href="about.html">Profile Us</a></li>
        </ul>
    </nav>
		<!-- akhir bagian menu -->
 
		<!-- bagian sidebar website -->
		<aside class="sidebar">

			<div class="widget">
				<h2>Info Kilat</h2>
				<p style="text-align:justify;">Tahukah Kamu?<br>Bermain video game yang berkaitan dengan taktik dan hafalan bisa membantu seseorang berpikir lebih fleksibel.</div>
			<div class="widget">
				<h2>Nama Kelompok</h2>
                            <p>1. M Adnan Anas<br>2.Yayan Budi W<br>3.Cindy Prakasa P</p>
			</div>
			<div align="right">
				<a href="logout.php"><button class="tombol">Logout</button></a>
			</div>
			
		</aside>
			<!-- akhir bagian sidebar website -->
 
		<!-- bagian konten Blog -->
		<div class="blog">
			<div class="conteudo">
				<div class="post-info">
				</div>
				<img src="layla.jpg">
				<h1> Games Mobile Populer Berbasis Android dan IOS</h1>
				<hr>
				<p style="text-align:justify;">
				Mobile Legends: Bang Bang adalah sebuah permainan MOBA yang dirancang untuk ponsel. Kedua tim lawan berjuang untuk mencapai dan menghancurkan basis musuh sambil mempertahankan basis mereka sendiri untuk mengendalikan jalan setapak, tiga "jalur" yang dikenal sebagai "top", "middle" dan "bottom", yang menghubungkan basis-basis.

Di masing-masing tim, ada lima pemain yang masing-masing mengendalikan avatar, yang dikenal sebagai "hero", dari perangkat mereka sendiri. Karakter terkontrol komputer yang lebih lemah, yang disebut "minions", bertelur di basis tim dan mengikuti tiga jalur ke basis tim lawan, melawan musuh dan menara

				</p>				
			</div>
		</div>
		<!-- akhir bagian konten Blog -->
	</div>
</body>
</html>
