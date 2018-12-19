<?php
//send_mail.php

if(isset($_POST['email_data']))
{
	require 'class/class.phpmailer.php';
	$output = '';
	foreach($_POST['email_data'] as $row)
	{
		$mail = new PHPMailer;
		$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '465';								//Sets the default SMTP server port
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = 'awontiromanus10@gmail.com';					//Sets SMTP username
		$mail->Password = 'progress4ever';					//Sets SMTP password
		$mail->SMTPSecure = 'ssl';							//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = 'loveroyalassemby.org';			//Sets the From email address for the message
		$mail->FromName = 'Loveroyalassembly';					//Sets the From name of the message
		$mail->AddAddress($row["email"], $row["name"]);	//Adds a "To" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML
		$mail->Subject = 'Newsletters'; //Sets the Subject of the message
         mysql_connect("localhost", "root","");
         mysql_select_db("loveroyalassembly");
         $query = mysql_query("SELECT * FROM messages ORDER BY id DESC LIMIT 1");
         while($row = mysql_fetch_array($query))
         {
            $name = $row['message'];
         }
		//An HTML or plain text message body
		$mail->Body = $name.'<p>To opt out of recieving our newsletters, Click Here <a href="optout.php?e=$customer_email" >unsubscribe</a> </p>';

		$mail->AltBody = '';

		$result = $mail->Send();						//Send an Email. Return true on success or false on error

		if($result["code"] == '400')
		{
			$output .= html_entity_decode($result['full_error']);
		}

	}
	if($output == '')
	{
		echo 'ok';
	}
	else
	{
		echo $output;
	}
}

?>