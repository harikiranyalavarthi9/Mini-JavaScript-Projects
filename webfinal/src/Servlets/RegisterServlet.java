package Servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.DriverManager;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;


@WebServlet("/RegisterServlet")
public class RegisterServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
	public RegisterServlet(){
		
	}

	
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html");
		PrintWriter out = response.getWriter();
		out.println("<h3>Register Servlet</h3>");
		HttpSession session = request.getSession(true);
		session.setAttribute("username", request.getParameter("user"));
		session.setAttribute("email", request.getParameter("email"));
		String firstname=request.getParameter("first"); 
		String lastname=request.getParameter("last");
		String mno=request.getParameter("mobile");
		String email=request.getParameter("email");
		String address=request.getParameter("address");
		String username=request.getParameter("user");
		String password=request.getParameter("password");
		//establish connection
        try {
			Class.forName("com.mysql.jdbc.Driver");
            java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/vishal", "root", "root");
            java.sql.PreparedStatement pst = con.prepareStatement("insert into register(firstname,lastname,mno,email,address,username,password) values(?,?,?,?,?,?,?)");
            pst.setString(1,firstname);
            pst.setString(2,lastname);
            pst.setString(3,mno);
            pst.setString(4,email);            
            pst.setString(5,address);
            pst.setString(6,username);
            pst.setString(7,password);
            
            int a = pst.executeUpdate();
         
            
            if(a!=0){
            	
            	response.sendRedirect("reg.jsp");
            }
            else{
            		response.sendRedirect("error.jsp");
            }
            pst.close();
           }
		catch (Exception ex){
			ex.printStackTrace();
		}
		
	}

}
