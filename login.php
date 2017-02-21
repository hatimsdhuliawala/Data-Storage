<?php
$con=mysql_connect("localhost","root","");

mysql_select_db("sdes");
if($con)
{
echo "Connected";
}
else
{
die("Cannot");
} 
$email = $_GET['email'];
$password = $_GET['password'];

echo "Yes";

$result = mysql_query("INSERT INTO login(email_id,password) VALUES('$email','$password')",$con);

mysql_close($con);

?>