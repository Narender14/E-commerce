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
<li><a href="http://localhost/admin.html">Admin&nbsp;</a></li>
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
$con=mysql_connect("localhost","root","narender");

  if(!$con)
{
   die('Connection Failed'.mysql_error());
}

$no=1;
mysql_select_db("vegeta",$con);

$result=mysql_query("select * from user");

$n=1;
$check=1;
while($row=mysql_fetch_array($result))

{

    if($row["id"]==$n){
	
		session_start();
		echo '<div style="margin-left:150px;margin-top:50px">';
		echo "Username : ";
	 echo $row["username"];
	echo "<br/>";
		echo "<br/>";
	echo "Age : ";
	echo $row["age"];
	echo "<br/>";
		echo "<br/>";
		echo "Sex : ";
		 echo $row["sex"];
	echo "<br/>";
		echo "<br/>";
		echo "Balance : ";
	echo $row["balance"];
	echo "<br/>";
  	echo "<br/>";
	echo "<br/>";
 	echo "<a href='http://localhost/logout.php'>Logout</a";
		$check=0;
				break;
		
}

     }
if($check==1){
		echo '<div style="margin-left:150px;margin-top:50px">';
	    echo "SORRY!  You are Not Login";
		break;
	 }


?>

  <div style="margin-left:400px;">
</div>
</div>

<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<font align="center">Copyright © 2012 Narender & Nitin Company</font></div>

</body>
</html>
