<!DOCTYPE html>
<html lang = "en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel= "stylesheet" type= "text/css" href= "style.css" media= "screen" />
<title> Music </title>
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

	<h1 align="center"> Music Quiz </h1>

	<form action="grade_m.php" method="post" id="quiz">
	<ol>
		<li> 
		<h3> What was the name of Taylor Swift's first album? </h3>
		
		<div>
			<input type = "radio" name = "question-1-answers" id="question-1-answers-A" value="A" />
			<label for="question-1-answers-A"> Blank space </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
			<label for="question-1-answers-B"> Taylor Swift </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
			<label for="question-1-answers-C"> Fearless </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
			<label for="question-1-answers-D"> Red </label>
		</div>
		</li>
		
		<li>
		<h3> What song by Michael Jackson contains the lyrics "Annie are you ok"? </h3>
		
		<div>
			<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
            <label for="question-2-answers-A"> Smooth Criminal </label>
        </div>
                    
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
            <label for="question-2-answers-B"> Dangerous </label>
        </div>
                    
        <div>
             <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
             <label for="question-2-answers-C"> Beat It </label>
		</div>
		
        <div>
             <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
             <label for="question-2-answers-D"> Black or White </label>
		</div>
		</li>
		
		<li>
		<h3> What was the name of Michael Jackson's first solo album as an adult? </h3>
		
		<div>
             <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
             <label for="question-3-answers-A"> Will you be there  </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
             <label for="question-3-answers-B"> State of Shock </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
             <label for="question-3-answers-C"> In the Closet </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
             <label for="question-3-answers-D"> Off The Wall </label>
        </div>
		</li>
		
		<li>
		<h3> In what year did Paul McCartney announce he was quitting the Beatles? </h3>
		
		<div>
             <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
             <label for="question-4-answers-A"> 1970 </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
             <label for="question-4-answers-B"> 1980 </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
             <label for="question-4-answers-C"> 1972 </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
             <label for="question-4-answers-D"> 1965 </label>
         </div>
		 </li>
		 
		<li>
		<h3> Where was the very first Hard Rock Cafe opened? </h3>
		 
		<div>
             <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
             <label for="question-5-answers-A"> Piccadilly, London </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
             <label for="question-5-answers-B"> Newyork, USA </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
             <label for="question-5-answers-C"> Atlanta, USA </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
             <label for="question-5-answers-D"> Paris, France </label>
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
                    