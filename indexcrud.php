<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM games ORDER BY id DESC");
?>
 
<html>

    <head>
	<title>Daftar Game</title>
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
				<div class="post-info"></div>
                
                <style>
                    
                    th, td {
                        padding: 10px;
                    }
                    th {
                        text-align: left;
                    }
                </style>
                    
                    <body>
                        <table border= "0" width="800px" rules="none">
                        <tr bgcolor="#1abc9c">
                            <th>Nama</th>
                            <th>Genre</th>
                            <th>Platform</th>
                            <th>Tanggal Rilis</th>
                            <th>Developer</th>
                            <th>Opsi</th>
                        </tr>
                        <?php  
                            while($user_data = mysqli_fetch_array($result)) {         
                                echo "<tr bgcolor='lightgrey'>";
                                    echo "<td>".$user_data['name']."</td>";
                                    echo "<td>".$user_data['genre']."</td>";
                                    echo "<td>".$user_data['platform']."</td>";    
                                    echo "<td>".$user_data['released']."</td>"; 
                                    echo "<td>".$user_data['developer']."</td>";
                                    echo "<td>
                                        <a href='edit.php?id=$user_data[id]'>Update</a> 
                                        <a href='delete.php?id=$user_data[id]'>Delete</a>
                                    </td>
                                </tr>";
                            }
                        ?>
                        </table>
                    </body>
			</div>
		</div>
		<!-- akhir bagian konten Blog -->
	</div>
</body>     
    
</html>
