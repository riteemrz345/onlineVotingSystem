<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head><?php
 if (isset($_FILES['file'])) {
   $targetDirectory = 'photo/';
   $targetFile = $targetDirectory . basename($_FILES['file']['name']);
   
   if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
       echo "The file ". basename($_FILES['file']['name']). " has been uploaded.";
   } else {
       echo "Sorry, there was an error uploading your file.";
   }
}
?>
<body>
    <form action="file.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" >
    </form>
</body>
</html>