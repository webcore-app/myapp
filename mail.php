<?php
session_start();
if(empty($_POST)) exit;
$to = "gopalkumar27sep@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>new number</title>
</head>
<body>
<p>New Contact from Session:".session_id()." </p>
<table>
<tr>
<th>Name</th>
<th>Mobile</th>
</tr>
<tr>
<td>".$_POST['name']."</td>
<td>".$_POST['mobile']."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
// $headers .= 'From: <webmaster@example.com>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";
file_put_contents("log.html", 
"
<p>New Contact from Session:".session_id()." </p>
<table>
<tr>
<th>Name</th>
<th>Mobile</th>
</tr>
<tr>
<td>".$_POST['name']."</td>
<td>".$_POST['mobile']."</td>
</tr>
</table>
" . "<br><br>",
FILE_APPEND);

mail($to,$subject,$message,$headers);
?>