<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>database connections</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
				#navbar {
					background: #4CAF50;
				}
				
				.active {
					background: #2E7D32;
				}
				
				.navbar-default .navbar-nav>li>a {
					color: #ffffff;
				}
				
				.navbar>.container-fluid .navbar-brand {
					color: #ffffff;
				}
				
				ul a, div a {
					color: #ffffff;
					font-family: Raleway;
					font-size: +16px;
				}
				
				@font-face {
					font-family: "Raleway";
					src: url(bootstrap/fonts/Raleway.ttf);
				}
				
				#profilePic {
					background: #EFEBE9;
					display: inline-block;
				}
				
				#profilePic img {
					width: 300px;
					padding-left: 5px;
					padding-top: 30px;
					margin-bottom: 20px;
				}
				
				#profileDesc {
					display: inline-block;
					padding-left: 50px;
					padding-top: 30px;
				}
				
				#title {
					font-family: Raleway;
					font-size: +20px;
					padding-left: 10px;
				}
				
				#details {
					padding-top: 30px;
					height: 100px;
					padding-left: 10px;
					background: #FBE9E7;
					font-family: Raleway;
					font-size: +18px;
					border-radius: 10px;
				}
			</style>
  
</head>
<body>

<nav class="navbar navbar-default">
				<div id="navbar" class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">CMS</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="#">Home</a></li>
						<li><a href="Complaints.html">Complaints</a></li>
						<li><a href="View-Status.html">View Status</a></li>
						<li class="active"><a href="#">Profile</a></li>
					</ul>
				</div>
			</nav>

  <?php
  $username = "id810194_smit1";
  $password = "smit123";
  $host = "localhost";
  $Aadhar_No = "272";

  $connector = mysqli_connect($host,$username,$password)
      or die("Unable to connect");
    //echo "Connections are made successfully::";
  $selected = mysqli_select_db( $connector , "id810194_hackathon")
    or die("Unable to connect");

  //execute the SQL query and return records
  $result = mysqli_query($connector , "SELECT * FROM profile where Aadhar_No = '$Aadhar_No'");
  ?>
 
 <div class="container-fluid">
            <div id="profilePic" class="col-sm-3">
                <img src="images/profile.png">
            </div>

            <div id="profileDesc" class="col-sm-9">
                <p id="title"><b>
				<?php  
					while( $row = mysqli_fetch_assoc( $result ) or die(mysqli_error($connector)) )
					{
						echo "{$row['Aadhar_No']} &nbsp;&nbsp; | &nbsp;&nbsp; {$row['First_Name']} &nbsp;&nbsp; {$row['Surname']}";
			echo "</b></p>
                <p id=\"details\">";
						echo "{$row['Street']} &nbsp;&nbsp; | &nbsp;&nbsp; {$row['City']} &nbsp;&nbsp; | &nbsp;&nbsp; {$row['State']} &nbsp;&nbsp; | &nbsp;&nbsp; {$row['Zip_Code']}";
					}
 mysqli_close($connector); 
				?>
				</p>
            </div>
 </div>

</body>
</html>