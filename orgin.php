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
    background-color: #111;
}
.active {
    background-color: #4CAF50;
}
</style>
</head>
<body bgcolor="lightgreen">
<center><h1><font color="blue">செ</font><font color="orange">ந்</font><font color="red">த</font><font color="skyblue">மி</font><font color="whitegreen">ழ்</font></h1></center><br>

<ul>
  <li><a href="orgin.php">Home</a></li>
  <li><a href="main.php">TamilWords</a></li>
  <li><a href="quiz.php">Quizz</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>

</body>
</html>
