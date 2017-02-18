<html>
    <head>
        <title>Registration</title>
        <style>
            body {
                background-image:url("images/Register_background.jpeg");
                background-repeat:no-repeat;
                background-size:cover;
                font-family: Raleway;
            }
            
            @font-face {
                font-family: "Raleway";
                src: url(bootstrap/fonts/Raleway.ttf);
            }
            
            div{
                margin-top: 60px;
                margin-left: 400px;
                width: 500px;
                height: 500px;
                background: #FFFFFF;
                border-radius: 20px;
                box-shadow: 5px 5px 5px #212121;
                transition: 0.3s;
            }
            
            div:hover {
                box-shadow: 10px 10px 10px #212121;
                transition: 0.3s;
            }

            .button {
                background: #212121;
                width: 100px;
                height: 40px;
                border-radius: 10px;
                border: none;
                color: #ECEFF1;
                text-align: center;
                font-size: +18px;
                cursor: pointer;
                transition: 0.3s;
                margin-top: 15px;
            }

            .button:hover {
                background: #ECEFF1;
                color: #212121;
                transition: 0.3s;
            }

            .inputformat{
                height: 40px;
                width: 250px;
                font-size: +20px;
                padding-left: 10px;
            }

            p.heading{
               font-size: +32px;
               text-style:bold;
               color:black;
               text-align:center;
               text-decoration:underline;
            }

            table,th,td{
               font-size: +23px;
               align:center;
            }

            tr{
               height:50px;
            }

            td.center{
                text-align:center;
            }

            h1{
               font-size: +35px;
            }
        </style>
    </head>
    <body>
        <form action="" method = "post">
            <div>
                <center>
                <br>
                    <h1>Registration Form</h1>
                    <table>
                        <tr>
                            <td><input type="text" name="Aadhar_no" class="inputformat" placeholder="Aadhar Number" required maxlength="8"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="Full_Name" class="inputformat" placeholder="Full Name" required ></td>
                        </tr>
                        <tr>
                            <td><input type="email" name="Email" class="inputformat" placeholder="Email" required></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="Password" class="inputformat" placeholder="Password" required></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="cpassword" class="inputformat" placeholder="Confirm Password" required></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="Mobile_no" class="inputformat" placeholder="Mobile No." required maxlength="10"></td>
                        </tr>
                        <tr>
                            <td class="center" colspan=2>
                            <input name="submit" type="submit" class="button" value="Register"/>
                            </td>
                        </tr>	 
                    </table>
                </center>
            </div>
        </form>
        <?php
            $con=mysqli_connect("localhost","id810194_smit1","smit123");
            if(!$con)
            {
                die('Could not connect: ' . mysql_error());
            }
            else
                echo "Yes";
            mysqli_select_db($con,"id810194_hackathon");
            $aadhar = $_POST["Aadhar_no"] ;
            $first_name = $_POST["Full_Name"] ;
            $email = $_POST["Email"] ;
            $password = $_POST["Password"];
            $cpassword = $_POST["cpassword"];
            $contact = $_POST["Mobile_no"];	
            if(isset($_POST['submit'])){	
                $query="INSERT INTO citizen_registartion VALUES ('$aadhar', '$first_name','$email','$password','$contact','0')";

                if($password!=$cpassword){
                    echo '<script language="javascript">';
                    echo 'alert("Entered password doesnot matches")';
                    echo '</script>';

                }	
                else if(strlen($aadhar)!=8){
                    echo '<script language="javascript">';
                    echo 'alert("Invalid Aadhar Number !")';
                    echo '</script>';
                }
                else if(strlen($contact)!=10){
                    echo '<script language="javascript">';
                    echo 'alert("Invalid Mobile Number !")';
                    echo '</script>';
                }	
                else if(mysqli_query($con,$query)){
                    echo '<script language="javascript">';
                    echo 'alert("You have been successfully registered !!!")';
                    echo '</script>';
                   header('Location: Login.html');
                    
                }	
                /*else
                {
                    echo '<script language="javascript">';
                    echo 'alert("Aadhar number Already Registered !")';
                    echo '</script>';
                }*/
            }
        ?>
    </body>
</html>