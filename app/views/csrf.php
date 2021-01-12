<?php
	//start a session
	session_start();

	//create a key for hash_hmac function
	if (empty($_SESSION['key']))
		$_SESSION['key'] = bin2hex(random_bytes(32));

	//create CSRF token
	$csrf = hash_hmac('sha256', 'this is some string: csrf.php', $_SESSION['key']);

	//validate token
	if (isset($_POST['submit'])) {
		if (hash_equals($csrf, $_POST['csrf'])) {
			echo "Your name is " . " [ " . $_POST['name'] . " ] " . " and your email is ". " [ " . $_POST['email'] . " ] " . " and your password is ". " [ " . $_POST['password']  . " ] " . "." ;
		} else
			echo 'CSRF Token Failed!';
	}
?>
<html>
	<head>
		<title>CSRF testing </title>
	</head>
	<body>
		<form method="POST" action="/csrf/test">
		Name :: <input type="text" name="name" placeholder="Enter your name please." > <br> <br>
		Email :: <input type="text" name="email" placeholder="Enter your email please." > <br> <br>
		Password :: <input type="text" name="password" placeholder="Enter your password please." > <br> <br>
			<input type="hidden" name="csrf" value="<?php echo $csrf ?>">
			<input type="submit" name="submit" value="SAVE">
		</form>
	</body>
</html>