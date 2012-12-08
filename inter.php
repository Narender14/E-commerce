<?php
session_start();
$con=mysql_connect("localhost","root","narender");
mysql_select_db("vegeta",$con);
$result=mysql_query("select * from user");
$z=0;
$check=1;
while($row=mysql_fetch_array($result))
{
	
	if($row["id"]==1)
		{	
			$z=1;
			
			//include 'search.php';

				$curr=$row["balance"];	
					if($curr<$pr)
				      {
							$check=0;
						break;
					}


			$row["balance"]=$row["balance"]-$pr;
					$v=$row["balance"];

				$res=("UPDATE user SET balance=$v WHERE id=1");
			mysql_query($res);
				echo '<div style="margin-left:400px;">';
			echo "Item will delivered in 1 Week";
				echo "<br/>";
			echo "<br/>";
			
			$check=0;
				break;
		  }
	
}
	if($check==1){
		
	    echo "SORRY!";
		break;
	 }
?>

