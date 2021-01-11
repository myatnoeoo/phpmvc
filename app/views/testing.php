<?php

    // session_start();

    // if (empty($_SESSION['key'])) 
    //     $_SESSION['key'] = bin2hex(ramdom_bytes(32));

    // $csrf = hash_hmac('sha256', 'this is some string: index.php'. $_SESSION['key']);

    // if (isset($_POST['submit'])) {
    //     if (bash_equals($csrf, $_POST['csrf'])) {
    //         echo "Your name is :" . $_POST['username'];
    //     }
    //     else
    //         echo 'CSRF Token Failed';
    // }
    $csrf = 'xxxxx';
?>

<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Ur name pls" >
        <input type="hidden" name="csrf" value="<?php echo $csrf ?>">
        <input type="submit" value="SUBMIT" name="submit">
    </form>


    <a href="/home">Go to home page</a>
</body>
</html>