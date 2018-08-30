package Servlets;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.DriverManager;
import java.sql.ResultSet;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/Addtocart")
public class Addtocart extends HttpServlet {
	private static final long serialVersionUID = 1L;
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		    response.setContentType("text/html");  
	        PrintWriter out=response.getWriter();
	        Cart ad = new Cart();
	        String[] test={"","","","","",""};
	       String id1 = request.getParameter("bk1"); 
	       String id2= request.getParameter("bk2"); 
	       String id3 = request.getParameter("bk3"); 
	       String id4 = request.getParameter("bk4"); 
	       String id5 = request.getParameter("bk5"); 
	       String id6 = request.getParameter("bk6"); 
	       
	       if(id1 != null)
	       {
	    	  test[0] = id1;
	       }	

	       if(id2 != null){
	    	   test[1] = id2;
	       }

	       if(id3 != null){
	    	   test[2] = id3;
	       }

	       if(id4 != null){
	    	   test[3] = id4;
	       }

	       if(id5 != null){
	    	   test[4] = id5;
	       }
	       
		       if(id6 != null){
		    	   test[5] = id6;  
		       }
	      
	       
	       try {
	            Class.forName("com.mysql.jdbc.Driver");
	            java.sql.Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/vishal", "root", "root");
	            java.sql.Statement statement = null;
	            statement = ((java.sql.Connection) conn).createStatement();
	            for(int i=0;i<6;i++)
	            {
	            	if(test[i]!=null)
	            	{
	            String QUERY = "SELECT * FROM inventory where pid = '"+test[i]+"' " ;
	            
	            ResultSet rs = statement.executeQuery(QUERY);
	            //System.out.println(QUERY);
	            while(rs.next()){
	            	String first = rs.getString("pid");
	            	String second = rs.getString("title");
	            	String third = rs.getString("author");
	            	String fourth = rs.getString("price");
	          //  	Cart ad = new Cart();
	            	ad.setFirst(ad.getFirst()+";"+first);
	            	ad.setSecond(ad.getSecond()+";"+second);
	            	ad.setThird(ad.getThird()+";"+third);
	            	ad.setFourth(ad.getFourth()+";"+fourth);
	       	          }
	            }
	            }
	            RequestDispatcher rd =  request.getRequestDispatcher("cart.jsp");
	            request.setAttribute("msg",ad);
	            rd.forward(request, response);
	            }
catch(Exception ex){
						ex.printStackTrace();
				   }
			}
}
