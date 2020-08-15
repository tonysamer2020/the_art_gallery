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
                    <form action="home.php" method="post">
                        <div class="form-group">
                            <label class="">Username</label>
                            <input type="text" name="user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control">
                            <br>
                        </div>
                       
                        <input type="submit" class="btn btn-primary  btn-block" value="login" onclick="home.php" />
                        <input type="submit" class="btn btn-danger  btn-block" value="Register" onclick="register.php" />

                    </form>
                    <br>
                </div>
            </div>
        </div>
</body>

</html>

</html>