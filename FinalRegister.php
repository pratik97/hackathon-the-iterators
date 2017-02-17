<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
       
         session_start();
         
        error_reporting(E_ALL ^ E_DEPRECATED);
    

        $v;
        $e="";


        $email = $_SESSION["email_id"];
        $passw = $_SESSION["passwd"];
        $veri_code = $_POST["code"];
        
        $host = 'localhost';
        $user = 'id810194_smit';
        $pass = 'smit123';

         $con=mysqli_connect($host, $user, $pass);

          mysqli_select_db($con,'id810194_complaint');


         $retval = "select * from random where ran_num = $veri_code";

          $res = mysqli_query($con,$retval);
   
         while($temp=mysqli_fetch_assoc($res))
                { 
			
                    		$e = $temp['emailid'];
                                $v = $temp['ran_num'];
                                
                  }
         /* echo $v.'<br>';
          echo $e.'<br>';
          echo $email.'<br>';
          echo $passw.'<br>';
          echo $veri_code;*/
         if($v == $veri_code and $e == $email)
          {
              $sql2 = "insert into register value (NULL,'$email','$pass')";
              mysqli_query($con,$sql2);
             
             include ('welcome.php');
          }
          else
          {
             echo "You have entered something wrong";
           }
        mysqli_close($con);
      ?>
      
   </body>
</html>