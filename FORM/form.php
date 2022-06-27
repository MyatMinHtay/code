<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <?php 
        if(isset($_POST['sendBtn'])){
            echo "Your Firstname is $_POST[firstname] <br>";
            echo "and Your Lastname is $_POST[lastname] <br>";
        }else{?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <label for="">First Name</label>
                    <input type="text" name="firstname"> <br>
                    <label for="">Last Name</label>
                    <input type="text" name="lastname"> <br>
                    <input type="submit" name="sendBtn" value="Send">
                </form>
       <?php  }?>
    
   

    <!-- query string  -->
    <!-- <a href="respond.php?id=1&name=Johnny">Go to next page</a> -->
</body>
</html>