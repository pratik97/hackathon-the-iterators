<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
        session_start();

        error_reporting(E_ALL ^ E_DEPRECATED);

        $host = 'localhost';
        $user = 'id810194_smit';
        $pass = 'smit123';

         //mysql_connect($host, $user, $pass);
$con = mysqli_connect("localhost","id810194_smit","smit123");

if (!$con) {
        die("Database connection failed: " . mysqli_connect_error());
    }
  echo "Connected successfully";

          $db_selection=mysqli_select_db($con,'id810194_complaint');
          if (!$db_selection) {
        die("Database selection failed: " . mysqli_connect_error());
    }

          $pass = $_POST["pass"];
          $email = $_POST["emailid"];   

          $_SESSION["email_id"]=$email;
          $_SESSION["passwd"]=$pass;

          $a = rand(100,999999);
           //echo $a;
            $_SESSION["random"]=$a;


         $to = $email;
         $subject = "Your Registration Varification Code";
         
         $message = $a;
         
         $header = "From:hackingpro20161@gmail.com \r\n";
         $header = "Cc:hackingpro20161@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
           // echo "Message sent successfully...";
              echo "check your email for verification code".'<br>';
            
            $sql = "insert into random values (NULL,'$email',$a)";
            mysqli_query($con,$sql);

            include ('VerifyEmail.php');

         }else {
            echo "Message could not be sent...";
         }
         mysqli_close($con);
      ?>
      
   </body>
</html>