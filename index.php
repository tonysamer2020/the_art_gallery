
<?php
   
  $con =  new mysqli("localhost","root","1234", "user_registration");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['user']);
      $mypassword = mysqli_real_escape_string( $con,$_POST['pass']); 
      
      $sql = "SELECT * FROM login WHERE name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
       
         $_SESSION['login_user'] = $myusername;
         
         header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> The Art Gallery</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h1 class="text-center header"><span class="text-danger">The</span><span class="text-primary">Art</span><span class="text-warning">Gallery</span></h1>
        <div class="login-box">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center login-left">
                    <h2 class="font-italic">login Here</h2>
                    <br>
                    <form action="" method="post">
                        <div class="form-group">
                            <label class="">Username</label>
                            <input type="text" name="user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control">
                            <br>
                        </div>
                       
                       <button class="btn btn-primary  btn-block" type="submit"> Login </button>
                        <a href="register.php" class="btn btn-danger  btn-block" role="button" aria-pressed="true">Register</a>

                    </form>
                    <br>
                </div>
            </div>
        </div>
</body>

</html>

</html>