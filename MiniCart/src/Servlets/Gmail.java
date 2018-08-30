package Servlets;

import java.util.Properties;

import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.PasswordAuthentication;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;

public class Gmail {

public static void main(String args[]){
	
	final String username="shalu.kshatriya@gmail.com";
	final String password="sindhugopi";
	
	Properties props = new Properties();
	props.put("mail.smtp.auth", "true");
	props.put("mail.smtp.starttls.enable", "true");
	props.put("mail.smtp.host", "smtp.gmail.com");
	props.put("mail.smtp.port", "587");
	//props.put("mail.smtp.socketFactory.port", "465");
	//rops.put("mail.smtp.socketFactory.class", "javax.net.ssl.SSLSocketFactory");
	//props.put("mail.smtp.socketFactory.fallback", "false");
		Session session = Session.getInstance(props, new javax.mail.Authenticator(){
			
			protected PasswordAuthentication getPasswordAuthentication(){
			 return new PasswordAuthentication(username,password);
				
  } });

		try{
			
			Message message = new MimeMessage(session);
			message.setFrom(new InternetAddress("shalu.kshatriya@gmail.com"));
			message.setRecipients(Message.RecipientType.TO, InternetAddress.parse("kalagaharish@gmail.com"));
			message.setSubject("Book Store");
			message.setText("Your order is confirmed!!!");
			Transport.send(message);
			System.out.println("Successfully mailed");	
		} catch(MessagingException e){
			
			throw new RuntimeException(e);
		}


}
	
}
