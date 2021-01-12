<?php
	//start a session
	session_start();

	//create a key for hash_hmac function
	if (empty($_SESSION['key']))
		$_SESSION['key'] = bin2hex(random_bytes(32));

	//create CSRF token
	$csrf = hash_hmac('sha256', 'this is some string: create.php', $_SESSION['key']);

	// validate token
	if (isset($_POST['submit'])) {
		if (hash_equals($csrf, $_POST['csrf'])) {
			echo "Your name is: ";
		} else
			echo 'CSRF Token Failed!';
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>Create user</h1>

    <form action="/home/store" method="POST">
		Name :: <input type="text" name="name" placeholder="Enter your name please." > <br> <br>
		Email :: <input type="email" name="email" placeholder="Enter your email please." > <br> <br>
		Password :: <input type="password" name="password" id="password" placeholder="Enter your password please." onKeyUp="checkPasswordStrength();"> <br> <br>
		Retype Password :: <input type="password" name="confirm_password" id="confirm_password" placeholder="Password again please" > <div id="password-strength-status"></div> <span id='message'></span>  <br> <br>
		
		<input type="hidden" name="csrf" value="<?php echo $csrf ?>">
        <input type="submit" value="Save">
    </form><br>

    <button onclick="location.href='/home/index';">Back to home</button>
</body>
<script>
	$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Password Matched!').css('color', 'green');
  } else 
    $('#message').html('Password Not Matching!!').css('color', 'red');
});

function checkPasswordStrength() {
	var number = /([0-9])/;
	var alphabets = /([a-zA-Z])/;
	var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
	
	if($('#password').val().length<6) {
		$('#password-strength-status').removeClass();
		$('#password-strength-status').addClass('weak-password');
		$('#password-strength-status').html("Weak (should be atleast 6 characters.)").css('color','red');
	} else {  	
	    if($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {            
			$('#password-strength-status').removeClass();
			$('#password-strength-status').addClass('strong-password');
			$('#password-strength-status').html("Strong").css('color','green');
        } else {
			$('#password-strength-status').removeClass();
			$('#password-strength-status').addClass('medium-password');
			$('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)").css('color','orange');
        } 
	}
}
</script>
</html>