<!doctype HTML>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Search NCS </title>
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
		<form action="" method="post">
			<tr>
				<th colspan = "2"> <b> Press this button to see the register NCStudents </b> </th>
			</tr>
			<tr>
				<td> <input type = "submit" value = "View" name = "View"> </td>
				<td> </td>
			</tr>
		</form>
		
				<?php
				include("dbc.php");
				
				if(isset($_POST['View']))
				{
				$select = 'SELECT * FROM NCStudent';
				$result = mysqli_query($dbc,$select);											
				echo "<table border=1 color=#FFF> 
										<tr> 
											<th> FName </th>
											<th> LName </th>
											<th> CustID </th>
											<th> CustTel </th>
				                            <th> Age </th>
											<th> Address </th>
											<th> Email </th>
				                            <th> Sex </th>
										</tr>";
				while($row=mysqli_fetch_array($result)){
					echo "<tr> 
							  <td> ".$row['0']." </td>
							  <td> ".$row['1']." </td>
							  <td> ".$row['2']." </td>
							  <td> ".$row['3']." </td>
							  <td> ".$row['4']." </td>
							  <td> ".$row['5']." </td>
							  <td> ".$row['6']." </td>
							  <td> ".$row['7']." </td>
						  </tr>
						  
					";
					//mysqli_error_reporting(0);
				}
					
					echo'<script>
							alert("Here is the entire Non Cafe Student") 
						 </script>'
					;   
					 
					}else{
						// echo'
							// <script>
								// alert("error!!! fail in retrieve !!")
							// </script>'
						// ;
					}
			?>
		
		</table>
		
		<br><br><br><br><br><br><br><br><br><br>
		<br>
		<br><br><br><br><br><br><br><br><br><br>
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