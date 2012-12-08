<?php

$con=mysql_connect("localhost","root","narender");

  if(!$con)
{
	
   die('Connection Failed'.mysql_error());
}
mysql_select_db("vegeta",$con);

$result=mysql_query("select * from user");


echo "<br/>";
echo "HELLO WORLD";
echo $result;

?>
