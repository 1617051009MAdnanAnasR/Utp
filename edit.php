<?php
include_once("config.php");
 
// cek jika form dah tersubmit untuk daftar game, kemudian redirect ke daftar game sesudah update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$genre=$_POST['genre'];
	$platform=$_POST['platform'];
	$released=$_POST['released'];
	$developer=$_POST['developer'];
		
	// update game
	$result = mysqli_query($mysqli, "UPDATE games SET name='$name',genre='$genre',platform='$platform',released='$released',developer='$developer' WHERE id=$id");
	
	header("Location: indexcrud.php");
}
?>
<?php
// Display selected data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech data based on id
$result = mysqli_query($mysqli, "SELECT * FROM games WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$genre = $user_data['genre'];
	$platform = $user_data['platform'];
	$released = $user_data['released'];
	$developer = $user_data['developer'];
}
?>
<html>

	<head>
	<title>Edit Daftar Game</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	
	<!-- bagian header template -->
	<header>
		<h1 class="judul">D.GAMES</h1>
		<p class="deskripsi">Website Penunjang Layanan Untuk Para Pelanggan Toko Games X </p>
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
				<div class="post-info">
		</div>

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
<head>	
	<title>Edit Data Game</title>
</head>
 
<body>
	<center>
	<form name="update_user" method="post" action="edit.php">
		<table>
			<th colspan="4">Edit Data Game</th>
			<tr> 
				<td>Nama</td>
				<td style="text-align:center">:</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Genre</td>
				<td style="text-align:center">:</td>
				<td><input type="text" name="genre" value=<?php echo $genre;?>></td>
			</tr>
			<tr> 
				<td>Platform</td>
				<td style="text-align:center">:</td>
				<td><input type="text" name="platform" value=<?php echo $platform;?>></td>
			</tr>
			<tr> 
				<td>Tanggal Rilis</td>
				<td style="text-align:center">:</td>
				<td><input type="text" name="released" value=<?php echo $released;?>></td>
			</tr>
			<tr> 
				<td>Developer</td>
				<td style="text-align:center">:</td>
				<td><input type="text" name="developer" value=<?php echo $developer;?>></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
			</div>
		</div>
		<!-- akhir bagian konten Blog -->
	</div>
</body>
</html>
