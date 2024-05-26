<!DOCTYPE HTML>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<title>tbilisi bus</title>
</head>
<body>
<nav>
<a href="index.php"><img src="images/bus.png" alt="logo" align="left" border="0"></a>
<ul>
<li><a href="index.php">მთავარი</a></li>
<li><a href="about.php">შესახებ</a></li>
<li><a href="contact.php">კონტაქტი</a></li>
</ul>
</nav>

<div class="pic">
<!--php kodi--> 
<?php

$mail = 'mail@domain.com'; // E-mail მისამართი
$theme = '';   // შეტყობინების Subject

if(!trim($_POST['mes']))
{
print '<div class="input">
<form action="?" method="post">
<div>
<br/>
თქვენი E-mail<br/>
<input type="text" name="mail" value="@"/><br/>
შეტყობინება<br/>
<textarea name="mes" rows="8" cols="42"></textarea><br/>
<input type="submit" value="გაგზავნა"/></div></form></div>';
}
else
{
$mes = trim($_POST['mes']);
 
if(trim($_POST['mail']))
{$mes.= "\n".'დაგვიკავშირდით: '.trim($_POST['mail']);}
 
if(mail($mail, '=?utf-8?B?'.base64_encode($theme).'?=', $mes, 'From: robot@'.$_SERVER['HTTP_HOST']."\r\n".'Content-type: text/plain; charset=utf-8'))
{print '<div class="red"><br>თქვენი შეტყობინება წარმატებით გაიგზავნა<br/></div>';}
else
{print '<div class="red"><br>შეტყობინება არ გაიგზავნა!<br/></div>';}
}

?>
</div>
<center>
<b>tbilisi <font color="#FFD800">bus</font></b>
<h6>2017</h6>
</center>
</body>
</html>
