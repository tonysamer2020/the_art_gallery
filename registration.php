
<?php

$username = $_POST["user"];
$password = $_POST["pass"];

if(!empty($username) || !empty($username)){
 
    $con = new mysqli("localhost","root","1234","user_registration");

    if(mysqli_connect_error()){
        die('Connect Error(' . mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
        $SELECT= "SELECT name FROM login WHERE name= ?   LIMIT 1";
        $INSERT= "INSERT Into login (name, password) values (?, ?)";
        
        $stmt = $con->prepare($SELECT);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($username);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();

            $stmt = $con->prepare($INSERT);
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            echo "New Record";
        }
        else{
            echo "Name already Taken";
        }
        $stmt->close();
        $con->close();
    }

} else{
    echo "All fields are required";
    die();
}
?>
