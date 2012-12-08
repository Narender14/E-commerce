<html>
<head>
<title>E-commerce Website</title>
<style type="text/css">
ul
{
list-style-type:none;
margin:20;
padding:0;
padding-top:6px;
padding-bottom:12px;
}
li
{
display:inline;
}
a:link,a:visited
{
font-weight:bold;
color:#FFFFFF;
background-color:#98bf21;
text-align:center;
padding:6px;
text-decoration:none;
text-transform:uppercase;
}
a:hover,a:active
{
background-color:#7A991A;
}

</style>
</head>

<body background="center5.jpg">
<p>

<font size="7" face="verdana" color="indigo">
<h1 align="center" style="background-color:grey;">E-commerce Website
</h1></font>
</p>
<ul>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="http://localhost/main.html">Home&nbsp;</a></li>
<li><a href="http://localhost/login.html">Login&nbsp;</a></li>
<li><a href="http://localhost/sign.html">Signup&nbsp;</a></li>
<li><a href="http://localhost/walle.html">Wallet&nbsp;</a></li>
<li><a href="http://localhost/account.php">Account&nbsp;</a></li>
<li><a href="http://localhost/search.html">Search&nbsp;</a></li>
<li><a href="http://localhost/Admin.html">Admin&nbsp;</a></li>
<li><a href="http://localhost/logout.php">Logout&nbsp;</a></li>

</ul>

<div id="container" style="width:1260px">
<div id="menu" style=" font-size:20;background-color:#FFD700;height:500px;width:140px;float:left;">
<b><br />&nbsp;&nbsp;Categories</b><br /><br />
<font size="2">
&nbsp;&nbsp;<li><a href="http://localhost/nar.html">Books&nbsp;&nbsp;</a><li><br /><br /><br />
&nbsp;&nbsp;<li><a href="http://localhost/naren.html">Laptops&nbsp;&nbsp;</a><li><br /><br /><br />
&nbsp;&nbsp;<li><a href="http://localhost/narend.html">Mobiles&nbsp;&nbsp;</a><li><br /><br /><br />
&nbsp;&nbsp;<li><a href="http://localhost/nare.html">Cameras&nbsp;&nbsp;</a><li><br /><br /><br />
</font>
</div>

<div id="menu" style=" font-size:20;background-color:#FFD700;height:500px;width:140px;float:right;">
<b>
<img src="commerce.jpg" alt="no mage" width="140" height="500" /></div>

<div id="content" style="background-image:url(http://localhost/images/bg.gif);height:500px;width:980px;float:left;">
<?php
$b= $_POST["degree"];
$s=$_POST["pd"];


$con=mysql_connect("localhost","root","narender");

  if(!$con)
{
   die('Connection Failed'.mysql_error());
}

$no=1;
mysql_select_db("vegeta",$con);

$result=mysql_query("select * from $b");

$pr="";
$n=0;
while($row=mysql_fetch_array($result))
{
	    
	if($row["name"]==$s){
	 session_start();
		$n=1;
	$im=$row["photo"];
	//echo $row["name"];
	
	 echo "<img src='$im' width='100' height='80'"; 
	echo '<div style="margin-left:150px;margin-top:50px">';
		if($b=="book"){
			echo '<div style="margin-left:150px;margin-top:50px">';
			
				echo "<b>Book:</b>    ";		 	
			 echo $row["name"];
				echo "<br/>";
				echo "<br/>";
		            echo "<b>Author:</b> ";
				
				echo $row["author"];
				echo "<br/>";
				echo "<br/>";
			 echo "<b>Publisher:</b> ";
				 echo $row["publisher"];
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
					 $_SESSION["P"]=$pr;
	echo "<a href='http://localhost/buy.php'>Buy Now</a";			
		 break;
		}
			else if($b=="camera"){
				echo '<div style="margin-left:150px;margin-top:50px">';
			
				echo "<b>Company:</b> ";		 	
			 echo $row["name"];
				echo "<br/>";
				echo "<br/>";
		            echo "<b>Megapixel:</b> ";
				
				echo $row["megapixel"];
				echo "<br/>";
				echo "<br/>";
			 echo "<b>Zoom:</b> ";
				 echo $row["zoom"];
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
			 $_SESSION["P"]=$pr;
	echo "<a href='http://localhost/buy.php'>Buy Now</a";
			 			
		 break;	

	}

else if($b=="laptop"){
echo '<div style="margin-left:150px;margin-top:50px">';
			
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
			 $_SESSION["P"]=$pr;	
	echo "<a href='http://localhost/buy.php'>Buy Now</a";		
		 break;	
}

	else if($b=="mobile"){

echo '<div style="margin-left:150px;margin-top:50px">';
			
				echo "<b>Company:</b> ";		 	
			 echo $row["name"];
				echo "<br/>";
				echo "<br/>";
		            echo "<b>Screen:</b> ";
				
				echo $row["screen"];
				echo "<br/>";
				echo "<br/>";
			 echo "<b>Sim:</b> ";
				 echo $row["sim"];
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
			 $_SESSION["P"]=$pr;
	echo "<a href='http://localhost/buy.php'>Buy Now</a";			
		 break;	
}		
////////////////////////////////////////////////////////////////
}
    
}
	 if($n==0){
			echo '<div style="margin-left:400px;">';
	    echo "Sorry! No such Item exist";
		}
?>

</div>
</div>
</div>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<font align="center">Copyright © 2012 Narender & Nitin Company</font></div>

</div>
</body>
</html>
