<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
    <?php 
        if(isset($_POST['btnUpload'])){
           $fileName = $_FILES['fileUpload']['name'];
           $temp = $_FILES['fileUpload']['tmp_name'];
            // echo $_FILES['fileUpload']['size'] . "<br>";
            // echo $_FILES['fileUpload']['type'] . "<br>";
            // echo $_FILES['fileUpload']['error'] . "<br>";
            $dest = "./uploaded_files/" . $fileName;
            if(move_uploaded_file($temp, $dest)){
                echo "file upload success";
            } else{
                echo "file upload file";
            }
    ?>

    <?php 
        }else{ 
           
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
            <input type="file" name="fileUpload" />
            <input type="submit" name="btnUpload" value="Upload">
        </form>

     <?php 
        }
    ?>
</body>
</html>