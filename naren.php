<?php
$con=mysql_connect("localhost","root","narender");

  if(!$con)
{
   die('Connection Failed'.mysql_error());
}

mysql_select_db("vegeta",$con);

$result=mysql_query("select * from laptop"); //returns the query handle for SELECT queries,


$check=1;
while($row=mysql_fetch_array($result))
{

	$im=$row["photo"];
	//echo $row["name"];
	
	 echo "<img src='$im' width='100' height='80'"; 
		
echo '<div style="margin-left:150px;margin-top:50px">';
					echo "<br/>";
				echo "<br/>";
				echo "<b>Company:</b> ";		 	
			 echo $row["name"];
				echo "<br/>";
				echo "<br/>";
		            echo "<b>Screen:</b> ";
				
				echo $row["screen"];
				echo "<br/>";
				echo "<br/>";
			 echo "<b>Processor:</b> ";
				 echo $row["processor"];
					echo "<br/>";
					echo "<br/>";
			            echo "<b>RAM:</b> ";
			 echo $row["ram"];
				echo "<br/>";
				echo "<br/>";
		               echo "<b>HDD:</b> ";
			 echo $row["hdd"];
			echo "<br/>";
					echo "<br/>";
			            echo "<b>Price:</b> ";
			 echo $row["price"];
				echo "<br/>";
				echo "<br/>";
		               echo "<b>Rating:</b> ";
			 echo $row["rating"];
			 	echo "<br/>";
				echo "<br/>";
			$pr=$row["price"];
			
				$pr=$row["price"];

 }
?>
