<html>
<head>
	<title>Tambah Daftar Game</title>
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
        	<li><a href="index.php">Home</a></li>
            <li>
            	<a href="#">Games</a>
            	<ul>
                	<li><a href="add.php">Tambah Wishtlist</a></li>
                    <li><a href="indexcrud.php">Wishtlist Game</a></li>
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
				<div class="post-info"></div>
				
				<style>
					table{
						width: 410px;
						margin-top: 20px;
						margin-left: 20px;
						margin-right: 20px;
						padding: 40px;
						background: #FFF;
						border: 1px solid silver;
						border-radius: 5px;
					}
				</style>
				<body>
					
					<br/><br/>
					<center>
					<form action="add.php" method="post" name="form1">
						<table >
							<th colspan="4">Tambah Data Game</th>
							<tr> 
								<td>Nama</td>
								<td style="text-align:center">:</td>
								<td><input type="text" name="name"></td>
							</tr>
							<tr> 
								<td>Genre</td>
								<td style="text-align:center">:</td>
								<td><input type="text" name="genre"></td>
							</tr>
							<tr> 
								<td>Platform</td>
								<td style="text-align:center">:</td>
								<td><input type="text" name="platform"></td>
							</tr>
							<tr> 
								<td>Tanggal Rilis</td>
								<td style="text-align:center">:</td>
								<td><input type="text" name="released"></td>
							</tr>
							<tr> 
								<td>Developer</td>
								<td style="text-align:center">:</td>
								<td><input type="text" name="developer"></td>
							</tr>
							<tr> 
								<td></td>
								<td></td>
								<td style="padding: 5px" ><input type="submit" name="Submit" value="Add"></td>
							</tr>
						
						</table>
					</form>
	
					<?php
					if(isset($_POST['Submit'])) {
						$name = $_POST['name'];
						$genre = $_POST['genre'];
						$platform = $_POST['platform'];
						$released = $_POST['released'];
						$developer = $_POST['developer'];
						
						// include database connection file
						include_once("config.php");
								
						// Insert user data into table
						$result = mysqli_query($mysqli, "INSERT INTO games(name,genre,platform,released,developer) VALUES('$name','$genre','$platform','$released','$developer')");
						
						// Show message when user added
						echo "Game berhasil ditambahkan";
					}
					?>
				</body>		
			</div>
		</div>
		<!-- akhir bagian konten Blog -->
	</div>
</body>

</html>
