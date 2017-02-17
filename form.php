<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Complaint</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>
<body id="main_body" background="c.jpg" >
	
	<img id="top" src="top.png" alt="">
	
	<div id="form_container">
	
		<h1><a>Complaint</a></h1>
		<form id="form_13847" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Lodge Complaint</h2>
			
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Name </label>
		<span>
			<input id="element_1_1" name= "Fname" class="element text" maxlength="255" size="8" value="" required/>
			<label>First</label>
		</span>
		<span>
			<input id="element_1_2" name= "Lname" class="element text" maxlength="255" size="14" value="" required/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Adhaar no </label>
		<div>
			<input id="element_2" name="Adhaarno" class="element text medium" type="text" maxlength="255" value="" required/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Address </label>
		
		<div>
			<input id="element_3_1" name="Address1" class="element text large" value="" type="text" required>
			<label for="element_3_1">Street Address</label>
		</div>
	
		<div>
			<input id="element_3_2" name="Address2" class="element text large" value="" type="text">
			<label for="element_3_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="element_3_3" name="City" class="element text medium" value="" type="text" required>
			<label for="element_3_3">City</label>
		</div>
	
		
	
		<div class="left">
			<input id="element_3_5" name="ZipCode" class="element text medium" maxlength="15" value="" type="number" required>
			<label for="element_3_5">Postal / Zip Code</label>
		</div>
	
		</li>		<li id="li_9" >
		<label class="description" for="element_9">State </label>
		<div>
		<select class="element select medium" id="element_9" name="State" required> 
			<option value="" selected="selected"></option>
<option value="1" >Gujarat</option>
<option value="2" >Maharashtra</option>
<option value="3" >Karnataka</option>
<option value="4" >Andhra Pradesh</option>
<option value="5" >Arunachal Pradesh</option>
<option value="6" >Assam</option>
<option value="7" >Bihar</option>
<option value="8" >Chhattisgarh</option>
<option value="9" >Goa</option>
<option value="10" >Haryana</option>
<option value="11" >Himachal Pradesh</option>
<option value="12" >Jammu and Kashmir</option>
<option value="13" >Jharkhand</option>
<option value="14" >Kerala</option>
<option value="15" >Madhya Pradesh</option>
<option value="16" >Manipur</option>
<option value="17" >Meghalaya</option>
<option value="18" >Mizoram</option>
<option value="19" >Nagaland</option>
<option value="20" >Odisha</option>
<option value="21" >Punjab</option>
<option value="22" >Rajasthan</option>
<option value="23" >Sikkim</option>
<option value="24" >Tamil Nadu</option>
<option value="25" >Telangana</option>
<option value="26" >Uttarakhand</option>
<option value="27" >Uttar Pradesh</option>
<option value="28" >West Bengal</option>
<option value="29" >Tripura</option>

		</select>
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Phone </label>
		<span>
			<input id="element_4_1" name="Phone" class="element text" size="10" maxlength="10" value="" type="number" required> 
			
		</span>
		
		 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Email </label>
		
		<div>
			<input id="element_5" name="Email" class="element text medium" type="email" maxlength="255" value="" required/> 
		</div> 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Date </label>
		<span>
			<input id="element_8_1" name="Date" class="element text"  value="" type="date" required> 
			
		</span>
		
	
		
		
		 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Grievance Description </label>
		<div>
			<textarea id="element_6" name="Description" class="element textarea medium" required></textarea> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Do you want to upload PDF attachment </label>
		<span>
			<input id="element_7_1" name="pdf" class="element radio" type="radio" value="1" required />
<label class="choice" for="element_7_1">Yes</label>
<input id="element_7_2" name="pdf" class="element radio" type="radio" value="2" />
<label class="choice" for="element_7_2">No</label>

		</span> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="13847" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		
	</div>
	
	<img id="bottom" src="bottom.png" alt="">
	
	
	<?php
	$database="complaint";
	$Fname = isset($_POST['Fname']) ? $_POST['Fname'] : '';
	$Lname = isset($_POST['Lname']) ? $_POST['Lname'] : '';
	$Adhaarno = isset($_POST['Adhaarno']) ? $_POST['Adhaarno'] : '';
	$Address1 = isset($_POST['Address1']) ? $_POST['Address1'] : '';
	$Address2 = isset($_POST['Address2']) ? $_POST['Address2'] : '';
	$City = isset($_POST['City']) ? $_POST['City'] : '';
	$ZipCode = isset($_POST['ZipCode']) ? $_POST['ZipCode'] : '';
	$State = isset($_POST['State']) ? $_POST['State'] : '';
	$Phone = isset($_POST['Phone']) ? $_POST['Phone'] : '';
	$Email = isset($_POST['Email']) ? $_POST['Email'] : '';
	$Date = isset($_POST['Date']) ? $_POST['Date'] : '';
	$Description = isset($_POST['Description']) ? $_POST['Description'] : '';
	$pdf = isset($_POST['pdf']) ? $_POST['pdf'] : '';
	$con=@mysql_connect("localhost","root","");
	if(!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("$database", $con);
	if(isset($_POST['submit']))
		{
			
			$query="INSERT INTO complaint_reg
			VALUES ('$Fname','$Lname','$Adhaarno','$Address1','$Address2','$City','$ZipCode','$State','$Phone','$Email','$Date','$Description','$pdf')";
			if(mysql_query($query,$con))
				{
					echo "1 record added";
					
					
				}
		}
	?>
	</body>
</html>