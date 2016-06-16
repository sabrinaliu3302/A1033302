<html>
<head>
	<title>寄送email</title>
</head>
<body>
<form action="" method="post">
	寄件人:<input type="text" name="sender"><br/>
	寄件人信箱:<input type="text" name="sendmail"><br/>
	寄件人信箱密碼:<input type="text" name="pwd"><br/>
	收件人:<input type="text" name="receiver"><br/>
	主旨:<input type="text" name="title"><br/>
	內容:<br/>
	<textarea cols="50" rows="10" name="sendMessage" value="write your message here"></textarea><br/>
	<input type="submit" value="送出">
	<input type="reset" value="清除">
</form>
</body>
</html>

<?php

require("PHPMailer-master/PHPMailerAutoload.php");

$sender=$_POST["sender"];
$sendmail=$_POST["sendmail"];
$pwd=$_POST["pwd"];
$receiver=$_POST["receiver"];
$title=$_POST["title"];
$sendMessage=$_POST["sendMessage"];

//E-mail Message
$mail = new PHPMailer();
//$mail->SMTPDebug = 1;
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPAuth = true; // enable SMTP authentication

$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
$mail->Port = 587; // set the SMTP port for the GMAIL server

$mail->Username = "$sendmail"; // GMAIL username
$mail->Password = "$pwd"; // GMAIL password
$mail->From = "$sendmail";
$mail->FromName ="$sender";

$mail->CharSet = "utf-8";
$mail->IsHTML(true);// send as HTML
$mail->Subject="$title";
$mail->Body = "$sendMessage";

$mail->AddAddress("$receivemail");
$mail->AddAddress("php@nuk.im", "$receiver");

if(!$mail->Send()) {        
	echo "Mailer Error: ".$mail->ErrorInfo;        
} else {        
	echo "Message sent!";        
}

?>