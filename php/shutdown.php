<br><br>

<?php

session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:/control/login.php'); die();
    }

echo "<h1>Shutting Down</h1>";
sleep(10);
$output = shell_exec('/usr/local/bin/killpi');
echo "<pre>$output</pre>";
header('Location: /control.php?success=true');
?>
