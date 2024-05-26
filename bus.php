<?php
header('Refresh: 20; url=' .$busID);// gverdis ganaxleba yovel 20 wamshi
?>
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
<?php
echo "<!DOCTYPE html>
<html>
<head>
<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
<title>tbilisi bus</title>
<br/>
</head>
</html>";
$value = $_GET['textarea'];
$busID = file_get_contents("http://transfer.ttc.com.ge:8080/otp/routers/ttc/stopArrivalTimes?stopId=$value");

//ზედმეტის მოშორება
$busID = str_replace('{"ArrivalTime":[', '', $busID);
$busID = str_replace('{"RouteNumber"', 'მარშრუტის №', $busID);
$busID = str_replace('"DestinationStopName"', ' მიმართულება', $busID);
$busID = str_replace('"ArrivalTime"', ' წთ.', $busID);
$busID = str_replace('}]}', '', $busID);
$busID = str_replace('\"', '', $busID);
$busID = str_replace('},', '<br><hr>', $busID);
$busID = str_replace(']}', '<img src=/images/warning.png></img> შეყვანილია გაჩერების არასწორი ID', $busID);
//
echo $busID;

//ჩაწერა ფაილში
file_put_contents('file.txt', $value, FILE_APPEND);
?>
</div>
<center>
<b>tbilisi <font color="#FFD800">bus</font></b>
<h6>2017</h6>
</center>
</body>
</html>
</body>
</html>
