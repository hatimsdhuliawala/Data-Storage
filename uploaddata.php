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
$filen = $_GET['filen'];


$sql="INSERT INTO uploaddata(email_id,filename) VALUES('$email','$filen')";
$result = mysql_query($sql,$con);

if($result)
{
echo "Yes";
}

else 
{
echo "Nottttttt";
}
mysql_close($con);

?>