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
<img src="center3.jpg" alt="no mage" width="980" height="500" /></div></div>
<?php
session_start();
$con=mysql_connect("localhost","root","narender");
mysql_select_db("vegeta",$con);
$result=mysql_query("select * from user");
$check=0;
while($row=mysql_fetch_array($result))
{

$n=0;
$x=1;
if($row["id"]==1){
$check=1;
}
$re=("UPDATE user SET id=$n");
mysql_query($re);
}
if($check==0){
echo '<div style="margin-left:500px;">';
echo "Sorry! You are not login..";
}
else{
echo '<div style="margin-left:500px;">';
echo "Successfully Logout";
}
session_destroy();
Header("Location:file://home/hcl/main.html");
?>

<div style="margin-left:400px;">
</div>
</div>

<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
<font align="center">Copyright © 2012 Narender & Nitin Company</font></div>

</div>
</body>
</html>
