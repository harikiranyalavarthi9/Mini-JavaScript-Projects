
<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
<title> Sports Quiz Grades </title>
	
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<nav>
  <ul>
    <li style="float:left" class="active"> <a href="index.html"> <i> <b style="font-size:25px"> <u>IQ</u>uiz </a> </b> </i> </li>
    <li style="float:right"><a href="help.html"><b>Help</b></a></li>
    <li style="float:right">
      <a href="categories.html"><b>Categories</b><span class="caret"></span></a>
      <div>
        <ul>
		  <li><a href="history.php"><b>History</b></a></li>
		  <li><a href="music.php"><b>Music</b></a></li>
          <li><a href="politics.php"><b>Politics</b></a></li>
          <li><a href="sports.php"><b>Sports</b></a></li>
          <li><a href="space.php"><b>Space</b></a></li>
        </ul>
      </div>
    </li>
    <li style="float:right"><a href="index.html"><b>Home</b></a></li> 
  </ul>
</nav>

	<div id="page-wrap">

		<h1 align="center"> Sports Quiz </h1>
		<?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
            
            echo "<div id='results'> Score = $totalCorrect/5 </div>";
            
        ?>
	
	</div>
</body>

</html>
