<!doctype HTML>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Modify NCS </title>
		<link href="css1.css" type="text/css" rel="stylesheet">
				</script>
		</script>
	<script type="text/javascript">
			function validate_email(field,alerttxt)
			{
				with (field)
				{
					apos=value.indexOf("@");
					dotpos=value.lastIndexOf(".");
					if (apos<1||dotpos-apos<2)
					{
						alert(alerttxt);
						return false;
					}
					else 
					{
						return true;
					}
				}
			}

			function validate_form(thisform)
			{
				with (thisform)
				{
					if (validate_email(email,"Not a valid e-mail address!")==false)
						{
							email.focus();
							return false;
						}
				}
			}
		</script>
		
	</head>
	<body bgcolor = "RosyBrown">
		<div class = "header">
			<img src = "woldia2.png" align = "left">
			<marquee align = "absmiddle" behavior = "alternate" loop = ""> <h1> <font color = "blue"> Wellcome Manager!!! </font> </h1></marquee>
		</div>
		<div class="navigation">
			<ul>
				<li> <a href = "home.html"> Home </a> </li>
				<li> <a href = "ViewComment.html"> View Comment </a> </li>
				<li> <a href = "GenerateReport.html"> Generate Report </a> </li>
				<li> <a href = "PostNews.php"> Post News </a> </li>
				<li> <a href = "Customer.html"> Customer </a> </li>
				<li> <a href = "Employee.html"> Employee </a> </li>
				<li> <a href = "Food.html"> Food </a> </li>
				<li> <a href = "Suplier.html"> Suplier </a> </li>
				<li> <a href = "Order.html"> Order </a> </li>
				<li> <a href = "LogInPage.html"> LogOut </a> </li>
			</ul>
		</div>
		
				<table align = "right">
			<tr>
				<td> <a href = "http://www.facebook.com"> <img src = "facebooks.jpeg"> </td>
			</tr>
			<tr>
				<td> <a href = "http://www.google.com"> <img src = "google1.jpg"> </td>
			</tr>
			<tr>
				<td> <a href = "http://www.email.com"> <img src = "email.png"> </td>
			</tr>
			<tr>
				<td> <a href = "http://www.skype.com"> <img src = "skype2.png"> </td>
			</tr>
			<tr>
				<td> <a href = "http://www.tewtterr.com"> <img src = "twitter2.png"> </td>
			</tr>
			<tr>
				<td> <a href = "http://www.youtube.com"> <img src = "youtube2.bmp"> </td>
			</tr>
			<tr>
				<td> <a href = "http://www.yahoo.com"> <img src = "Yahoo.jpeg" alt = "Yahoo"> </td>
			</tr>
		</table>
		
		<table align = "left">
			<tr>
				<td> <a href = "RegisterNCS.php"> <b> Register NCS </b> </td>
				
			</tr>
			<tr>
				<td> </td>
			</tr>
			<tr>
				<td> </td>
			</tr>
			</tr><tr>
				<td> </td>
			</tr>
			<tr>
				<td> <a href = "ModifyNCS.php"> <b> Modify NCS </b> </td>
			</tr>
			<tr>
				<td> </td>
			</tr><tr>
				<td> </td>
			</tr>
			</tr><tr>
				<td> </td>
			</tr>
			<tr>
				<td> <a href = "DeleteNCS.php"> <b> Delete NCS </b> </td>
			</tr>
			<tr>
				<td> </td>
			</tr><tr>
				<td> </td>
			</tr>
			</tr><tr>
				<td> </td>
			</tr>
			<tr>
				<td> <a href = "ViewNCS.php"> <b> View NCS </b> </td>
			</tr>
			<tr>
				<td> </td>
			</tr><tr>
				<td> </td>
			</tr>
			</tr><tr>
				<td> </td>
			</tr>
			<tr>
				<td> <a href = "SearchNCS.php"> <b> Search NCS </b> </td>
			</tr>
			<tr>
				<td> </td>
			</tr><tr>
				<td> </td>
			</tr>
			</tr><tr>
				<td> </td>
			</tr>
			<tr>
				<td> <a href = "ActivateNCS.html"> <b> Activate NCS </b> </td>
			</tr>
			</tr><tr>
				<td> </td>
			</tr>
			<tr>
				<td> </td>
			</tr><tr>
				<td> </td>
			</tr>
			</tr><tr>
				<td> </td>
			</tr>
			<tr>
				<td> <a href = "DeactivateNCS.html"> <b> Deactivate NCS </b> </td>
			</tr><tr>
				<td> </td>
			</tr><tr>
				<td> </td>
			</tr>
			</tr><tr>
				<td> </td>
			</tr>
			<tr>
				<td> <a href = "ViewDeactivateNCS.html"> <b> ViewDeactivate NCS </b> </td>
			</tr><tr>
				<td> </td>
			</tr><tr>
				<td> </td>
			</tr>
			</tr><tr>
				<td> </td>
			</tr>
		</table>
		<table align = "center">
		<form action="" onsubmit="return validate_form(this);" method="post">
			<tr>
				<th colspan = "2"> <b> Enter the ID that you want to Update then apply your updation</b> </th>
			</tr>
			<tr>
				<td> <label for "FName"> FName : </label> </td>
				<td> <input type = "text" id = "FName" name = "fname" placeholder = "FName here" required/> </td>
			</tr>
			<tr>
				<td> <label for "LName"> LName : </label> </td>
				<td> <input type = "text" id = "LName" name = "lname" placeholder = "LName here"required/> </td>
			</tr>
			<tr>
				<td> <label for "CustID"> CustID : </label> </td>
				<td> <input type = "text" id = "CustID" name = "custId" placeholder = "Id here"required/> </td>
			</tr>
			<tr>
				<td> <label for "CustTel"> CustTel : </label> </td>
				<td> <input type = "text" id = "CustTel" name = "custTel" placeholder = "CustTel here" required/> </td>
			</tr>
			<tr>
				<td> <label for "FName"> Age : </label> </td>
				<td> <input type = "number"  min = "1" max = "120" name = "age"> </td>
			</tr>
			<tr>
				<td> <label for "Address"> Address : </label> </td>
				<td> <input type = "text" id = "Address" name = "address" placeholder = "Address here" required/> </td>
			</tr>
			<tr>
				<td> <label for "Email"> Email : </label> </td>
				<td> <input type = "text" id = "Email" name = "email" placeholder = "Email here" required/> </td>
			</tr>
			<tr>
				<td> <label for "Sex"> Sex : </label> </td>
				<td> <select name = "sex">
					<option value = "Male"> Male </option>
					<option value = "Female"> Female </option>
				</td>
			</tr>
			<tr>
				<td> <input type = "submit" value = "Update" name = "Modify"> </td>
				<td> </td>
			</tr>
		</form>
		
		<?php 
	     include("dbc.php");
		 
		 $sql3 = 'create table if not exists NCStudent 
									(FName varchar(20) not null,
									LName varchar(20) not null,
									CustID int primary key not null,
									CustTel int not null,
									Age int not null,
									Address varchar(30) not null,
									Email varchar(30) not null,
									Sex varchar(6) not null
									)';
	  //$custId=rand(10,100000);
	  if(isset($_POST['Modify']))
	  {
		  
		 
		 $modify = "UPDATE NCStudent SET 		 
					FName = '{$_POST['fname']}' , LName = '{$_POST['lname']}' ,
				    CustTel = '{$_POST['custTel']}' , 
					Age = '{$_POST['age']}' , Address = '{$_POST['address']}' ,
					Email = '{$_POST['email']}' , Sex = '{$_POST['sex']}' WHERE CustID = '{$_POST['custId']}'";
				if(mysqli_query($dbc,$modify))
				{
					
					echo'<script type="text/javascript">
						alert("The data in this id is sucessfully Update ")
						</script>';
				}
				else{
					echo'<script type="text/javascript">
						alert("error do not Updated !!! ")
						</script>'.mysqli_error($dbc);
				}
			  
	  }
	   ?>
		
		</table>
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<div id="tooplate_footer" align = "center">
			
        Copyright © 2018 <a href="#">Computer science 3rd year</a> - Design: <a href="Main.html">Group One</a>
		
    </div>
	</body>
</html>