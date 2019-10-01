<?php
	
	$con = mysql_connect("localhost","root","");
	if (!$con)
	  {
	  die('Could not connect:' . mysql_error());
	  }
	  
		  
		  
	 
	  
	$sql2 = 'CREATE Database if not exists Lounge'; 
	mysql_query($sql2,$con);
	mysql_select_db("Lounge", $con);
	if(isset($_POST['Register'])){
	$sql3 = 'create table NCStudent (FName varchar(20) notnull,
									LName varchar(20) notnull,
									CustID int primary key not null,
									CustTel int not null,
									Address varchar(30) not null,
									Email varchar(30) not null,
									Sex varchar(6)
									)';
	if(!mysql_query($sql3,$con)){
		echo "dghshjsk";
	}
	$sql4="INSERT INTO NCStudent (FirstName, LastName, CustID, CustTel, Address, Email, Sex)
	VALUES
	('$_POST[fname]','$_POST[lname]','$_POST[custId]','$_POST[custTel]','$_POST[address]','$_POST[email]','$_POST[sex]')";

	if (!mysql_query($sql4,$con))
	  {
	  die('Error: ' . mysql_error());
	  }
	alert("1 record added");

	 }
	
?> 