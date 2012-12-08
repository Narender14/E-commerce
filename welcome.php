<html>
<body>
Welcome
<!--
<?php 
$usr="";
$usr= $_POST["pd"];
$con=mysql_connect("localhost","root","naren");

  if(!$con)
{
   die('Connection Failed'.mysql_error());
}

mysql_select_db("vegeta",$con);

$result=mysql_query("select * from image");



while($row=mysql_fetch_array($result))

{

    if($row["name"]==$usr){
	$img=$row["path"];
	echo "Welcome $usr";
         echo "<img src="$img" width='50' height='50'/>"; 
		break;
	
	}

     else {
	    echo "sorry No such USERNAME";
		break;
	 }
}
?>
-->
</body>
</html> 
