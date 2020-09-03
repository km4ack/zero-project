<?php
//20200903 km4ack

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
<title>Packet Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1><?php echo $callsign ?>  Packet Page<br></h1>
<?php
 echo nl2br( file_get_contents('/home/pi/packet.txt') );
?>
</body>
</html>
