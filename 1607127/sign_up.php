 <?php include('server.php'); ?>
<!Doctype html>
<html>
    <head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Php and mysql</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
		<div class= "container">
        <form method="post" action="sign_up.php">
                      <?php include('errors.php'); ?>
		    <div class="heading">
        <h2>SignUp</h2>
        </div>
			<div class="form-group">
            <label for="usr">Username</label>
                <input type="text" name="username" class = "form-control" value="<?php echo $username; ?>"> <br>
            
            <div class="form-group">
                <label for="usr">Email</label>
                <input type="email" name="email" class = "form-control" value="<?php echo $email; ?>"> <br>
            </div>
            <div class="form-group">
                <label for="pwd">Password</label> <br>
                <input type="password" name="password_1" class = "form-control"> <br>
            </div>
            <div class="form-group">
                <label for="pwd">Confirm password</label> <br>
                <input type="password" name="password_2" class = "form-control"> <br>
            </div>
            <div class="form-group">
                <input type="submit" name="register"  value="register" class="btn btn-primary btn-block">
            </div>
            <p>
                Already a member?<a href="login.php">Sign in</a>
            </p>
			</div>
        </form>
    </div>
	</body>
    
</html>