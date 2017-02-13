<html >
<head>
	<title>Office Making</title>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="tech1.css" rel="stylesheet" type="text/css" />
	</head>
<body>
	<div id="hello"> Welcome! Hello <%= session.getAttribute("username") %></div>
	<div id="date"> <%= new java.util.Date() %></div>
	<div id="header">
	<h1>Office Making</h1>			
	</div>
	<div id="navigation"> <ul>
							<li><a href="success.jsp">Home</a></li>
							<li class="active"><a href="books.jsp">Books</a></li>
						    <li class="corner"><a href="login.jsp">Logout</a></li>
							
						</ul>
	</div> 
<div id="main">
<form name="cart" method="post" action="Addtocart"> 
			
			<div class="tech">
			<img class="techimg" src="java.jpg" alt="amazon coupon" ><br><br>
				TITLE  : Java 2 <br>
				AUTHOR : Herbert Shildt<br>
				PRICE  : $ 25 <br>			
				<input type = "checkbox" name="bk1" value="bk1">Select this item		
				</div>
				
			
				<div class="tech1">
				<img class="techimg" src="web.jpg" alt="bestbuy coupon"  ><br><br>
				TITLE  : Php and Mysql<br>
				AUTHOR : Louis Henry<br>
				PRICE  : $ 23 <br>	
				<input type = "checkbox" name="bk2" value="bk2">Select this item			
					</div>	
					
					
			<div class="tech2">
			<img class="techimg" src="optical.jpg" alt="bestbuy coupon"  ><br><br>
				TITLE  : Optical Networks<br>
				AUTHOR : X CAO<br>
				PRICE  : $ 35 <br>	
				<input type = "checkbox" name="bk3" value="bk3">Select this item			
					</div>	
					
					<div class="tech3">
			<img class="techimg" src="ml.jpg" alt="amazon coupon" ><br><br>
				TITLE  : Machine Learning <br>
				AUTHOR : Tom Mitchell<br>
				PRICE  : $ 48 <br>			
				<input type = "checkbox" name="bk4" value="bk4">Select this item		
				</div>
				
			
				<div class="tech4">
				<img class="techimg" src="alg.jpg" alt="bestbuy coupon"  ><br><br>
				TITLE  : Algorithms<br>
				AUTHOR : Ronald Rivest<br>
				PRICE  : $ 40 <br>	
				<input type = "checkbox" name="bk5" value="bk5">Select this item			
					</div>	
					
					
			<div class="tech5">
			<img class="techimg" src="cn.jpg" alt="bestbuy coupon"  ><br><br>
				TITLE  : Computer Animation <br>
				AUTHOR : Rick Parent <br>
				PRICE  : $ 32 <br>	
				<input type = "checkbox" name="bk6" value="bk6">Select this item			
					</div>	
					
				<br><br><br><br>
				
				<div class="adcrt">						
					<input type = "submit" value="Add to Cart" >		
				</div>	
					</form>					
</div>
</body>
</html>
