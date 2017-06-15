<html>
<body bgcolor="pink">
<form name="form" method="post">
EnglishName<input type="text" name="ename"/>
<br><br>
தமிழ்பெயர்<input type="text" name="tname"/>
<br><br>
<input type="submit" name="insert" value="ok"/>
<input type="reset" name="reset"/>
</form>
</body>
<?php 
include "connection.php";
if(isset($_POST['insert']))
{
	$tname=$_POST['tname'];
	$ename=$_POST['ename'];
	$query=mysql_query("INSERT INTO ece VALUES(
			 Null,
			'$ename',
			'$tname'
			)"
		);
		if($query == true)
		{
			echo "one row is inserted";
		}
		else
		{
			echo "row is not inserted";
		}
}
?>
</html>