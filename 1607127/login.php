<?php include('server.php'); ?>
<!Doctype html>
<html>
    <head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title> Php and mysql</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
	<div class="container">
        
        
        <form method="post" action="login.php">
		<div class="heading">
        <h2>Login</h2>
        </div>
           <?php include('errors.php'); ?>
            <div class= "form-group">
			
			
                <label>Username</label>
                <input type="text" name="username" class = "form-control" placeholder = "Username"> <br>
            
            
            
                <label>Password</label>
                <input type="password" name="password" class = "form-control" placeholder = "Password"> <br>
            
            
            
					<input type="submit" name="login"  value="Login" class="btn btn-success btn-block">
			
				</div>
				<p>
					Not a member?<a href="sign_up.php">Sign up</a>
				</p>
			</form>
		</div>
	</body>
    
</html>