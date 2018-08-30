package Servlets;

import java.sql.DriverManager;
import java.sql.Statement;

public class Connection {

	public static void main(String args[]){
		try {
			Class.forName("com.mysql.jdbc.Driver");
			java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/vishal","root","root");
			Statement st = con.createStatement();
			int count = st.executeUpdate("update login set password='vishal1' where user='vishal'");
			if (count==1){
				System.out.println("Updated Successfully");
			}
			else{
				System.out.println("Unsuccessfull");
			}
			con.close();
		}
		catch (Exception ex){
			ex.printStackTrace();
		}
	}
}
