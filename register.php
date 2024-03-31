<!DOCTYPE html>
<html lang="en"></body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head><style>
    body{
        background-image: url("1700224531phpTsX8De.jpeg");
			background-repeat: no repeat;
			background-attachment: fixed;
			background-size:100%;
			
    }
    form{
			background: skyblue; border: 10px double red;
			border-radius: 10px; margin: 50px 0px 0px 200px;
			width: 400px; padding: 15px;
            bottom:150x;
            left:100px;
            position: relative;
        }
        
</style>
<body>

    <form action="data.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter your name"><br>
        <input type="number" name="phone" placeholder="Enter your number"><br>
        <input type="text" name="age" placeholder="enter age"><br>
        MALE:<input type="radio" name="gender" value="male"><br>
        FEMALE: <input type="radio" name="gender" value="female"><br>
        <input type="text" name="password" placeholder="enter password"><br>
        <input type="text" name="cpassword" placeholder="Confirm password"><br>
        Upload image:<input type="file" name="photo"><br>
		Select role:<select name="role" id="">
			<option value="1">voter</option>
			<option value="2">group</option>
		</select><br>
        
        <input type="submit" value="submit">
   
    </form>
    

</html>