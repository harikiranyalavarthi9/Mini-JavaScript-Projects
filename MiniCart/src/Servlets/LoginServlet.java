package Servlets;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
@WebServlet("/LoginServlet")
public class LoginServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		 response.setContentType("text/html");  
	        PrintWriter out=response.getWriter();  
	        HttpSession session = request.getSession(true);
	        // getting values from login.jsp
	        String name=request.getParameter("user");  
	        String password=request.getParameter("password");  
	        LoginBean bean=new LoginBean(); 
	        // setting values to bean
	        bean.setUserName(name);
	        bean.setPassword(password);
	        try {
	            Class.forName("com.mysql.jdbc.Driver");
	            java.sql.Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/vishal", "root", "root");
	            java.sql.Statement statement = null;
	            String page="";
	            statement = ((java.sql.Connection) conn).createStatement();
	            String QUERY = "SELECT * FROM register ";
	            ResultSet rs = statement.executeQuery(QUERY);
	        if(!rs.next()){  
	        	response.sendRedirect("error.jsp");
		   }
	        else{
				// retrieve the result and compare with bean value
	        	while(rs.next())
	        	{
	        	  String first = rs.getString("username");
	        	  String last = rs.getString("password");
	        	  
	        	 /* out.print(first);
	        	  out.print(last);*/
	        	
				if (name.equals(first)&& password.equals(last))
				{
					page="success.jsp";
					session.setAttribute("username", request.getParameter("user"));
					//out.print("Sucessssssssss")
					break;
			    }
				else
				{
					page="error.jsp";
					//out.print("Failllllllll");
				}
				
	        }
	        	response.sendRedirect(page);
	        	}
	        }
	        catch (ClassNotFoundException | SQLException e) {
	            e.printStackTrace();
	        }
	       	}
}
