<?php
session_start();
if(!isset($_SESSION['userdata'])) {
    

    echo'<script>window.location="index.php";</script>';;
    
    
}
$userdata=$_SESSION['userdata'];
$groupsdata=$_SESSION['groupsdata'];
if ($_SESSION['userdata']['status']==0) {
    $status='<b style="color:red"> NOT VOTED</b>';
}else {
    $status='<b style="color:green">VOTED</b>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head><style>
    #group{
        margin:50px;
        display:inline-block;;
        border:10px solid black;

    }
    #profile{
        margin:50px;
        display:inline-block;;
        border:10px solid black;

    }

</style>
<body> <img src="vote.gif">
    <div id="profile">
    <center><h1><B>PROFILE</b></h1>
        <img src="profile-icon-design-free-vector.jpeg" alt="" height="200" width="200"><br><br><br><br>
           <b>Name:</b><?php echo $userdata['name'];?><br><br>
        
           <b>Mobile:</b><?php echo $userdata['phone'];?><br><br>
           <b>Gender:</b><?php echo $userdata['gender'];?><br><br>
           <b>Status:</b><?php echo $status;?><br><br></center>

    </div>
   
    <div class="Group">
    <h1><B>CANDIDATES:</b></h1><?php
        if($_SESSION['groupsdata'])
        {
            for ($i=0; $i <count($groupsdata) ; $i++) 
            { 
                ?>
                
                <img src="depositphotos_119659092-stock-illustration-male-avatar-profile-picture-vector.jpeg" id="group" alt="" height="200" width="200"><br><br>
                <b> Name:</b><?php echo $groupsdata[$i]['name'];?><br><br>
                <b>Votes:</b><?php echo $groupsdata[$i]['vote'];?>
                <form action="dovote.php" method="POST">
                    <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['vote'];?>">
                    <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id'];?>">
                    <?php if($_SESSION['userdata']['role']==1)
                    {
                         if($_SESSION['userdata']['status']==0)
                         {
                            ?>
                             <input type="submit" name="votebtn" value="vote" id="votebtn">
                             <?php
                           
                        }else
                        {
                           echo" <b>Status:</b>"; echo' <b style="color:green"> VOTED</b>';
                        }
                    }
                     ?>

                    
                   
                </form> <?php
                
                
            }
      
           
            
        }
        ?>
       
       
       

    </div>
</body>
</html>