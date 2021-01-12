<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Edit user</h1>
    <form action="/home/update/<?php echo $user['id'] ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
        Name :: <input type="text" name="name" value="<?php echo $user['name'] ?>"> <br> <br>
        Email :: <input type="text" name="email" value="<?php echo $user['email'] ?>"><br> <br>
        Password :: <input type="text" name="password" value="<?php echo $user['password'] ?>">
        <input type="submit" value="Save">
    </form>
    <br>
    <button onclick="location.href='/home/index';">Back to home</button>
</body>
</html>