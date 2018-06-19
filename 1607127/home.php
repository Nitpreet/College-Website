<?php include('server.php'); 

if(empty($_SESSION['username'])){
    header('location: login.php');
}
?>
<!Doctype html>
<html>
    <head>
        <title>User registration system using php and mysql</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
        <h2>Home page</h2>
        </div>
        <div class="content">
            <?php if (isset($_SESSION['success']))?>
            <div class="error success">
                <h3>
        <?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        ?>
                </h3>
            </div>
           
            
            <?php if(isset($_SESSION["username"]));?>
            <p>Welcome <strong><?php echo $_SESSION['username'];
			?></strong></p>
				
			
            <p><a href="home.php?logout='1'" style="color:red;">Logout</a></p>
            
        </div>
       
    </body></html>