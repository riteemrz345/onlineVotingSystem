<?php
session_start();
include("conn.php");
$name=$_POST['name'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$role=$_POST['role'];

$log=mysqli_query($conn,"SELECT * FROM  voter WHERE name='$name' AND phone='$phone' and password='$password' and role='$role'");
if($log) {
   if(mysqli_num_rows($log)>0){
    $userdata=mysqli_fetch_array($log);
    $groups=mysqli_query($conn,"SELECT *FROM voter where role='2'");
    $groupsdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);
    $_SESSION['userdata']=$userdata;
    $_SESSION['groupsdata']=$groupsdata;
    echo'<script>alert("Login successfuly");</script>';
    echo'<script>
    
    window.location="vote.php";
    </script>';
    

   
  
   }else{
    echo'<script>
    alert("User Not found");
    window.location="index.php";
    </script>';

   }

    }

?>