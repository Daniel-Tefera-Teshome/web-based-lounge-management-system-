<DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>
			Menu
		</title>
		<link href="css1.css" type="text/css" rel="stylesheet">
		<script type="text/javascript">
			function Order()
			{
				alert("Your Order is gone Wait Only a minute!!! Thank you!");
			}
			

		</script>
		<script type="text/javascript">
			function validateform(){  
				var name=document.myform.sitnumber.value;    
				if (name==null || name==""){  
				  alert("Sit Number can not be empty!");  
				  return false;  
				} 
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
		<h1 align = "center"> <font color = "red"> Wellcome to Woldia University <br> Online Student Launge  Management System </font> </h1>
		</div>
		<form class="search-form" align = "right" name = "searchform">
				<input type="text"placeholdeer="search" name = "search">
				<input type = "button" value = "Search" onclick = "SearchHandler();">
		</form>
		<div class="navigation">
			<ul>
				<li> <a href = "home.html"> Home </a> </li>
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
		<img src = "dorowet2.jpg" align = "left">
		<!-- <img src = "dana.jpg" align = "center">
		<img src = "fam.jpg" align = "center"> -->
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
		<table align = "center">
		<form name = "myform" action = "" method = "POST" onsubmit = "validateform()";>
		<tr><th colspan = "2" bgcolor = "blue"> <font color = "red"> Today's Memu is listed here </font></th></tr>
			<tr>
			<td>
			Soft Drink:
			</td>
			<td><select name = "softdrink">
			<optgroup label = "Water">
				<option value = "water half liter"> water 1/2 liter -- 6 </option>
				<option value = "Water 1 liter"> Water 1 liter -- 10 </option>
				<option value = "Water 2 liter"> Water 2 liter -- 12 </option>
			</optgroup>
			<optgroup label = "Juice">
				<option value = "Prigat Juice"> Prigat Juice -- 15  </option>
				<option value = "Mango Juice"> Mango juice -- 14 </option>
				<option value = "Rani"> Rani -- 18 </option>
			</optgroup>
		</select>
		</td>
		</tr>
		<tr>
		<td>
		Hot Drink:
		</td>
		<td><select name = "hotdrink">
			<optgroup label = "Yetsom Yalhone">
				<option value = "Tea"> Tea -- 1 </option>
				<option value = "Coffee"> Coffee -- 2 </option>
				<option value = "Mango Tea"> Mango Tea  -- 1.50 </option>
				<option value = "Orange Tea"> Orange Tea  -- 1.50</option>
				<option value = "Lewz">  Lewz -- 3</option>
				<option value = "Keshir">  Keshir -- 1 </option>
			</optgroup>
			<optgroup label = "Yetsom ">
				<option value = " Milk"> Milk -- 5 </option>
				<option value = "Makiyato"> Makiyato -- 3 </option>
			</optgroup>
		</select> 
		</select>
		</td>
		</tr>
		<tr>
		<td>
		Break Fast:
		</td>
		<td><select name = "breakfast">
			<optgroup label = "Yetsom Yalhone">
				<option value = "Injera Firfir"> Injera Firfir -- 10 </option>
				<option value = "Dabo"> Dabo -- 1.50 </option>
				<option value = "Asanbusa"> Asanbusa -- 3 </option>
				<option value = "Bonbolino"> Bonbolino -- 3 </option>
				<option value = "Ambasha">  Ambasha -- 7 </option>
				<option value = "Makaroni">  Makaroni --10 </option>
				<option value = "Ruz">  Ruz -- 11 </option>
			</optgroup>
			<optgroup label = "Yetsom ">
				<option value = " Enkulal Firfir"> Enkulal Firfir -- 12 </option>
				<option value = "Kuanta Firfir"> Kuanta Firfir 1-- 4 </option>
				<option value = "Sanduch"> Sanduch -- 7 </option>
			</optgroup>
		</select>
		</td>
		</tr>
		<tr>
		<td>
		Lunch:
		</td>
		<td>
		<select name = "lunch">
			<optgroup label = "Yetsom Yalhone">
				<option value = "Injera Firfir"> Injera Firfir -- 10</option>
				<option value = "Beyaynet"> Beyaynet -- 12 </option>
				<option value = "Key Dinch"> Key Dinch -- 12 </option>
				<option value = "Alcha Dinich"> Alcha Dinich -- 12 </option>
				<option value = "Shiro">  Shiro -- 12 </option>
				<option value = "Tegabino">  Tegabino -- 14  </option>
				<option value = "Pasta">  Pasta  -- 10 </option>
				<option value = "Misr">  Misr -- 12 </option>
			</optgroup>
			<optgroup label = "Yetsom ">
				<option value = " Enkulal Sils"> Enkulal Sils -- 14 </option>
				<option value = "Key Wot">  Key Wot -- 12 </option>
				<option value = "Enkulal Firfir"> Enkulal Firfir -- 12 </option>
			</optgroup>
		</select> 
		</td>
		</tr>
		<tr>
		<td>
		Dinner:
		</td>
		<td>
		<select name = "dinner">
			<optgroup label = "Yetsom Yalhone">
				<option value = "Injera Firfir"> Injera Firfir --10  </option>
				<option value = "Beyaynet"> Beyaynet -- 12 </option>
				<option value = "Key Dinch"> Key Dinch -- 12 </option>
				<option value = "Alcha Dinich"> Alcha Dinich -- 12 </option>
				<option value = "Shiro">  Shiro -- 12  </option>
				<option value = "Tegabino">  Tegabino -- 14 </option>
				<option value = "Pasta">  Pasta -- 10 </option>
				<option value = "Misr">  Misr -- 10 </option>
			</optgroup>
			<optgroup label = "Yetsom ">
				<option value = " Enkulal Sils"> Enkulal Sils  -- 11 </option>
				<option value = "Key Wot">  Key Wot -- 12 </option>
				<option value = "Enkulal Firfir"> Enkulal Firfir -- 13 </option>
			</optgroup>
		</select> 
		</td>
		</tr>
		<tr>
			<td> Sit Number:</td>
			<td> <input type = "Number" name = "sitnumber" placeholder = "Sit number" required/> </td>
		</tr>
		<tr>
			<td> <input type = "button" value = "Order" name = "Order" onclick = "Order();"> </td>
		</tr>
		</form>
	</table>
		<br><br><br><br><br><br><br>
		<?php 
	     include("dbc.php");
		 
		 $sql3 = 'create table if not exists FoodOrder( 
									SoftDrink varchar(30) not null,
									HotDrink varchar(30) not null,
									BreakFast varchar(30),
									Lunch varchar(30) not null,
									Dinner varchar(30) not null,
									SitNumber int not null  primary key 
									)';
	   if(mysqli_query($dbc, $sql3))
	   {
		 // echo"table FoodOrder created successfully";
	   }else{
	    //echo "Failed table creation";
	  }
	  //$custId=rand(10,100000);
	 
	 if(isset($_POST['Order']))
	  {
		  
		 
		 $insert = "INSERT INTO FoodOrder 
		 (SoftDrink,HotDrink,BreakFast,Lunch,Dinner,SitNumber)
		            VALUES ('{$_POST['softdrink']}' , '{$_POST['hotdrink']}' ,
					'{$_POST['breakfast']}' , '{$_POST['lunch']}'  
					)";
				if(mysqli_query($dbc,$insert))
				{
					
					echo'<script type="text/javascript">
						alert("Your Order is sucessfully gone")
						</script>';
				}
				else{
					echo'<script type="text/javascript">
						alert("error !!! ")
						</script>';
				}
			  
	  }
	   ?>
		
		
		<br><br>
		<div id="tooplate_footer" align = "center">
    
        Copyright © 2018 <a href="#">Computer science 3rd year</a> - Design: <a href="Main.html">Group One</a>
    </div>
	</body>
</html>