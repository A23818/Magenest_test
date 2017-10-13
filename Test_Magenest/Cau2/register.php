<!DOCTYPE html>
<html>
<head>
	<title>Test_3</title>
	<meta charset="utf-8">
</head>
<body>

<?php
	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
		$password = $_POST["pass"];
		$name = $_POST["name"];
		$email = $_POST["email"];
		
		if ($username == "" || $password == "" || $name == "" || $email == "") {
			echo "Bạn vui lòng nhập đầy đủ thông tin";
		}else{
			
			$sql="INSERT INTO user(user, password, name, email) VALUES ('$username','$password','$name','$email')";
			//
			mysqli_query($link,$sql);
			echo "Chúc mừng bạn đã đăng ký thành công";
		}
	}
?>
	<form action="register.php" method="post">
		<table>
			<tr>
				<td colspan="2">Form đăng ký</td>
			</tr>	
			<tr>
				<td>Username :</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" id="pass" name="pass"></td>
			</tr>
			<tr>
				<td>Ho Ten :</td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Dang ky"></td>
			</tr>
 
		</table>
		
	</form>
</body>
</html>



