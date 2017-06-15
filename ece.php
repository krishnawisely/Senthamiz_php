<!DOCTYPE html>
<head>
<title>Tamil Dictionary</title>
</head>
<body bgcolor="white">
<center><h1><font color="blue">த</font><font color="orange">மி</font><font color="red">ழ்</font> <font color="green">க</font><font color="darkblue">ணி</font><font color="brown">ணி</font></h1></center><br><br><br>
<form name="form" method="post">
<center>
<input type="search" name="search" placeholder="search"/>
<input type="submit" name="ok" value="தேடு"/>
<?php
include "connection.php";
header('Content-Type:text/html;charset=utf-8');
if(isset($_POST['ok']))
{
	mysql_query("set character_set_results='uft8'");
	$ename=$_POST['search'];
	$query=mysql_query("SELECT * FROM ece WHERE ename='$ename' or tname='$ename'");
	while($rows=mysql_fetch_array($query))
		{
			echo "<table border='10'><tr><th>ஆங்கிலபெயர்</th><th>தமிழ்பெயர்</th></tr><tr><td>".$rows["ename"]."</td><td>".$rows["tname"]."</td></table>";
		}
}
?>
</center>
</form>
</body>
</html>