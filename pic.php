<html>
<body>
<form method="post">
<input type="file" name="pic">
<input type="submit" name="upload" value="upload">
<input type="submit" name="view" value="view">
</form>
</body>
<?php
$pic=$_FILES['pic'];
if(isset($_FILES['upload']))
{
	mysql_query("INSERT INTO pic SET pic='$pic'");
}
?>
</html>