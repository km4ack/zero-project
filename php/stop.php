<?php

session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:/control/login.php'); die();
    }

$output = shell_exec('/usr/local/bin/removeblue');
echo "<pre>$output</pre>";
header('Location: /control.php?success=true');
?>
