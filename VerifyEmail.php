<html>
    <head>
        <title>Verify Email</title>
        <style>
            body {
                background-image: url('images/verify_email_img.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
            
            @font-face {
                font-family: "Raleway";
                src: url(bootstrap/fonts/Raleway.ttf);
            }
            
            #container {
                background: #FAFAFA;
                font-family: Raleway;
            }
        </style>
        
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
    </head>
    
    <body class="container-fluid">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" id="container">
            <center>
                <form name="ve" method="post" action="FinalRegister.php">
                    <input type="text" name="code" placeholder="Verification Code"><br>
                    <input type="submit" name="register" value="Register">
                    <input type="reset" name="clear" value="Clear">
                </form>
            </center>
        </div>
        <div class="col-sm-4"></div>
    <body>
</html>