<!doctype HTML>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Feedback </title>
		<link href="css1.css" type="text/css" rel="stylesheet">
		<script src="feedbacks-form-validation.js"></script>
		<script language = "javascript">
		function SearchHandler()
			{
			  var url = document.searchform.search.value;
			  window.open (url); 
			} 
		</script>
	</head>
	<body bgcolor = "RosyBrown" onload="document.registration.fname.focus();">
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
				<li> <a href = "Feedback.html"> Feedback </a> </li>
				<li> <a href = "LogInPage.html"> Log in </a> </li>
				<li> <a href = "#"> Exit </a> </li>
			</ul>
		</div>
		</header>
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
		</table> <br>
			<form   method = "POST" action = "" name="registration" onSubmit="return formValidation();">
				<fieldset>
					<legend> Comments: </legend>
				<table align = "center">
					<tr>
						<td> FirstName:</td>
						<td> <input type = "text" name  = "fname" placeholder = "FirstName"> </td>
					</td>
					<tr>
						<td> LastName:</td>
						<td> <input type = "text" name  = "lname" placeholder = "LasttName"> </td>
					</tr>
					<tr>
						<td> ID:</td>
						<td> <input type = "text" name  = "id" placeholder = "ID here"> </td>
					</tr>
					<tr>
						<th> Department:</td>
						<td> <select name = "Department">
							<optgroup label = "Technology">
								<option selected="" value="Default">(Please select a Department)</option>
								<option value = "Computer"> Computer Science </option>
								<option value = "IT"> IT </option>
								<option value = "Civil"> Civil </option>
								<option value = "Mechanical"> Mechanical </option>
								<option value = "Water"> Water </option>
								<option value = "Electrical"> Electrical </option>
							</optgroup>
							<optgroup label = "FBE">
								<option value = "Business"> Business </option>
								<option value = "Economics"> Economics </option>
								<option value = "Accounting"> Accounting </option>
								<option value = "Management"> Management </option>
							</optgroup>
							<optgroup label = "Comptetional">
								<option value = "Maths"> Maths </option>
								<option value = "Chemistry"> Chemistry </option>
								<option value = "Civics"> Civics </option>
								<option value = "Statstics"> Statstics </option>
								<option value = "Physics"> Physics </option>
							</optgroup>
							<optgroup label = "Health">
								<option value = "Nursing"> Nursing </option>
								<option value = "Midwifre"> Midwifre </option>
								<option value = "HO"> HO </option>
							</optgroup>
						</select>
						</td>
					</tr>
					<tr>
						<td> Comment: </td>
						<td> <textarea rows = "18" cols = "35" placeholder ="comment here please" name = "comment"> </textarea> </td>
					</tr>
					<tr>
						<td> <input type = "Submit" value = "Send" name = "Send"> </td>
						<td> <input type = "Reset" value = "Clear"> </td>
					</tr>
				</table>
				
				<?php 
	     include("dbc.php");
		 
		 $sql3 = 'create table if not exists Feedback 
									(FName varchar(20) not null,
									LName varchar(20) not null,
									ID varchar(20) not null primary key,
									Department varchar(20) not null,
									Comment varchar(3000) not null
									)';
	   if(mysqli_query($dbc, $sql3))
	   {
		  //echo"table Feedback created successfully";
	   }else{
	    //echo "Failed table creation";
	  }
	  //$custId=rand(10,100000);
	  if(isset($_POST['Send']))
	  {
		  
		 
		 $insert = "INSERT INTO Feedback 
		 (FName,LName,ID,Department,Comment)
										VALUES ('{$_POST['fname']}' , '{$_POST['lname']}' , '{$_POST['id']}' ,
												'{$_POST['Department']}' , '{$_POST['comment']}'  
												)";
				if(mysqli_query($dbc,$insert))
				{
						echo ("erorrrrrr");
					echo'<script type="text/javascript">
						alert("Your comment is sucessfully gone!!!Thank you for your Feedbacks.Your Feedback is Our Strength. ")
						</script>';
				}
				else{
					echo'<script type="text/javascript">
						alert("not successfully sent !!! ")
						</script>'.mysqli_error($dbc);
				}
			  
	  }
	   ?>
				
				</fieldset>
			</form>
				<div id="tooplate_footer" align = "center">
        Copyright © 2018 <a href="#">Computer science 3rd year</a> - Design: <a href="Main.html">Group One</a>
		
    </div>
	</body>
</html>