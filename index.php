<?php
session_start();

if(!isset($_SESSION['user'])){
	header('location:login.php');
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
.text-center {
	text-align:center;
}
	</style>

</head>
<body>
	

	<form action="index.php" method="POST">
		<table border="1px">
			<tr>
				<td colspan="3">
					<h2 class="text-center">Masukan Nilai</h2>
				</td>
			</tr>
			<tr>
				<td>Nilai</td>
				<td>:</td>
				<td>
					<input type="number" name="nilai" placeholder="Nilai 0-100">
				</td>
			</tr>
			<tr>
				<td align="right" colspan="3">
					<input type="submit" name="masukan">
				</td>
			</tr>
		</table>
	</form>



	<a href="logout.php">Keluar</a>

	<?php 
	if(isset($_POST['masukan'])){

		$nilai = $_POST['nilai'];

		if($nilai >= 90 && $nilai <= 100){
			echo "<p>Anda mendapatkan <u>A</u> dan dinyatakan <u>Anda Lulus</u></p>";	
		}
		else if($nilai >= 80 && $nilai <= 89){
			echo "Anda mendapatkan B dan dinyatakan Anda Lulus";
		}
		else if($nilai >= 70 && $nilai <= 79){
			echo "Anda mendapatkan C dan dinyatakan Anda Lulus";	
		}
		else if($nilai >= 50 && $nilai <= 69 ){
			echo "Anda mendapatkan D dan dinyatakan Anda Lulus Jika Melakukan Remidi";	
		}
		else if ($nilai >= 0 && $nilai <= 49){
			echo "Anda mendapatkan E dan dinyatakan Anda Tidak Lulus";	
		}

		
	}


	 ?>
</body>
</html>