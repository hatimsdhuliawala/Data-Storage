<?php
$con=mysql_connect("localhost","root","");

mysql_select_db("sdes");

$email = $_POST['email'];
$password = $_POST['password'];

//echo "Yes";
$sql="INSERT INTO login(email_id,password) VALUES('$email','$password')";
$result = mysql_query($sql,$con);

mysql_close($con);

?>