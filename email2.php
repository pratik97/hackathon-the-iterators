<html>
<head>
    <title>NETTUTS > Sign up</title>
</head>
<body>
    <!-- start header div --> 
    <div id="header">
        <h3>NETTUTS > Sign up</h3>
    </div>
    <!-- end header div -->   
     
    <!-- start wrap div -->   
    <div id="wrap">
        <!-- start PHP code -->
        
        <!-- stop PHP Code -->
     
        <!-- title and description -->    
        <h3>Login Form</h3>
        <p>Please enter your name and password to login</p>
         
        <?php
        //echo 'on high';
            if(isset($_POST['aadhar_number']) && !empty($_POST['aadhar_number']) AND isset($_POST['name']) && !empty($_POST['name']) AND isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']))                // Form Submited
                $aadhar_number=mysql_escape_string($_POST['aadhar_number']);
                $name = mysql_escape_string($_POST['name']); 
                $email = mysql_escape_string($_POST['email']);
                $flag=0;
                if(strlen($aadhar_number)!=8)
                    $flag=1;
                    
                //email validation
                if($flag!=1)
                {
                    if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
                        // Return Error - Invalid Email
                        $flag=1;
                    }   
                    
                }
                
        if($flag==0)
            $msg = 'Your account has been made,  please verify it by clicking the activation link that has been send to your email.';
        else
            $msg = 'The email you have entered is invalid, please try again.';
            
            
                if(isset($msg))
                {  // Check if $msg is not empty
                echo $msg;     
                }
                else
                {
                    echo 'not registered';
                }
            if(isset($_POST['submit']))
               {
                mysql_connect("localhost", "root", "") or die(mysql_error()); // Connect to    database server(localhost) with username and password.
                mysql_select_db("modu1") or die(mysql_error()); // Select registrations database.
                $msg = 'Your account has been made,  please verify it by clicking the activation link   that has been send to your email.';
                $hash = md5( rand(0,1000) );
                $password = rand(1000,5000); 
                mysql_query("INSERT INTO users (aadhar_number, username, password, email, hash) VALUES(
            '". mysql_escape_string($aadhar_number) ."', 
            '". mysql_escape_string($name) ."', 
            '". mysql_escape_string(md5($password)) ."', 
            '". mysql_escape_string($email) ."', 
            '". mysql_escape_string($hash) ."') ") or die(mysql_error()); 
            }
                
            
                    
                
            
        ?>
        
         
        <!-- start sign up form -->   
         <form action="" method="post">
            <label type="text" name="aadhar_number" value="">Aadhar No.</label>
            <input type="text" name="aadhar_number" value=""/>
            <label for="name">Name:</label>
            <input type="text" name="name" value="" />
            <label for="email">Email:</label>
            <input type="text" name="email" value="" />
            <lable type="password" name = "password">Password</lable>
            <input type="password" name = "password"/>
             
            <input type="submit" class="submit_button" value="Sign up" name="submit" />
        </form>
        <!-- end sign up form --> 
         
    </div>
    <!-- end wrap div --> 
</body>
</html>

