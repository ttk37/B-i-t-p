<?php
$name = $_POST['user'];
$pass = $_POST['pass'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>user
        <?php echo $name; ?>
    </h1>
    <h2>
        Pass
        <?php echo $pass; ?>
    </h2>
</body>

</html>