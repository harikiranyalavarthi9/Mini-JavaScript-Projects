
<!DOCTYPE html>
<html lang = "en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel= "stylesheet" type= "text/css" href= "style.css" media= "screen" />

<title> Space </title>

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

	<h1 align="center"> Space Quiz </h1>

	<form action="grade_sp.php" method="post" id="quiz">
	<ol>
		<li> 
		<h3> Largest planet of our solar system? </h3>
		
		<div>
			<input type = "radio" name = "question-1-answers" id="question-1-answers-A" value="A" />
			<label for="question-1-answers-A"> Earth </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
			<label for="question-1-answers-B"> Jupiter </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
			<label for="question-1-answers-C"> Saturn </label>
		</div>
		
		<div>
			<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
			<label for="question-1-answers-D"> Pluto </label>
		</div>
		</li>
		
		<li>
		<h3> Brightest star as seen from the Earth </h3>
		
		<div>
			<input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
            <label for="question-2-answers-A"> Rigel Kentaurus </label>
        </div>
                    
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
            <label for="question-2-answers-B"> Dog Star (Sirius)  </label>
        </div>
                    
        <div>
             <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
             <label for="question-2-answers-C"> Eta Carinae </label>
		</div>
		
        <div>
             <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
             <label for="question-2-answers-D"> Orion </label>
		</div>
		</li>
		
		<li>
		<h3> Planet of our solar system with fastest orbiting speed? </h3>
		
		<div>
             <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
             <label for="question-3-answers-A"> Venus </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
             <label for="question-3-answers-B"> Mercury </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
             <label for="question-3-answers-C"> Pluto </label>
        </div>
                    
        <div>
             <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
             <label for="question-3-answers-D"> Earth </label>
        </div>
		</li>
		
		<li>
		<h3> Hottest planet of our solar system? </h3>
		
		<div>
             <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
             <label for="question-4-answers-A"> Mercury </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
             <label for="question-4-answers-B"> Mars </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
             <label for="question-4-answers-C"> Venus </label>
        </div>
                    
        <div>
             <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
             <label for="question-4-answers-D"> Earth </label>
         </div>
		 </li>
		 
		<li>
		<h3> Smallest planet of our solar system? </h3>
		 
		<div>
             <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
             <label for="question-5-answers-A"> Jupiter </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
             <label for="question-5-answers-B"> Pluto </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
             <label for="question-5-answers-C"> Earth </label>
        </div>
                    
        <div>
             <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
             <label for="question-5-answers-D"> Saturn </label>
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
                    