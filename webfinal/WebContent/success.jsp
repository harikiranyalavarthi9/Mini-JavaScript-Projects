<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Home Page</title>
</head>
<body>
  <div id="hello" >Welcome. Hello <%= session.getAttribute("username") %></div> <div id="date"> <%= new java.util.Date() %></div>
        

<div id="header"><h1>Book Store</h1></div>
<div id="navigation">
<ul>
<li class="active"><a href="success.jsp">Home</a></li>
<li><a href="books.jsp">Books</a></li>
<li class="corner"><a href="login.jsp">Logout</a></li>
</ul>
 </div>
 <div id="main">
			 
	<marquee direction="left"><img class="mainimg" alt="logo" src="books1.jpg"/><img class="mainimg" alt="logo" src="books2.jpg"/></marquee>
<div id= cnt>
<%
    Integer applicationCount = (Integer)application.getAttribute("applicationCount");
        if (applicationCount == null) {
            applicationCount = new Integer(1);
        } else {
            applicationCount= new Integer(applicationCount.intValue() + 1);
        }

        application.setAttribute("applicationCount", applicationCount);
        %>	
        <BR>
        Visitors to this page so far : <%=applicationCount%>.
</div>
</div>
</body>
</html>