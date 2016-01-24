<?php 
session_start();
if(isset($_SESSION['user'])){
	header('location:index.php');
}


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	
 	<form action="login.php" method="post">
 		<input type="text" name="nama">
 		<input type="submit" value="Login" name="login">
 	</form>


 	<?php 

 		if(isset($_POST["login"])){


 			$user = "agix";
 			$userinput = $_POST['nama'];

 			if( $userinput == $user ){
 				$_SESSION['user'] = $userinput;
 			}

 			else {
 				echo "Pengguna tidak ada";
 			}

 		}

 	 ?>
</body>
</html>