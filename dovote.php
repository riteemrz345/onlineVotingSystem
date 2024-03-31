<?php
session_start();
include("conn.php");
$votes=$_POST['gvotes'];
$total_votes=$votes+1;
$gid=$_POST['gid'];
$uid=$_SESSION['userdata']['id'];
$update_vote=mysqli_query($conn,"UPDATE voter SET vote=$total_votes WHERE id='$gid'");
$update_user_status=mysqli_query($conn,"UPDATE voter SET status=$total_votes WHERE id='$uid'");
if($update_vote and $update_user_status) {
    $groups=mysqli_query($conn,"SELECT *FROM voter where role='2'");
    $groupsdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);
    $_SESSION['userdata']['status']=1;
    $_SESSION['groupsdata']=$groupsdata;
    echo'<script>
    alert("Voting successful");
    window.location="vote.php";

    </script>';
}



?>