<?php
//20200804 km4ack

session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:/control/login.php'); die();
    }

//include variables from config.php
include('/var/www/html/config.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Control Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1><?php echo $callsign ?>  Control Page<br>
<?php
//display contect of splash.txt file
//$fh = fopen('control.txt','r');
//while ($line = fgets($fh)) {
//  echo($line);
//}
//fclose($fh);
?>
<hr><br>
<h2>System Status</h2>

<h3>
<?php
exec("pidof pat", $pat);
if(empty($pat)) {

    echo '<p style="color:red">Pat not Running';
} else {
echo '<p style="color:green">Pat is Running';
}
?>
<br>

<?php
exec("pidof aprx", $aprx);
if(empty($aprx)) {

    echo '<p style="color:red">APRS not Running';
} else {
echo '<p style="color:green">APRS is Running';
}
?>
<br>

<?php
exec("ls /dev | grep rfcomm", $rf);
if(empty($rf)) {

    //echo "Mobilinkd Not Connected\r\n";
      echo '<p style="color:red"> Mobilinkd Not Connected';
} else {
echo '<p style="color:green">Mobilinkd Connected';
}
?>
<br><hr>

</h3>

<br><br>
<form action="/control/start.php">
    <input type="submit" value="Connect Mobilinkd Winlink">
</form>
<br>
<form action="/control/start-aprs.php">
    <input type="submit" value="Connect Mobilinkd APRS">
</form>
<br>
<form action="/control/stop.php">
    <input type="submit" value="Disconnect Mobilinkd">
</form>
<br>
<?php
// Create variable for server IP address
$pat_ip = $_SERVER['SERVER_ADDR'];
?>

<form action="http://<?php echo $pat_ip; ?>:5050">
    <input type="submit" value="Pat Winlink">
</form>
<br>
<form action="/control/restartpat.php">
    <input type="submit" value="Restart Pat Winlink">
</form>
<br>
<form action="/control/shutdown.php">
    <input type="submit" value="Shutdown Pi">
</form>
<br>
<form action="/control/packet.php">
    <input type="submit" value="Packet List">
</form>
</body>
</html>
