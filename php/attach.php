<?php 
    if(isset($_POST['submit'])) 
    { 
        //The form has been submitted, prep a nice thank you message 
		$reply_page = "../cv_reply.php";
 
        //Deal with the email 
        $to = 'recruitment@banhampoultryuk.com'; 
        $subject = 'Job Application Interest'; 
 
		$message = "\nName: ".$_REQUEST['who'];
        $message .= "\nMessage: ".$_POST['message']; 
        $attachment = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name']))); 
        $filename = $_FILES['file']['name']; 
 
        $boundary =md5(date('r', time()));  
 
        $headers = "From: webmaster@banhampoultryuk.com\r\nReply-To: webmaster@banhampoultryuk.com"; 
        $headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\""; 
 
        $message="This is a multi-part message in MIME format. 
 
--_1_$boundary 
Content-Type: multipart/alternative; boundary=\"_2_$boundary\" 
 
--_2_$boundary 
Content-Type: text/plain; charset=\"iso-8859-1\" 
Content-Transfer-Encoding: 7bit 
 
$message 
 
--_2_$boundary-- 
--_1_$boundary 
Content-Type: application/octet-stream; name=\"$filename\"  
Content-Transfer-Encoding: base64  
Content-Disposition: attachment  
 
$attachment 
--_1_$boundary--"; 
 
    mail($to, $subject, $message, $headers); 
	header( "Location: $reply_page" );
    } 
?> 
