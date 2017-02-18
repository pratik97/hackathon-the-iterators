<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Complaint Solution</title>
        <link rel="stylesheet" type="text/css" href="view.css" media="all">
        <script type="text/javascript" src="view.js"></script>
        <script type="text/javascript" src="calendar.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
        <style>
            body {
                background-image: url('images/solution.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
            
            #form_container {
                background: #fafafa;
                margin-top: 20px;
                border-radius: 10px;
            }
            
            #element_2 {
                width: 200px;
                height: 40px;
                font-size: +20px;
            }
            
            #saveForm {
                background: #212121;
                width: 100px;
                height: 50px;
                margin-left: 225px;
                color: #F5F5F5;
                border: none;
                border-radius: 10px;
                transition: 0.3s;
            }
            
            #saveForm:hover {
                background: #f5f5f5;
                color: #212121;
                transition: 0.3s;
            }
            
            #element_2_1 {
                height: 40px;
            }
        </style>
    </head>
    
    <body class="container-fluid">
        <div class="col-sm-2"></div>
        <div id="form_container" class="col-sm-8">

            <h1><a>Complaint Solution</a></h1>
            <form id="form_14019" class="appnitro"  method="post" action="">
                <h2>Complaint Solution</h2>
                <p>This is your form description. Click here to edit.</p>
                <ul>
                    <li id="li_2">
                        <div>
                            <input id="element_2" name="Complain_No" class="element text medium" type="text" placeholder="Complaint-ID" value="" required/> 
                        </div> 
                    </li>	
                    <li id="li_1">
                        <h3>Solution: </h3>
                        <div>
                            <textarea id="element_1" name="Comment" class="element textarea medium" required></textarea> 
                        </div> 
                    </li>
                    <li id="li_2">
                        <h3 class="description" for="element_2">Date: </h3>
                        <input id="element_2_1" name="element_2_1" class="element text" value="" type="date" required>
                    </li>

                    <li class="buttons">
                        <input type="hidden" name="form_id" value="14019" />
                        <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
                    </li>
                </ul>
            </form>
        </div>
        <div class="col-sm-2"></div>
        <?php
            $database="id810194_hackathon";
            $Comment = isset($_POST['Comment']) ? $_POST['Comment'] : '';
            $Complain_No = isset($_POST['Complain_No']) ? $_POST['Complain_No'] : '';       
        
            $con=mysqli_connect("localhost","id810194_smit1","smit123");
            if(!$con)
            {
                die('Could not connect: ' . mysqli_error());
            }
            mysqli_select_db($con,"id810194_hackathon");

            if(isset($_POST['submit'])){
                $query="UPDATE complaint_reg SET Comment='$Comment' WHERE Complain_No='$Complain_No'";                 if(mysqli_query($con,$query)){
                    echo '<script language="javascript">';
                    echo 'alert("your complaint has been successfully sent!!!")';
                    echo '</script>';
                }
            }
            mysqli_close($con);
	   ?>
	</body>
</html>