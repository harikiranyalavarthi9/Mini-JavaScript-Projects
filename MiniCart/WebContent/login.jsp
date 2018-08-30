<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="login.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Login Page</title>
</head>
<body>
<form name = "login" method="post" action = "LoginServlet">
<table>
<th><td><h2>Login Form</h2></td></th>
<tr><td> <h4>Username :</h4></td><td> <input type = "text" name= "user"  required></td> </tr>
<tr><td><h4>Password :</h4></td><td> <input type = "password" name= "password" required ></td> </tr>
<tr><td></td><td><input type = "submit" value="LOGIN" name="log"></td>
</tr>
</table> 
</form>
<h3> New users <a href="register.jsp">Register Here</a></h3>
</body>
</html>