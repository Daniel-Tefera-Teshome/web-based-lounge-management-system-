<!doctype HTML>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Customer </title>
		<link href="css1.css" type="text/css" rel="stylesheet">
		<!--style type="text/css" rel="stylesheet" >

</style-->
	</head>
	<body bgcolor = "RosyBrown">
		<div class = "header">
			<img src = "woldia2.png" align = "left">
			<marquee align = "absmiddle" behavior = "alternate" loop = ""> <h1> <font color = "Red"> Wellcome Manager!!! </font> </h1></marquee>
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
				<td> <a href = "DeleteNCS.html"> <b> Delete NCS </b> </td>
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
				<td> <a href = "ViewNCS.html"> <b> View NCS </b> </td>
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
				<td> <a href = "SearchNCS.html"> <b> Search NCS </b> </td>
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
		
		<h3> Type here any thing that you want to post </h3>
		<form action="" method="post">
			
			<tr>
				<td> <textarea rows = "10" cols = "30" placeholder = "Post  here please" name = "posta"> </textarea> </td>
				<td> </td>
			</tr>
			<tr>
				<td> <td> <input type = "file" name = "photo"> </td> </td>
				<td> </td>
			</tr>
			<tr>
				<td> <input type = "submit" value = "Post" name = "Post"> </td>
				<td> </td>
			</tr>
			
		</form>
		<br><br><br><br><br><br><br><br><br>
		<?php 
	     include("dbc.php");
		 
		 $sql3 = 'create table if not exists Post 
									(posts bit map) not null primary key,
									Photos varchar(20) not null
									
									)';
	   if(mysqli_query($dbc, $sql3))
	   {
		  //echo"table Post created successfully";
	   }else{
	    //echo "Failed table creation";
	  }
	  //$custId=rand(10,100000);
	  if(isset($_POST['Post']))
	  {
		  
		 
		 $insert = "INSERT INTO Post 
		 (Posts , Photos)
										VALUES ('{$_POST['posta']}' , '{$_POST['photo']}'  
												)";
				if(mysqli_query($dbc,$insert))
				{
						echo ("erorrrrrr");
					echo'<script type="text/javascript">
						alert("Your File is sucessfully Posted!!! ")
						</script>';
				}
				else{
					echo'<script type="text/javascript">
						alert("not successfully Posted !!! ")
						</script>'.mysqli_error($dbc);
				}
			  
	  }
	   ?>
		
		
		
		<div id="tooplate_footer" align = "center">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        Copyright © 2018 <a href="#">Computer science 3rd year</a> - Design: <a href="Main.html">Group One</a>
		
    </div>
	</body>
</html>