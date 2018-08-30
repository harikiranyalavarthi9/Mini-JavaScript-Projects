
<!DOCTYPE html>
<html lang = "en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel= "stylesheet" type= "text/css" href= "style.css" media= "screen" />

<title> Sports </title>

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

<div id = "page-wrap">

	<h1 align="center"> Sports Quiz </h1>

	<form action="grade_s.php" method="post" id="quiz">
	<ol>
		<li> 
		<h3> Which country won more medals in 2016 Rio Olympics? </h3>
		
		<div>
			<input type = "radio" name = "question-1-answers" id="question-1-answers-A" value="A" />
			<label for="question-1-answers-A"> Great Britain </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
			<label for="question-1-answers-B"> United States of America </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
			<label for="question-1-answers-C"> Russia </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
			<label for="question-1-answers-D"> China </label>
		</div>
		</li>
		
		<li>
		<h3> Which country won most number of world cups in Cricket? </h3>
		
		<div>
			<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
            <label for="question-2-answers-A"> India </label>
        </div>
                    
        <div>
             <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
             <label for="question-2-answers-B"> Australia </label>
        </div>
                    
        <div>
             <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
             <label for="question-2-answers-C"> India </label>
		</div>
		
        <div>
             <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
             <label for="question-2-answers-D"> England </label>
		</div>
		</li>
		
		<li>
		<h3> Which country won most number of world cups in Soccer? </h3>
		
		<div>
             <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
             <label for="question-3-answers-A"> Germany </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
             <label for="question-3-answers-B"> Brazil </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
             <label for="question-3-answers-C"> Spain </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
             <label for="question-3-answers-D"> Italy </label>
        </div>
		</li>
		
		<li>
		<h3> Who holds the record for most points in an NBA season? </h3>
		
		<div>
             <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
             <label for="question-4-answers-A"> Kareem Abdul-Jabbar </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
             <label for="question-4-answers-B"> Wilt Chamberlain </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
             <label for="question-4-answers-C"> Kobe Bryant </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
             <label for="question-4-answers-D"> Michael Jordan </label>
         </div>
		 </li>
		 
		<li>
		<h3> How many knockouts did Muhammad Ali achieve in his career? </h3>
		 
		<div>
             <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
             <label for="question-5-answers-A"> 80 </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
             <label for="question-5-answers-B"> 56 </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
             <label for="question-5-answers-C"> 37 </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
             <label for="question-5-answers-D"> 45 </label>
        </div>
		</li>
		
	</ol>
   
	<div class="button">  
    <input type="submit" value="Submit"/>  
	</div>   
    
	</form>
	
</div>
	
	<br>
	<br>
	
</body>
</html>
                    