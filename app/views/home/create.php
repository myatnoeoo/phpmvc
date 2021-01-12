<?php
	//start a session
	session_start();

	//create a key for hash_hmac function
	if (empty($_SESSION['key']))
		$_SESSION['key'] = bin2hex(random_bytes(32));

	//create CSRF token
	$csrf = hash_hmac('sha256', 'this is some string: create.php', $_SESSION['key']);

	//validate token
	// if (isset($_POST['submit'])) {
	// 	if (hash_equals($csrf, $_POST['csrf'])) {
	// 		echo "Your name is: " . $_POST['username'];
	// 	} else
	// 		echo 'CSRF Token Failed!';
	// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create user</h1>

    <form action="/home/store" method="POST">
		Name :: <input type="text" name="name" placeholder="Enter your name please." > <br> <br>
		Email :: <input type="text" name="email" placeholder="Enter your email please." > <br> <br>
		Password :: <input type="text" name="password" placeholder="Enter your password please." > <br> <br>
		<input type="hidden" name="csrf" value="<?php echo $csrf ?>">
        <input type="submit">
    </form>

</body>
</html>