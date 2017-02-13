<%@page import="java.io.PrintWriter"%>
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1" import="java.sql.*,Servlets.*"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="login1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Cart</title>
<script>
		function callme()
		{
			alert("order generated");
			window.location("ordemail.jsp")
		}
		function email(){
			alert("Email sent successfully");
		}
		
	</script>
</head>
<body>
	<div id="navigation"> <ul>
							<li><a href="success.jsp">Home</a></li>
							<li><a href="books.jsp">Books</a></li>
						    <li class="corner"><a href="login.jsp">Logout</a></li>
							
						</ul>
	</div> 
<h2>Your Cart</h2>
<% Cart cart = new Cart(); 
cart =(Cart)request.getAttribute("msg"); 
String[] total1,total2,total3,total4;
total1 = cart.getFirst().split(";");
total2 = cart.getSecond().split(";");
total3 = cart.getThird().split(";");
total4 = cart.getFourth().split(";");


%>

<%
PrintWriter outi = response.getWriter();
int i;
out.print("<table align=\"center\" border=\"2\">");
out.print("<tr>");
out.print("<td>PID</td>");
out.print("<td>Title</td>");
out.print("<td>Author</td>");
out.print("<td>Price</td>");
out.print("</tr>");

for(i=1;i<total1.length;i++)
{
	out.print("<tr>");
	out.print("<td>"+total1[i]+"</td>");
	out.print("<td>"+total2[i]+"</td>");
	out.print("<td>"+total3[i]+"</td>");
	out.print("<td>"+total4[i]+"</td>");
	//out.print( "<td> <button> Remove </button> </td>" );
	out.print("</tr>");
}
out.print("</table>");

try{
	 Class.forName("com.mysql.jdbc.Driver");
     java.sql.Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/vishal", "root", "root");
     java.sql.Statement statement = null;
     for(i=0;i<total1.length;i++)
     {
     java.sql.PreparedStatement pst = conn.prepareStatement("insert into orders(pid,title,author,price) values(?,?,?,?)");
     pst.setString(1,total1[i]);
     pst.setString(2,total2[i]);
     pst.setString(3,total3[i]);
     pst.setString(4,total4[i]);
     int a = pst.executeUpdate();
     }
     
}
catch(Exception e){
	e.printStackTrace();	
}
%>
<br>
<br>
<div id = "chck"><input type ="submit" value="checkout" onclick="callme()"></div>
<br><br><br>
Click here to get email confirmation <input type="button" value="email me" onclick="email()">
</body>
</html>