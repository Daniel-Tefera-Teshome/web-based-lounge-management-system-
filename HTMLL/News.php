<!doctype HTML>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> News </title>
		<link href="css1.css" type="text/css" rel="stylesheet">
	
		<script language = "javascript">
		function SearchHandler()
			{
			  var url = document.searchform.search.value;
			  window.open (url); 
			} 
		</script>

	</head>
	<body bgcolor = "RosyBrown">
	<header>
		<div class = "header">
		<img src = "woldia2.png" align = "left">
		<h1 align = "center"> <font color = "Teal"> Wellcome to Woldia University <br> Online Student Launge  Management System </font> </h1>
		</div>
		<form class="search-form" align = "right" name = "searchform">
				<input type="text"placeholdeer="search" name = "search">
				<input type = "button" value = "Search" onclick = "SearchHandler();">
		</form>
		<div class="navigation">
			<ul>
				<li> <a href = "Home.html"> Home </a> </li>
				<li> <a href = "ContactUs.html"> Contact_us </a> </li>
				<li> <a href = "AboutUs.html"> About_Us </a> </li>
				<li> <a href = "Menu.php"> Menu </a> </li>
				<li> <a href = "News.php"> News </a> </li>
				<li> <a href = "Feedback.php"> Feedback </a> </li>
				<li> <a href = "LogInPage.html"> Log in </a> </li>
				<li> <a href = "#"> Exit </a> </li>
			</ul>
		</div>
		</header>
		
		<?php
				include("dbc.php");
				
				if(isset($_POST['News']))
				{
				$select = 'SELECT * FROM Post';
				$result = mysqli_query($dbc,$select);
				echo "<table border=0 color=#FFF> 
										<tr> 
											<th> Post </th>
											<th> Photo </th>
										</tr>";
				while($row=mysqli_fetch_array($result)){
					echo "<tr> 
							  <td> ".$row['0']." </td>
							  <td> ".$row['1']." </td>
						  </tr>
						  
					";
					//echo " <img src = "$row['1']" alt = "Photo"> ";
					//mysqli_error_reporting(0);
				}
					
					echo'<script>
							alert("Here is the entire Post") 
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
		<image src = "$row['1']" alt = "Photo">
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
		<form action="" method="post">
			<tr>
				<th colspan = "2"> <b> Press this button to see the News </b> </th>
			</tr>
			<tr>
				<td> <input type = "submit" value = "View" name = "News"> </td>
				<td> </td>
			</tr>
		</form>
		
		<!--<h1 align = "center"> Recent Posts are here: </h1>
		<img src = "dorowet3.jpg">
		<br> --><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<div id="tooplate_footer" align = "center">
    
        Copyright © 2018 <a href="#">Computer science 3rd year</a> - Design: <a href="Main.html">Group One</a>
    </div>
	</body>
</html>