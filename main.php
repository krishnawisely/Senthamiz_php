<!DOCTYPE html>
<head>
<title>Tamil Dictionary</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: gray;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
	color:blue;
    background-color:black;
}

.active {
    background-color: #4CAF50;
}
.th{
	color:orange;
}
.td{
	color:blue;
	font-size:20px;
}
.input{
	width:500px;
	height:30px;
	font-size:20px;
	color:blue;
}
.button{
	height:30px;
	width:110;
	font-size:18px;
}
</style>
</head>
<body bgcolor="lightgreen">
<center><h1><font color="blue">செ</font><font color="orange">ந்</font><font color="red">த</font><font color="skyblue">மி</font><font color="whitegreen">ழ்</font></h1></center>
<br>
<ul>
  <li><a href="orgin.php">Home</a></li>
  <li><a href="main.php">TamilWords</a></li>
  <li><a href="quiz.php">Quizz</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul><br><br><br>
<form name="form" method="post">
<center>
<h1><font color="blue">த</font><font color="orange">மி</font><font color="red">ழ்</font> <font color="green">க</font><font color="darkblue">ணி</font><font color="brown">னி</font></h1>
<input type="text" name="search" placeholder="search" class='input' autofocus/><br><br>
<input type="submit" name="ok" value="search" class='button'/>
<?php
include "connection.php";
header('Content-Type:text/html;charset=utf-8');
if(isset($_POST['ok']))
{
	
	$ename=$_POST['search'];
	
	if($ename==null)
	{
		echo "<font class='th'>enter the name for search!!!</font>";
	}
	$query=mysql_query("SELECT * FROM cse WHERE e_name='$ename' or t_name='$ename'");
	
	while($rows=mysql_fetch_array($query))
		{
			echo "<table border='10'><tr><th class='th'>ஆங்கிலபெயர்</th><th class='th'>தமிழ்பெயர்</th></tr><tr><td class='td'>".$rows["e_name"]."</td><td class='td'>".$rows["t_name"]."</td></table>";
		}
}
?>
</center>
</form>
</body>
</html>