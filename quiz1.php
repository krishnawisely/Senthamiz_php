<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="color.css">
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
.button{
	height:30px;
	width:50px;
	font-size:18px;
	background-color:orange;
	color:brown;
}
.buttona{
	height:30px;
	width:80px;
	font-size:18px;
	background-color:orange;
	color:brown;
}
.buttonb{
	height:20px;
	width:30px;
}
</style>
</head>
<body bgcolor="lightgreen">

<center><h1><font color="blue">செ</font><font color="orange">ந்</font><font color="red">த</font><font color="skyblue">மி</font><font color="whitegreen">ழ்</font></h1></center><br>

<form name="quiz" method="post">

<ul>
  <li><a href="orgin.php">Home</a></li>
  <li><a href="main.php">TamilWords</a></li>
  <li><a href="quiz.php">Quizz</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul><br>
<input type="submit" name="back" value="<" class='color' style="float:left">
<input type="submit" name="next" value=">" class='color' style="float:right">
<center>
<font color="orange" size="20">select processor companies</font><br><br>
<input type="checkbox" name="Ans1"  class='buttonb'value="amd"><font size="6">AMD</font></input><br><br>
<input type="checkbox" name="Ans2" class='buttonb' value="nevdia"><font size="6">Nevdia</font></input><br><br>
<input type="checkbox" name="Ans3" class='buttonb' value="intel"><font size="6">Intel</font></input><br><br>
<input type="checkbox" name="Ans3" class='buttonb' value="microsoft"><font size="6">MicroSoft</font></input><br><br>
<input type="submit" name="button" value="ok" class='button'>
<input type="reset" name="reset" class='buttona'><br><br>
</center>

</form>

<?php
include "connection.php";
if(isset($_POST['button']))
{
	//$comp=strcmp($_POST['Ans1'],"cpu");
	if($_POST['Ans2']== "nevdia" && $_POST['Ans1']== "amd" && $_POST['Ans3']== "intel")
	{
		echo '<center>';
		echo '<img src="tic2.png" width="150px" height="80px"><br><br>';
		echo '<font color="orange" size="8">Correct Answer!!!</font>';
		echo '</center>';
		//echo $comp;
	}
	else
	{
		echo '<center>';
		echo '<img src="wrong.png" width="150px" height="80px"><br><br>';
		echo '<font color="red" size="8">Above all of first three is correct answer!!!</font>';
		echo '</center>';
	}
	
	
}

?>
<?php
if($_POST['back'])
	{
		header('location:quiz.php');
	}
if($_POST['next'])
	{
		header('location:quiz2.php');
	}
?>
</body>
</html>