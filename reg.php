<html>
<head>
<title>customerdeatils</title>
</head>
<body>

	<center>
		<h1>Customer Details</h1>
	<form action=" " method="post">
	<table align="center">
		<tr> 
			<td>Adhaar No</td>
			<td><input type="text" name="adhaar"></td>
		</tr>
		
		<tr>
			<td>E-mail</td>
			<td><input type="text" name="email"></td>
		</tr>
		
        <tr>
        
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
		</table>
		
		
		
	
	<center>
		<input type="submit" name="submit" value="submit">
		
	</center>
	</form>
	<?php
			
			include("demo.php");	
			
			
		?>
		
	<form action="" method="post">
	<table align="center">
		
		<tr>
			<td>E-mail</td>
			<td><input type="text" name="email1"></td>
		</tr>
		
        <tr>
        
            <td>Password</td>
            <td><input type="password" name="password1"></td>
        </tr>
	</table>
	<center>
		<input type="submit" name="login" value="login">
		
	</center>
	</form>
	
<?php
	$database="complaint";
	$adhaar = isset($_POST['adhaar']) ? $_POST['adhaar'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	$flag = isset($_POST['flag']) ? $_POST['flag'] : '';
	$email1 = isset($_POST['email1']) ? $_POST['email1'] : '';
	$password1 = isset($_POST['password1']) ? $_POST['password1'] : '';
	$con=@mysql_connect("localhost","root","");
	if(!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("$database", $con);
	if(isset($_POST['submit']))
		{
			
			$query="INSERT INTO registration_deatils(adhaar,email,password)
			VALUES ('$adhaar', '$email','$password')";
			if(mysql_query($query,$con))
				{
					echo "1 record added";
					$to = "smitshah5796@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: https://sjksd.000webhostapp.com/" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
					
				}
		}
		if(isset($_POST['login']))
		{
			$sql="Select * from registration_deatils where email='$email1' and password='$password1'";
			$result=mysql_query($sql) or die(mysql_error());
			$count=mysql_num_rows($result);
			if($count==1)
			{
				echo "login successful";
				header('Location: temp.php');
				
				include("temp.php");
			}
			else
			{
				echo "Invalid email or password";
			}
			
		}
	mysql_close($con);
?>	
	
</body>
</html>	