<!DOCTYPE html>
<html>
<head>
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
.color
{
	background-color:orange;
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
<input type="submit" name="next" value='>' class='color' style="float:right"><br>
<center>
<font color="orange" size="20">Acronym for CPU?</font><br><br>
<input type="radio" name="Ans1"  class='buttonb'value="aa"><font size="6">Central Processor Unit</font></input><br><br>
<input type="radio" name="Ans1" class='buttonb' value="cpu"><font size="6">Central Processing Unit</font></input><br><br>
<input type="radio" name="Ans1" class='buttonb' value="az"><font size="6">Control Processing Unit</font></input><br><br>
<input type="submit" name="button" value="ok" class='button'>
<input type="reset" name="reset" class='buttona'><br><br>
</center>

</form>

<?php
include "connection.php";
if(isset($_POST['button']))
{
	if($_POST['Ans1'])
	{
	//$comp=strcmp($_POST['Ans1'],"cpu");
	if($_POST['Ans1']== "cpu")
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
		echo '<font color="red" size="8">Answer is not correct!!!</font>';
		echo '</center>';
	}
	}
	
}

?>
<?php
$quiz=$_POST['next'];
if($quiz)
	{
		header('location:quiz1.php');
	}
?>
</body>
</html>