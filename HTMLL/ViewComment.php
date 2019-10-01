<!doctype HTML>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Main Menu </title>
		<link href="css1.css" type="text/css" rel="stylesheet">
		<!--style type="text/css" rel="stylesheet" >

</style-->
	</head>
	<body bgcolor = "RosyBrown">
		<div class = "header">
			<img src = "woldia2.png" align = "left"> <br> 
			<span> <h1> <font color = "red"> አእምሮ ሲከፈት ፧ አይኖች ማየት ይችላሉ!!! </font> </h1> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<marquee align = "absmiddle" behavior = "scroll" loop = "" direction = "right"> <h1> <font color = "red"> &nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;Wellcome Manager!!! </font> </h1></marquee>
		</div>
		<div class="navigation">
			<ul>
				<li> <a href = "home.html"> Home </a> </li>
				<li> <a href = "ViewComment.php"> View Comment </a> </li>
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
		<h3> This are comments that are sent from the customer </h3>
		<form action="" method="post">
			<tr>
				<th colspan = "2"> <b> Press this button to see the Comments </b> </th>
			</tr>
			<tr>
				<td> <input type = "submit" value = "View" name = "ViewComment"> </td>
				<td> </td>
			</tr>
		</form>
		<?php
				include("dbc.php");
				
				if(isset($_POST['ViewComment']))
				{
				$select = 'SELECT * FROM Feedback';
				$result = mysqli_query($dbc,$select);
				echo "<table border=1 color=#FFF> 
										<tr> 
											<th> FName </th>
											<th> LName </th>
											<th> ID </th>
											<th> Department </th>
				                            <th> Comment </th>
										</tr>";
				while($row=mysqli_fetch_array($result)){
					echo "<tr> 
							  <td> ".$row['0']." </td>
							  <td> ".$row['1']." </td>
							  <td> ".$row['2']." </td>
							  <td> ".$row['3']." </td>
							  <td> ".$row['4']." </td>
							 
							  
						  </tr>
						  
					";
					//mysqli_error_reporting(0);
				}
					
					echo'<script>
							alert("Here is the entire Comment") 
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
		</table> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<div id="tooplate_footer" align = "center">
    
        Copyright © 2018 <a href="#">Computer science 3rd year</a> - Design: <a href="Main.html">Group One</a>
    </div>
	</body>
</html>