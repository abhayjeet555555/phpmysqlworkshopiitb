<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="?" method="POST" enctype="multipart/form-data">
    <p><input type="file" name ="file">  </p>
    <p><input type ="submit" name="upload" value="upload image"></p>

    
    </form>
    <?php
if(isset($_POST["upload"])){
    $file_name=$_FILES['file']['name'];

    $file_loc=$_FILES['file']['tmp_name'];
    $file_store="upload/".$file_name;
    move_uploaded_file($file_loc,$file_store);
    echo "files are uploaded";
   


}
?>
</body>
</html>