<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<HTML>
    <HEAD>
        <TITLE>JSP page Counter</TITLE>
    </HEAD>

    <BODY>
        <H1>JSP page Counter</H1>
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
        Visitors to this page so far <%=applicationCount%> (visitor).
    </BODY>
</HTML> 