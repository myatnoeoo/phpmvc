<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>Name : <?php echo $user['name'] ?></p>
    <p>Email : <?php echo $user['email'] ?></p>

    <button onclick="location.href='/home/index';">Back to home</button>
</body>
</html>