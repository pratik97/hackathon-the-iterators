
<?php
    $con=mysqli_connect("localhost","root","");

    if(!$con){
        die('Could not connect: ' . mysql_error());
    }
    mysqli_select_db($con,"hackathon");
    $email=$_POST["email"];
    $password=$_POST["password"];
    $query="select Password from citizen_registration where Email='$email'";
    $result=mysqli_query($con,$query);
    $count=mysqli_num_rows($result);
    $row = mysqli_fetch_row($result);
    //echo $row[0];
    if($count>0 && $password==$row[0])
        echo "Login Successful";
    else
        echo "Incorrect username or password";
?>
