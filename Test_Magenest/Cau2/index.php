<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		 header('Location: login.php');
	}
?>
<html>
<head>
	<title>Trang chu</title>
	<meta charset="utf-8">
</head>
<body>
	Chúc mừng Username là:  <?php echo $_SESSION['username'];  ?> đã đăng nhập thành công!
</body>
</html>