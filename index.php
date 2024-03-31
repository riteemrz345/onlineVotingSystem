<!DOCTYPE html>
<html>
<head>
	<title>login form </title>

</head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!-- <style>
		body{background: grey;
			
        background-image: url("safety-concept-login-on-digital-background-GX1GWK.jpeg");
			background-repeat: no repeat;
			background-attachment: fixed;
			background-size:100%;
			
}
		form{
			background: skyblue; border: 10px double red;
			border-radius: 10px; margin: 50px 0px 0px 200px;
			width: 400px; padding: 15px;
		}
		
	</style> -->
	
<body>
	<center><h1>Online Voting System</h1></center>

	<!-- <div class="div1" id="abc">
		<form  action="login.php" method="POST">
	<input type="text" name="name" placeholder="Enter your name"><br>
        <input type="number" name="phone" placeholder="Enter your number"><br>
        <input type="password" name="password" placeholder="Password"><br>
		<select name="role" id="">
			<option value="1">voter</option>
			<option value="2">group</option>
			
		</select>
		
       
        <input type="submit" value="submit">
		Not Registered? <a href="register.php">register</a>
	</form>
	
</div> -->
<div class="container" >
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default" style="margin-top:40%;">
                <div class="panel-heading" >
                    <h3 class="panel-title">Please sign in</h3>
                </div>
                <div class="panel-body">
                    <form  action="login.php" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <label>Name</label>
                            
								<input type="text" class="form-control" name="name" placeholder="Enter your name"><br>
                              
							</div>

                            <div class="form-group">
                                <label>Phone Number</label>
                                
								<input type="text" class="form-control" name="phone" placeholder="Phone"><br>
                         
                               
                            </div>
							
                                
                          
                            <div class="form-group">
                                <label>Password</label>
                                
								<input type="password" class="form-control" name="password" placeholder="Password"><br>
                         
                               
                            </div>
							
		
		
       
       
		
                            <div class="form-group">
                                
                                    <label>
                                       Role
                                    </label>
								
									<select name="role" class="dropdown" id="">
			<option value="1">voter</option>
			<option value="2">group</option>
			
		</select>

    </div>

	
                                
                               
                            </div class="col-md-5">
                             <button type="submit" class="btn btn-lg btn-success btn-block">Log in</button>

							<div class="row-md-10"> 
								Not Registered? <a href="register.php">register</a>
							</div>
                           
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>>