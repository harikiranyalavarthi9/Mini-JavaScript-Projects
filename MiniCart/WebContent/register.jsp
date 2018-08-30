<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="register.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Registration Page</title>
<script type="text/javascript">

		
		function callme()
		{
			alert("Registered Successfully");
			window.location("login.jsp")
		}
	</script>
</head>
<body>
<form name = "registration" method="get" action = "RegisterServlet">
<div id="headi"><h2>Registration Form</h2></div>
<table>
<tr><td>First Name:</td><td> <input type = "text" name= "first" required></td></tr><tr></tr><tr></tr>
<tr><td>Last Name: </td><td><input type = "text" name= "last"  required></td></tr><tr></tr><tr></tr>
<tr><td>Mobile Number :</td><td><input type = "text" name= "mobile"	required></td></tr><tr></tr><tr></tr>
<tr><td>Email :</td><td> <input type = "text" name= "email" required></td></tr><tr></tr><tr></tr>
<tr><td>Address :</td><td> <input type = "text" name= "address" required></td></tr><tr></tr><tr></tr>
<tr><td>Username :</td><td> <input type = "text" name= "user" required></td></tr><tr></tr><tr></tr>
<tr><td>Password :</td><td> <input type = "password" name= "password" required></td></tr><tr></tr><tr></tr>
<tr><td></td></tr>
<tr><td></td><td><input type = "submit" value="REGISTER"></td></tr>
</table>
</form>
</body>
</html>