<!DOCTYPE html>
<html lang="en">
    <?php 
        session_start();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['age'] = $_POST['age'];
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <?php 
        echo "Welcome $_SESSION[username]";
        echo "<br> <a href='logout.php'>Logout</a>";
    ?>
</body>
</html>