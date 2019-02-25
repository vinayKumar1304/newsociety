<?php
	$subject = "Enquiry" . date("M d, Y");
	$to ="chsplgurgaon@yahoo.in";
		$headers = "From:".trim($_POST['email'])."\n";
		$headers .= "X-Mailer: PHP\n"; // mailer
		$headers .= "Return-Path: <". trim($_POST['email']).">\n";  // Return path for errors
		$headers .= "Content-Type: text/html; charset=iso-8859-1\n"; // Mime type
		
		$message = "<table style='background-color:#E7FDFE;' align='center' cellspacing='2' cellpadding='4' border='1' width='60%><tr><td colspan='2'><font face='verdana' size='2' color='#3399ff'><b>".$subject."<br></b></font></td></tr>";
		
		$message .= "<tr>";
		$message .= "<td width=\"20%\"><font face=\"verdana\" size=\"2\">Your Name";
		$message .= "</font></td>";
		$message .= "<td width=\"80%\"><font face=\"verdana\" size=\"2\">".trim($_POST['your_name']);
		$message .= "</font></td>";
		$message .= "</tr>";
		
		$message .= "<tr>";
		$message .= "<td width=\"20%\"><font face=\"verdana\" size=\"2\">Phone";
		$message .= "</font></td>";
		$message .= "<td width=\"80%\"><font face=\"verdana\" size=\"2\">".trim($_POST['phone']);
		$message .= "</font></td>";
		$message .= "</tr>";
		
		$message .= "<tr>";
		$message .= "<td width=\"20%\"><font face=\"verdana\" size=\"2\">Email";
		$message .= "</font></td>";
		$message .= "<td width=\"80%\"><font face=\"verdana\" size=\"2\">".trim($_POST['email']);
		$message .= "</font></td>";
		$message .= "</tr>";
		
		$message .= "<tr>";
		$message .= "<td width=\"20%\"><font face=\"verdana\" size=\"2\">Subject";
		$message .= "</font></td>";
		$message .= "<td width=\"80%\"><font face=\"verdana\" size=\"2\">".trim($_POST['msg_sub']);
		$message .= "</font></td>";
		$message .= "</tr>";
		
		$message .= "<tr>";
		$message .= "<td width=\"20%\"><font face=\"verdana\" size=\"2\">Message";
		$message .= "</font></td>";
		$message .= "<td width=\"80%\"><font face=\"verdana\" size=\"2\">".trim($_POST['message']);
		$message .= "</font></td>";
		$message .= "</tr>";
		
		$message .= "</table>";
		@mail($to, $subject, $message, $headers);
		header("Location: thank_you.html");
		exit;

?>