<?php
include("conn.php");
$name=$_POST['name'];
$phone=$_POST['phone'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$role=$_POST['role'];
if($password==$cpassword){
    
    
   
    
    $insert=mysqli_query($conn,"INSERT INTO voter(name,age, gender,phone,password,photo,role,status,vote) VALUES('$name','$age','$gender','$phone','$password','$image','$role',0,0)");
   
}
if ($insert) {
   echo' <script>alert("Registered succesfully");</script>';
}else{
    echo' <script>alert("Registered failed");</script>';
}




    ?>