<?php

mysql_connect('localhost','root','') or die ("Could Not Connect to Database"); // mysql_connect('host','database','password') 

$select_db = mysql_select_db('videos') or die ("Could not connect to database");

$query = "SELECT * FROM users  WHERE id ='1';"; //Users= table name, id is your row 

$fetch = mysql_query('$query') or die ("Could not find user!");

while($row = mysql_fetch_assoc($fetch)){
	echo $row['id']."<br>"; //Make sure the exact same thing you named in your database
	echo $row['']
}

?>